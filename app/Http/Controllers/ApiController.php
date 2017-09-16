<?php

namespace App\Http\Controllers;
use App\User;

#use Illuminate\Http\Request;
use Dingo\Api\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_employee', 1)->get();
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = array(
            'response' => "",
            'success' => false
        );
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'dob' => 'required',
            'phonenum' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'department_id' => 'required',
            'employment_type' => 'required',
            'designation_id' => 'required',
            'employment_date' => 'required',
            'school' => 'required',
            'course' => 'required',
            'degree' => 'required',
        ];
        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            $response['response'] = $validation->messages();


        } else {


            $full_name = $request->input('full_name');
            $email = $request->input('email');
            $dob = $request->input('dob');
            $phonenum = $request->input('mobile');
            $address = $request->input('address');
            $country = $request->input('country');
            $state = $request->input('state');
            $department_id = $request->input('department');
            $employment_type = $request->input('employment_type');
            $designation_id = $request->input('designation');
            $employment_date = $request->input('employment_date');
            $school = $request->input('school');
            $course = $request->input('course');
            $degree = $request->input('degree');
            $is_employee = 1;

            $user = [
                'full_name' => $full_name,
                'email' => $email,
                'dob' => $dob,
                'phonenum' => $phonenum,
                'address' => $address,
                'country' => $country,
                'state' => $state,
                'department_id' => $department_id,
                'employment_type' => $employment_type,
                'designation_id' => $designation_id,
                'employment_date' => $employment_date,
                'school' => $school,
                'course' => $course,
                'degree' => $degree,
                'is_employee' => $is_employee,
                'view_user' => [
                    'href' => 'api/employee_list/1',
                    'method' => 'GET'
                ]
            ];

            $response = [
                'msg' => 'Employee created',
                'user' => $user
            ];
        }
            return response()->json($response, 201);

        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
