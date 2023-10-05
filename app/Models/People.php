<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';

    protected $fillable = [
        'name', 'email', 'phone_number', 'designation_id', 'details', 'facebook_link', 'linkedin_link', 'image', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
