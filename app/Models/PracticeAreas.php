<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeAreas extends Model
{
    use HasFactory;

    protected $table = 'practice_areas';

    protected $fillable = [
        'name', 'team_head_name', 'deputy_head_name', 'details', 'image', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
