<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacist extends Model
{
     protected $fillable = [
		'id','pharmacistName','phoneNum','duration','userName','password'

	];
}
