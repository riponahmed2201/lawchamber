<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title', 'date', 'description', 'image', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
