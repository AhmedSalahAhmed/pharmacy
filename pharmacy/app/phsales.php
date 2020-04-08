<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phsales extends Model
{
    
    protected $fillable = [
		'id','medType','qty','price','durationsId'

	];
}
