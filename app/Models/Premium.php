<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
    use HasFactory;

    protected $table = 'payments'; // Always Add this sentence. keep the correct name "payments"
    protected $fillable = [
        'user_id',
        'subscription',
        'cardholder_name',
        'card_number',
        'expire_month',
        'expire_year',
        'security_code',
        ];

    public function user() {
        return $this->belongsTo(User::class);
        // All the information come from the User Model(User.php) (name, email, password) 
    }
    
    // public function payment()
    // {
    //     return $this->hasOne(Payment::class);
    // }
    // public function address()
    // {
    //     return $this->hasOne(Address::class);
    // }

    // public function inqruiry()
    // {
    //     return $this->hasMany(Inquiry::class);
    // }
    // public function reviews() {
    //     return $this->hasMany(Review::class);
    // }
    // public function shopOrders() {
    //     return $this->hasMany(ShopOrder::class);
    // }


}