<?php
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Package;
use App\User;
use App\Package;
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

		return view('admin/package');
	}	
	
	
	public function packagerecord(){
		
		$package = new Package;
			
		for($i=0;$i<count($data);$i++){
			//echo $data['package'][$i];
			/*Package::create(['packagename' => $data['package'][$i],'packagetag' => $data['packagetag'][$i],'status' => 'active']);*/
			$package->packagename = $data['package'][$i];
			$package->packagetag = $data['packagetag'][$i];
			$package->status = 'active';
			$package->save();

		}
		//die;
		return view('admin/package');
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