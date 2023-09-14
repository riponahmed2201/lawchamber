<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title', 'banner_img', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
