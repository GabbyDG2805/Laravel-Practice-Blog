<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function scopeIncomplete($query)
    {
    	return $query->where('done?', false)->get();
    }
}
