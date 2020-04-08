<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
     protected $fillable = [
		'id','medicineId','rqty','rcompany','mtype'

	]; 
}
