<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public function package() {
    	return $this->hasMany('App\Package', 'service_id');
    }
}
