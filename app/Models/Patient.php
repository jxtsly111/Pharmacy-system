<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'DOB',
        'contact_number',
        'emergency_contact_number',
        'allergies',
        'medical_conditions',
        'medications',
        'height',
        'weight',
        'blood_pressure',
        'physician_notes',
    ];
}
