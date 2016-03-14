<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'PersonId';
    protected $fillable = ['FirstName', 'LastName', 'Email', 'Phone'];
}
