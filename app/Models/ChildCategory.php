<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ChildCategory extends Model
{
    use HasFactory;

    public function parentCategory() {
        return $this->belongsTo(ParentCategory::class)->where('user_id', Auth::user()->id)->exists();
    }
}
