<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'image'
    ];
}
