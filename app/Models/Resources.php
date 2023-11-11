<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $table = 'resources';

    protected $fillable = [
        'title', 'date', 'details', 'image', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
