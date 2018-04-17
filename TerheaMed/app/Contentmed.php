<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contentmed extends Model
{
	protected $table = 'contentmed';
    
	public function medicine()
	{
		return $this->belongsTo(Medicine::class);
	}

}
