<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * 
     */
    protected $fillable = [
        'display_name',
        'designation',
        'company',
        'address',
        'email',
        'contact_number',
        'other'
    ];
}
