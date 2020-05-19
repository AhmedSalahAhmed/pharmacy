<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable = [
		'id','medicineId','medicine','mType','company','qty','price','proDate','exDate'

    ];
    

    public function sales()
    {
       	return $this->hasOne('app\sales');
    }	
}
