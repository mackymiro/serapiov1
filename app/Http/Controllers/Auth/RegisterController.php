<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
	 
    protected $redirectTo = '/home';
	
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
	
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|string|max:255',
			'middleName'=> 'required|string|max:255',
			'lastName'=> 'required|string|max:255',
			'address'=> 'required|string|max:255',
			'contactNumber'=> 'required|string|max:255',
			'username'=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'files'=> 'required|mimes:pdf,jpg,jpeg,bmp,png',
			'checkbox' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *oco
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
	{
		$membersNumber = time() . rand(10*45, 100*98);
		
		//get the file or image
		$request = request();
		$photo = $request->file('files');
		$profileImageSaveAsName = time() . "." .$photo->getClientOriginalExtension();
		
		//upload the file to uploads folder
		$upload_path = 'uploads/';
		$image = $upload_path . $profileImageSaveAsName;
		
		//move the image to uploads folder
		$success = $photo->move($upload_path, $profileImageSaveAsName);
		
        return User::create([
			'members_number'=>$membersNumber,
            'first_name' => $data['firstName'],
			'middle_name'=>$data['middleName'],
			'last_name'=>$data['lastName'],
			'address'=>$data['address'],
			'contact_number'=>$data['contactNumber'],
			'filename'=>$profileImageSaveAsName,
			'username'=>$data['username'],
			'reference_person'=>$data['referencePerson'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
		
    }
}
