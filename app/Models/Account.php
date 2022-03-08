<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'dob',
        'phone_no',
        'email',
        'address',
        'hobby',
        'gender',
        'country',
    ];

    // public function setHobbyAttribute($value)
    // {
    //     $this->attributes['hobby'] = json_encode($value);
    // }

    // public function getHobbyAttribute($value)
    // {
    //     return $this->attributes['hobby'] = json_decode($value);
    // }
    
}
