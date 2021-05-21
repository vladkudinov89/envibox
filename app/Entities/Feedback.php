<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     protected $table = 'feedback';

     protected $fillable = ['name', 'phone_number','message'];
}
