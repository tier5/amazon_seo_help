<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function service() {
    	return $this->belongsTo('App\Services', 'id');
    }

    public function feature() {
    	return $this->belongsToMany('App\Features', 'package_feature', 'package_id', 'feature_id');
    }

   

}
