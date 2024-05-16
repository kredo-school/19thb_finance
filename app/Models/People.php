<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $fillable = [
        'user_id',
        'name',
        
        'icon_color' ,
        'new_password',
        'confirm_password',
        ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}