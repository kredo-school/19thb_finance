<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ItemList;
use App\Models\ParentCategory;
use App\Models\People;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $userPeople =  People::create([
            'name' => $data['name'],
            'user_id' => $user->id,
            'color_hex' => 'FE6D73'
        ]);

        $item_list = ItemList::create([
            'name' => 'Shopping List',
            'user_id' =>$user->id,
        ]);

        $defaultParentCategories = ParentCategory::where('is_default', 1)->get();

        if ($defaultParentCategories->isNotEmpty()) {
            foreach ($defaultParentCategories as $defaultParentCategory) {
                $newParentCategory = $defaultParentCategory->replicate();
                $newParentCategory->user_id = $user->id;
                $newParentCategory->save();

                $defaultChildCategories = $defaultParentCategory->childCategories()->where('is_default', 1)->get();
                foreach ($defaultChildCategories as $defaultChildCategory) {
                    $newChildCategory = $defaultChildCategory->replicate();
                    $newChildCategory->parent_category_id = $newParentCategory->id;
                    $newChildCategory->save();
                }
            }
        } 

        return $user;
    }
}
