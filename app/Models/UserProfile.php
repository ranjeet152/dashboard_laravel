<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'father_name', 
        'mother_name', 
        'dob', 
        'phone', 
        'college', 
        'village', 
        'hobbies', 
        'district',  
    ];
}

