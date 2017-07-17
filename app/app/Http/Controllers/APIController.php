<?php

namespace App\Http\Controllers;

use App\User;
use App\Package;
use App\Features;
use App\Package_feature;
use App\Services;
use Auth;
use File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

class APIController extends BaseController
{
    public function seoservice(){

		$service = Input::get('service');
		$seopackage = array();				
		$seoService = Services::where('servicename', $service)->first()->package;
		foreach($seoService as $packageid => $package){
			
			$seopackage['package_tag'][] = $package->packagetag;
			$seopackage['package_price'][] = $package->packageprice;
			foreach($package->feature as $key => $value){
				$seopackage[$package->packagename][] = $value->featurename;
			}
		}
		
		echo json_encode($seopackage);
	
	}
}
