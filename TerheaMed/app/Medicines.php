<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicines extends Model
{
    
	public function elements()
	{
		return $this->hasMany(Contentmed::class);
	}

	public function publish(Contentmed $elements)
	{
		$this->elements()->save($elements);
	}

}
