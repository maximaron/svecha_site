<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCase extends Model
{
    use HasFactory;

    protected $table = 'cases'; // Link this model to the 'cases' table

    // Allowed fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'specific_person',
        'third_part',
        'going_on',
        'previous_contact',
    ];
}
