<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
          protected $fillable = [
		'pharmaciesId','phName','address','phAdmin','email','password','phone'

	];
     public function sales()
    {
    	$this->hasOne(sales::class);
    }
}
