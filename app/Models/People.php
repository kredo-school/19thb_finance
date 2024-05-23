<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
