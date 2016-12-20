<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	// restricts columns from modifying
	protected $guarded = [];
	
	// The attributes that are mass assignable
	protected $table = 'contacts';
	
	// all the database table filds
	protected $fillable = [
	'name','email','subject','service','reference','message',
	];
}
