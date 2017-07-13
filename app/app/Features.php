<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
     public function package() {
    	return $this->belongsToMany('App\Package', 'package_feature', 'package_id', 'feature_id');
    }
}
