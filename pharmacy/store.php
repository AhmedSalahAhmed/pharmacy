<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{	protected $fillable = [
		'id','medicineId','medicine','medType','company','qty','price','proDate','exDate'

	];

    public function sales()
    {
    	$this->hasOne(sales::class);
    }	
}
