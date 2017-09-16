<?php

namespace App\Http\Controllers;
use App\Http\Requests\adminRegistration;

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


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['logout', 'admin_reg', 'p_admin_reg']);
    }

    public function getDash()
    {
        if (auth()->user()->is_admin !== 2) {
            return redirect()->to('/');
        }
        $users = DB::table('users')->where('is_employee', 1)->get();
        $admins = DB::table('users')->where('is_admin', 2)->get();
        $departments = Department::all();
        $profiles = Profile::all();
        $userDepartments = UserDepartment::all();
        $userDesignations = UserDesignation::all();
        return view('admin.dashboard', compact('users', 'departments', 'profiles', 'userDepartments', 'admins', 'userDesignations'));
    }


    public function admin_reg()
    {
        return view('auth.a_register');
    }
    public  function p_admin_reg(adminRegistration $req)
    {
        $data = $req->all();
       $user = new User();
       $user->full_name = $data['full_name'];
       $user->email = $data['email'];
       $user->phonenum = $data['phonenum'];
       $user->password = bcrypt($data['password']);
       $user->is_admin = 2;
       $user->save();

       session()->flash('success', 'Admin registered successfully!!');
       return redirect()->back();

    }


    public function getEditLeave($id)
    {
        $leave = new Leave();
        $leave = $leave->find($id);
        $leavess = $leave->all(['id', 'leave_category']);
        return view('admin.leave_category_edit', ['leave' => '$leave', 'leaveId' => $id, 'leavess' => $leavess]);
    }


    public function postEditLeave(Request $request)
    {
        $requestData = $request->all();
        unset($requestData['_token']);
        Leave::where('id', $request->id)->update($requestData);
        session()->flash('success', 'Update is successful');
        return redirect()->back();

      /*  $leave = new Leave();
        $leave = $leave->findOrFail($request->input('id'));
        $leave->leave_category = $request->input('leave_category');
        $leave->save();
        session()->flash('success', 'Update is successful');
        return redirect()->back();*/
    }


    public function getUpdate()
    {
        return view('admin.update');
    }


    public function postUpdate(updateProfile $request)
    {
        if (Auth()->user()->id == $request->id) {
            $requestData = $request->all();
            unset($requestData['_token']);

            // Update to db

            $user = new User();
            $user->where('id', $request->id)->update($requestData);
            session()->flash('success', 'Update is successful');
        } else {
            return redirect(url('/'));
        }
        return redirect()->back();
    }

    public function upload_profile_picture(Request $request)
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

    public static function settings()
    {
        return view('admin.general_settings');
    }

    public function postSettings(Request $request)
    {
        $profile = new Profile();
        $this->validate($request, [
            'company_name' => 'required',
            'email' => 'required',
            'company_address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'state' => 'required',
            'phonenum' => 'required',
            'alt_phonenum' => 'required',
            'website' => 'required',
            'file' => 'required|mimes:jpg,phn,gif'
        ]);

        $profile->company_name = $request->input('company_name');
        $profile->email = $request->input('email');
        $profile->company_address = $request->input('company_address');
        $profile->city = $request->input('city');
        $profile->country = $request->input('country');
        $profile->state = $request->input('state');
        $profile->phonenum = $request->input('phonenum');
        $profile->alt_phonenum = $request->input('alt_phonenum');
        $profile->website = $request->input('website');

        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $someImages = "";
            $destination = 'company_logos/' . microtime(true);
            $filename = $file->getClientOriginalName();
            $someImages = $destination . '/' . $filename;
            $upload_success = $file->move($destination, $filename);
            $profile->company_logo = $someImages;
        }
        $profile->save();
        session()->flash('success', 'Settings saved!!');
        return redirect()->back();
    }

    public function getUpdateSettings()
    {
        $profiles = Profile::all();

        return view('admin.update-gen-settings', compact('profiles'));
    }

    public function getLeaveCategory()
    {
        $leaves = Leave::all(['id', 'leave_category']);
        return view('admin.leave_category', compact('leaves'));
    }


    public function postLeaveCategory(Request $request)
    {
        Leave::create([
            'leave_category' => $request->input('leave_category')
        ]);
        /* $leave = new Leave();
         $leave->leave_category = $request->input('leave_category');
         $leave->save();*/

        session()->flash('success', 'Leave Category Saved!');
        return redirect()->back();
    }

    public function deleteLeave($id)
    {
        $leave = new Leave();
        $leave = $leave->find($id);
        $leave->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted!');
    }


    public function addDepartment()
    {
        return view('admin.add');
    }

    public function postDepartment(Request $request)
    {
        $this->validate($request,[
            'department_name' => 'required|max:255'
            ]);
        $department = new Department();
        $department->name = $request->input('department_name');
        $department->save();

        session()->flash('success', 'Department added!');
        return redirect()->back();

    }

    public function getDepartmentList()
    {
        $department = new Department();
        $departments = $department->all();
        return view('admin.department_list', compact('departments'));
    }

    public function getEditDepartment($id)
    {
        $department = new Department();
        $department = $department->find($id);
        $departments = $department->all(['id', 'name']);
        return view('admin.update-department', ['department' => $department, 'departmentId' => $id, 'departments' => $departments]);
    }

    public function postEditDepartment(Request $request)
    {
        $department = Department::find($request->input('id'));
        $department->name = $request->input('department_name');
        $department->save();
        session()->flash('success', 'Update is successful');
        return redirect()->back();
    }

    public function deleteDept($id)
    {
        Department::where('id', $id)->delete();

        session()->flash('success', 'Department deleted successfully');
        return redirect()->back();

    }


    public function createEmployee()
    {
        $users = DB::table('users')->where('is_employee', 1)->get();
        return view('admin.account', compact('users', 'id'));
    }

    public function postEmployee(Request $req)
    {
        $data = $req->all();
        $this->validate($req, [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'dob' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'department' => 'required|not_in:0',
            'employment_type' => 'required',
            'designation' => 'required|not_in:0',
            'employment_date' => 'required',
            'school' => 'required',
            'course' => 'required',
            'degree' => 'required',
            'documents' => 'required'
        ]);


        $user = new User();
        #$user = User::findOrNew($id);
        #$user->fill($req->all());
        $user->full_name = $data['full_name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->dob = $data['dob'];
        $user->phonenum = $data['mobile'];
        $user->address = $data['address'];
        $user->country = $data['country'];
        $user->state = $data['state'];
        $user->department_id = $data['department'];
        $user->employment_type = $data['employment_type'];
        $user->designation_id = $data['designation'];
        $user->employment_date = $data['employment_date'];
        $user->school = $data['school'];
        $user->course = $data['course'];
        $user->degree = $data['degree'];
        $user->is_employee = 1;

        if ($req->hasFile('documents')) {
            $file = $req->file('documents');
            $someDocs = "";
            $destination = 'employee_docs/' . microtime(true);
            $filename = $file->getClientOriginalName();
            $someDocs = $destination . '/' . $filename;
            $upload_succes = $file->move($destination, $filename);
            $user->employee_docs = $someDocs;
        }


        $user->save();


        UserDepartment::create([
            'user_id' => $user->id,
            'department_id' => $data['department'],


        ]);

        UserDesignation::create([
            'user_id' => $user->id,
            'designation_id' => $data['designation'],


        ]);

        Mail::to($user)->send(new WelcomeBack($user));

        session()->flash('success', 'Employee Details Saved');
        return redirect()->back();
    }


    public function getEditEmployee($id)
    {
        $user = User::find($id);
        $users = User::where('id', $id)->first();
        #return view('hrms.update-employee', ['user' => $user, 'userId' => $id]);
        return view('admin.update-employee', compact('users', 'user'));
    }

    public function postEditEmployee(Request $req)
    {
        $data = $req->all();
        $user = User::find($req->input('id'));
        $user->full_name = $data['full_name'];
        $user->email = $data['email'];
        $user->dob = $data['dob'];
        $user->phonenum = $data['mobile'];
        $user->address = $data['address'];
        $user->country = $data['country'];
        $user->state = $data['state'];
        $user->department_id = $data['department'];
        $user->employment_type = $data['employment_type'];
        $user->designation_id = $data['designation'];
        $user->employment_date = $data['employment_date'];
        $user->school = $data['school'];
        $user->course = $data['course'];
        $user->degree = $data['degree'];
        $user->save();
        session()->flash('success', 'Update is successful');
        return redirect()->back();
    }

    public function deleteUser($id)
    {
        #$user_get = User::where('id', $id)->delete();
        #User::where('id', $id)->delete();

        $user_get = User::where('id', $id)->first();

        if (count($user_get)) {
            User::where('id', $id)->delete();
            UserDesignation::where('user_id', $id)->delete();
            UserDepartment::where('user_id', $id)->delete();
            UserSalary::where('user_id', $id)->delete();
            Salary::where('user_id', $id)->delete();
        }

        session()->flash('success', 'User deleted successfully');
        return redirect()->back();

    }

    public function getEmployeeList()
    {
        $user = new User();
        /* $users = $user->where('is_employee', 1)->latest();
         $elopes = $users->userDepartments()->first();
        */
        $users = $user->where('is_employee', 1)->get();
        # echo "<pre>";
        # print_r($users->toArray());
        # echo "</pre>";
        # die();
        return view('admin.employee_list', compact('users'));
    }

    /* Payroll Management */

    public function salary($id)
    {
        $user = User::find($id);
        #$users = \App\User::where('is_employee', 1)->with(['userDepartments', 'userDesignations'])->get();
        return view('admin.salary_details', ['userId' => $id, 'user' => $user]);
        # return view('hrms.salary_details', ['user' => $user]);

        #return view('hrms.salary_details', compact('user'));
    }

    public function submitSalary(Request $request)
    {
        # $user = new User();
        $user = User::find($request->input('id'));
        $user->designation_id = $request->input('designation');
        $user->department_id = $request->input('department');
        $user->save();

        Salary::create([
            'user_id' => $user->id,
            'basic_salary' => $request->input('basic_salary'),
            'transport' => $request->input('transport'),
            'housing' => $request->input('housing'),
            'dressing' => $request->input('dressing'),
            'domestic' => $request->input('domestic'),
            'education' => $request->input('education'),
            'furniture' => $request->input('furniture'),
            'utilities' => $request->input('utilities'),
            'lunch' => $request->input('lunch'),
            'tax' => $request->input('tax'),
            'gsm' => $request->input('gsm'),
            'nhf' => $request->input('nhf'),
        ]);


        UserSalary::create([
            'user_id' => $user->id,
        ]);


        session()->flash('success', 'Salary Details Saved');
        return redirect()->back();
    }

    public function viewSlip($id)
    {
        $user = User::find($id);
        $result = Salary::all()->sum(function ($t) {
            return $t->tax +
                $t->nhf +
                $t->gsm;
        });
        $nob = Salary::all()->sum(function ($f) {
            return $f->basic_salary +
                $f->transport +
                $f->housing +
                $f->dressing +
                $f->domestic +
                $f->education +
                $f->furniture +
                $f->utilities +
                $f->lunch;
        });

        $diff = "";
        $diff = $nob - $result;

        #$nob = Salary::selectRaw('housing, transport, basic_salary')->first();
        # $users = \App\User::where('is_employee', 1)->with('userSalaries')->get();
        return view('admin.view_slip', compact('user', 'result', 'nob', 'diff'));
    }





}
