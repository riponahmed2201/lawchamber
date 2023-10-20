<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    use HasFactory;

    protected $table = 'client_categories';

    protected $fillable = [
        'name', 'details', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
