<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
	protected $fillable = [
		'salesId','pharmaciesId','medicineId','qty'

  ]; 
      public function pharmacy()
    {
    	$this->belongsTo(pharmacy::class);
    }
    public function store()
    {
    	return $this->belongsTo('app\store');
    }
}
