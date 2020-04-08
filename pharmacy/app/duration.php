<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duration extends Model
{
     protected $fillable = [
		'id','pharmacistsId','durStart','durEnd','durIncome'

	];
}
