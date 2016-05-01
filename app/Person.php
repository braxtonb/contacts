<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    // use the people table
		protected $table = 'people';

		// An array of the fields we can fill in the people table
		protected $fillable = ['name', 'age', 'email'];
		
}
