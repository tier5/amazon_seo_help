<?php
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Package;
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


class UserController extends BaseController
{
	
	public function userDetails(Request $request){
		//$user = User::all();
		/*echo '<pre>';
		print_r($user);
		die;*/
		$requestData = Input::all();
		/*echo '<pre>';
		print_r($requestData);
		die;*/
		$columns = array( 
			// datatable column index  => database column name
				0=>'firstname', 
				1=>'lastname',
				2=> 'email',
				3=> 'role',
				4=> 'userName'
			);
		
			if($requestData['search']['value']){
			    $queryString = $requestData['search']['value']; 
			    
				$data = User::where('firstname', 'LIKE', "%$queryString%")
					         ->orWhere('lastname', 'LIKE', "%$queryString%")
					         ->orWhere('email', 'LIKE', "%$queryString%")
					         ->orWhere('role', 'LIKE', "%$queryString%")
					         ->orWhere('username', 'LIKE', "%$queryString%")
					         ->orderBy('firstname')->paginate(5);
			}else{
				$data = User::where('id', '!=', 1)->get();
			}
			$employee = array();			
			foreach ($data as $result) 
			{   
				$employee[] = array(
						'0'       => "<a href=". route('/userdtls', $result['id']).">".$result['firstname']."</a>",
						'1'       => $result['lastname'],
						'2'       => $result['email'],
						'3'       => $result['role'],
						'4'       => $result['userName']
					);
			}
						
			//$totalFiltered = count($employee);
			$totalData = count($employee);
			if($requestData['search']['value'])
				$totalFiltered = count($employee);
			else
				$totalFiltered = count($employee);
			//echo $totalData;
			//die;
			$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $employee   // total data array
			);
		echo json_encode($json_data);
	}
	public function login(Request $request)
	{
	   
	   $username = Input::get('email');
	   $password = Input::get('password');
	   $data = Input::all();
	    // Applying validation rules.
	    $rules = array(
			'email' => 'required|email',
			'password' => 'required|min:5',
		     );
	    $validator = Validator::make($data, $rules);
	    
	    if ($validator->fails()){
	      // If validation falis redirect back to login.

	      return response()->json(['errors'=>$validator->errors()]);
	      	
	      //return Redirect::to('/')->withInput(Input::except('password'))->withErrors(Input::except('password'));
	      return Redirect::back()->withErrors($validator);
	    }
	    else{
	    		//echo Auth::user()->id;
					//die;
				
				$userdata = array(
					'email' => Input::get('email') ,
					'password' => Input::get('password')
				);
 
				// attempt to do the login
 
				if (Auth::attempt($userdata))
				{
					
					
					// validation successful
					// do whatever you want on success
					//return Redirect::to('admin/dashboard');
					//return view('admin/dashboard');
					//return redirect('dashboard');
					//exit;
					//return redirect('admin/dashboard');
					//return route('dashboard');
					return response()->json(array(
		                    'message'   =>  'success'
		                ));

					$creds = array();
					$creds['user_login'] = Input::get('email');
					$creds['user_password'] = Input::get('password');
					$creds['remember'] = true;
					//$user = wp_signon( $creds, false );
					// $request->session()->regenerate();
     //        		return response(['success' => true], Response::HTTP_OK);
					//return redirect()->route('/dashboard');
					//exit;
				}
			  else
				{
				// validation not successful, send back to form
					//$message = (!$message ? $message = 'Invalid email and password');
		            return response()->json(array(
		                    'message'   =>  'Invalid email and password'
		                ));        
				//return Redirect::to('/');
				}
		}    
	}
	public function userRegistration(Request $request)
	{
		$data = Input::all();
		//dd($data);
		//die;
		$validator = Validator::make($request->all(), [
			'firstname' => 'required',
			'lastname' => 'required',
		    'username' => 'required|min:10|max:64|unique:users',
		    'email' => 'required|unique:users|email|min:8',
		    'password' => 'required|min:3|confirmed',
       		'password_confirmation' => 'required|min:3'
		],
		[
		    'email.required' => 'Email is required',
		    'username.unique' => 'Username is taken'
		]);

		if ($validator->fails()) {
			$errors = $validator->errors();
			//dd($errors);
		    //echo 999; die;	
		    return redirect()->route('/register')
		        ->withErrors($validator)
		        ->withInput();
		}
		else{
			User::create(['firstname' => $data['firstname'],'lastname' => $data['lastname'],'userName' => $data['username'],'email' => $data['email'],
						  'password' => bcrypt($data['password'])]);

			$userdata = array(
			    'user_login'  =>  $data['email'],
			    'user_email'  =>  $data['email'],
			    'user_pass'   =>  $data['password']
			);
			$user_id = wp_insert_user( $userdata ) ;
			update_user_meta($user_id,'laravel_user',$user->id);

			return view('admin/dashboard');
		}
		
	}
	public function createPackage(){

		$docs = Features::all();
		$services = services::all();
		//echo '<pre>';
		//print_r($services);
		//echo $services->servicename;
		//echo $docs[0]->featurename;
		//echo count($docs);
		foreach($docs as $username) {
		 $items['featurename'][] = $username->featurename;
		 $items['featureid'][] = $username->id;
		}

		foreach($services as $service) {
		 $items['servicename'][] = $service->servicename;
		 $items['serviceid'][] = $service->id;
		}
		//print_r($items);
		//echo '</pre>';
		
		return view('admin/package',compact('items'));
		//return View::make('package')->with($items);
	}
	public function packagefeature(){

		return view('admin/packagefeature');
	}

	public function createServices(){

		return view('admin/services');
	}
	public function servicerecord(){
		//echo 999; die;
		$data = Input::all();
		/*echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit; */
		for($i=0;$i<count($data);$i++){
			$services = new services;
			if(!isset($data['service'][$i]) || !$data['service'][$i]) continue;
			//echo $data['package'][$i];
			/*Package::create(['packagename' => $data['package'][$i],'packagetag' => $data['packagetag'][$i],'status' => 'active']);*/
			$services->servicename = $data['service'][$i];
			$services->status = 'active';
			
			$services->save();
		}
		
		return view('admin/services');
	}


	public function packagerecord(){
		$data = Input::all();

		for($i=0;$i<count($data);$i++){
			$package = new Package;
			
			if(!isset($data['package'][$i]) || !$data['package'][$i]) continue;
			
			$package->packagename = $data['package'][$i];
			$package->packagetag = $data['packagetag'][$i];
			$package->service_id = $data['service'][$i];
			$package->packageprice = $data['price'][$i];
			$package->status = 'active';
			$package->save();
			//echo 'package id '.$package->id;
			//exit;
			if(isset($data['feature'][$i])){
				
				for($j=0;$j<count($data['feature'][$i]);$j++){
					$packagefeature = new Package_feature;
					$packagefeature->package_id = $package->id;  
					$packagefeature->feature_id = $data['feature'][$i][$j];
					$packagefeature->save();
				}
			}


		}
		//echo 'last id'.$last_id;
		//exit;
		//dd($data);
		return $this->createPackage();

		//return view('admin/package');
	}


	public function seoservice(){

	//$servicedtls = Services::with('package')
				//->join('package_feature', 'package_feature.package_id', '=', 'package.id')
				//->where('services.servicename', '=', 'SEO')->get();

	/*$servicedtls = Services::with('package')
	            	->where('servicename', '=', 'SEO')
					->get();*/
	$service = Input::get('service');
	$name = Input::get('name');				
	echo $service.''.$name;
	$seopackage = array();				
	$seoService = Services::where('servicename', 'SEO')->first()->package;
	foreach($seoService as $packageid => $package){
		//echo '<br>'.$package->id.'   '.$package->packagename.'<br>';

		//$seopackage[$packageid] = $package->id;
		//$seopackage['package_name'][] = $package->packagename;
		$seopackage['package_tag'][] = $package->packagetag;
		foreach($package->feature as $key => $value){
			//echo ' '. $value->id.'   '.$value->featurename;
			//echo $package->feature;
			$seopackage[$package->packagename][] = $value->featurename;
		//dd($package->feature);
		}
	}
	echo '<pre>';
	print_r($seopackage);
	echo '</pre>';
	echo json_encode($seopackage);

	//$servicedtls = Package::with('service','feature')
	            	//->where('service.servicename', '=', 'SEO')
					//->get();					
	//echo '<pre>';
	//print_r($servicedtls);
	//echo '</pre>';die;

	//dd($servicedtls);
	//$posts = Package::with(array('services', 'services.servicename'))->get();
	/*$service = array();
	foreach($servicedtls as $key => $value ) {
        echo count($value->package);
        for($i=0;$i<count($value->package);$i++){
        	//echo $value->package[$i];
        	$service['packagename'][] = $value->package[$i]->packagename;
        	$service['packageid'][] = $value->package[$i]->id;  
        	$service['packagetag'][] = $value->package[$i]->packagetag;
        	$service['service_id'][] = $value->package[$i]->service_id;
        }
				
		 //$service['packagename'][] = $serviceseo->packagename;
		 //$service['featureid'][] = $serviceseo->id;
		}*/
	
	//dd($service);
	}
	public function packagefeatureinsert(){
		$data = Input::all();
		
		//dd($data);
			
		for($i=0;$i<count($data);$i++){
			$features = new Features;
			$features->featurename = $data['feature'][$i];
			$features->status = 'active';
			
			$features->save();
		}
		
		return view('admin/packagefeature');
	}

	
	public function profileupdate(UserController $request){
		$data = Input::all();
		$id = $data['id'];
        
		$user = User::findOrFail($id);
		if(!empty($data['imageupload'])){
			//$filename2 = $data['imageupload'];
			//File::delete($filename2);
			//echo $user->profilePicture;
			//die;
			$file = $data['imageupload'];
			$filename2 = $file->getClientOriginalName();
			//dd($user->profilePicture);
			//echo $filename2;
			File::delete(public_path().'/imageupload/'.$user->profilePicture);
    		//die;
			
	    	$imgname = time().$file->getClientOriginalName();
	    	$file->move(public_path().'/imageupload/', $imgname);
       		$user->profilePicture = $imgname;
       	}	
	    $user->firstname = $data['firstname'];
    	$user->lastname = $data['lastname'];
    	$user->email = $data['email'];
    	
    	$user->id = $data['id'];
    	/*echo public_path(public_path().'/imageupload/');
    	echo '<pre>';
    	print_r($user);
    	echo '</pre>';
    	die;*/
    	
    	
    	$user->save();
   		//return \Redirect::route('/profile', [$user->id])->with('message', 'User has been updated!');
   		return redirect()->route('/profile')->with('message', 'Records updated successfully');
	}
	public function passwordupdate(){
		$data = Input::all();
		$id = $data['editid'];
		
     	$user = User::findOrFail($id);
     	$user->password = bcrypt($data['password2']);
    	$user->save();
   		//return \Redirect::route('/profile', [$user->id])->with('message', 'User has been updated!');
   		return redirect()->route('/profile')->with('message', 'Password updated successfully');
	}

	public function profile() {

		dd(Auth::user());
		//return view('admin/profile');
	}
}	