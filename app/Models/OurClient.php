<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    use HasFactory;

    protected $table = 'our_clients';

    protected $fillable = [
        'name', 'category_id', 'logo', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
