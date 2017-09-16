<?php

namespace App\Http\Controllers;
use App\Http\Requests\updateProfile;
use App\Mail\WelcomeBack;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Salary;
use App\Models\UserDepartment;
use App\Models\UserDesignation;
use App\Models\UserSalary;
use App\User;
use App\Models\Profile;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
/*trait Foo
{
    public function sayFoo()
    {
        return 'Hey my guy';
    }
}*/
class HomeController extends Controller
{
    /*use Foo;
    private $property = "Geepee";*/
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /* EMPLOYEE BEGINS*/
    public function dash()
    {
        if (auth()->user()->is_employee !== 1) {
            return redirect()->to('/');
        }
        $users = DB::table('users')->where('is_employee', 1)->get();
        $departments = Department::all();
        $profiles = Profile::all();
        $userDepartments = UserDepartment::all();
        $userDesignations = UserDesignation::all();

        return view('user/dashboard', compact('users', 'departments'));
    }

    public function getContact()
    {
        return view('user.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = array(
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'bodyMessage' => $request->input('message'),
        );

        Mail::send('emails.contact', $data, function ($message) use ($data) {
           $message->from($data['email']);
           $message->to('no-reply@git-hrma.com');
           $message->subject($data['subject']);
        });
        session()->flash('success', 'Your Mail Has Been Sent! Our Representative Will Get Back To You.');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getUserUpdate()
    {
        return view('user.update_profile');
    }

    public function postUserUpdate(Request $request)
    {
        if(Auth::user()->id == $request->id)
        {
            $userData = $request->all();
            unset($userData['_token']);
            User::where('id', $request->id)->update($userData);
            session()->flash('success', 'Profile updated');
        }else{
            return redirect()->to(url('/'));
        }
        return redirect()->back();
    }

    public function upload_picture(Request $request)
    {
        # we check if the request id passed in the upload picture form is not the same as the id of the authenticated user
        if ($request->id != Auth()->user()->id) {
            # we display a message for the user to log in to perform the operation to be sure the owner of the account is the actual person performing the task.
            session()->flash('alert-danger', 'Log in to perform this action');
            # redirect back to te upload picture form
            return redirect()->back();
        }

        // getting all of the images for the story
        $file = $request->file('pro_image');

        $theImages = "";

        # declare our validation rules
        $rules = array(
            'file' => 'required|mimes:png,gif,jpeg'
        );                      //'required|mimes:png,gif,jpeg,txt,pdf,doc'

        $validator = Validator::make(array('file' => $file), $rules);
        if ($validator->passes()) {
            $destinationPath = 'profile_uploads/' . microtime(true);
            $filename = $file->getClientOriginalName();
            $theImages = $destinationPath . '/' . $filename;
            $upload_success = $file->move($destinationPath, $filename);

        } else {
            session()->flash('danger', 'Validation failed');
            return redirect()->back();
        }

        // Update to db
        $user = new User();
        $user->where('id', $request->id)->update(['pro_pic' => $theImages]);


        session()->flash('success', 'Profile Picture Updated Successfully.');
        return redirect()->back();
    }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

}
