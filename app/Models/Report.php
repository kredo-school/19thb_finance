<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
        'email',
        'subject',
        'details',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
