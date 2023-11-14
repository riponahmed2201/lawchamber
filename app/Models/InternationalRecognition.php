<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalRecognition extends Model
{
    use HasFactory;

    protected $table = 'international_recognitions';

    protected $fillable = [
        'year_name', 'legal_details', 'partner_chamber_details', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
