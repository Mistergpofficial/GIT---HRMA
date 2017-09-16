<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@ind');
Auth::routes();
# Route for admin registration
Route::get('admin-register/werbrtyrsequew/ntui', 'AdminController@admin_reg')->name('auth.admin-register');
Route::post('admin-register/post-werbrtyrsequew/ntui', 'AdminController@p_admin_reg')->name('auth.a_register');
Route::get('signin', 'SigninController@getLogin');
Route::post('signin', 'SigninController@postLogin');

Route::group(['prefix' => 'admin'], function () {
    Route::get('logout', 'SigninController@logout')->name('admin.logout');
Route::get('dashboard', 'AdminController@getDash');
Route::get('update-profile', 'AdminController@getUpdate');
Route::post('update-profile', 'AdminController@postUpdate')->name('admin.update-profile');
Route::post('upload-profile-picture', 'AdminController@upload_profile_picture')->name('admin.upload-profile-picture');
Route::get('settings/general_settings', 'AdminController@settings')->name('admin.general_settings');
Route::post('settings/general_settings', 'AdminController@postSettings');
Route::get('settings/update-general_settings', 'AdminController@getUpdateSettings')->name('admin.update-general_settings');
Route::post('settings/update-general_settings', 'AdminController@postUpdateSettings');

# show leave form and process it
Route::get('settings/leave_category', 'AdminController@getLeaveCategory')->name('admin.leave_category');
Route::post('settings/leave_category', 'AdminController@postLeaveCategory')->name('admin.leave_category');

# Edit leave category
Route::get('settings/leave_category/{id}/delete', 'AdminController@deleteLeave')->name('admin.delete-leave');
Route::get('settings/leave_category/{id}/edit', 'AdminController@getEditLeave')->name('admin.leave_category_edit');
Route::post('settings/leave_category/edit', 'AdminController@postEditLeave')->name('admin.post-leave_category_edit');


Route::get('department/add', 'AdminController@addDepartment')->name('admin.add');
Route::post('department/add', 'AdminController@postDepartment')->name('admin.add');

Route::get('department/add/{id}/edit', 'AdminController@getEditDepartment')->name('admin.update-department');
Route::post('department/add/edit', 'AdminController@postEditDepartment')->name('admin.post-update-department');
Route::get('department/add/{id}/delete', [
    'uses' => 'AdminController@deleteDept',
    'as' => 'admin.delete-dept'
]);

Route::get('department/department_list', 'AdminController@getDepartmentList')->name('admin.department_list');


Route::get('employee/create', 'AdminController@createEmployee')->name('admin.create');
Route::post('employee/create', 'AdminController@postEmployee');

Route::get('employee/create/{id}/edit', [
    'uses' => 'AdminController@getEditEmployee',
    'as' => 'admin.edit-user'
]);
Route::post('employee/create/edit', 'AdminController@postEditEmployee')->name('admin.post-update-employee');
Route::get('employee/create/{id}', [
    'uses' => 'AdminController@deleteUser',
    'as' => 'admin.delete-user'
]);

    Route::get('employee/employee_list', 'AdminController@getEmployeeList')->name('admin.employee_list');
    Route::get('payroll/salary_details/{id}/edit', 'AdminController@salary')->name('admin.salary_details');
    Route::post('payroll/salary_details/edit', 'AdminController@submitSalary')->name('admin.post-salary_details');
    Route::get('payroll/salary_details/{id}/slip', 'AdminController@viewSlip')->name('admin.slip-salary_details');


});


#Route::get('payroll/manage_salary_details', 'HomeController@getSalary')->name('hrms.manage_salary_details');
#Route::post('payroll/manage_salary_details', 'HomeController@postSalary');

/* EMPLOYEE ROUTE */
Route::group(['prefix' => 'user'], function () {
    Route::get('logout', 'SigninController@logout')->name('user.logout');
    Route::get('dashboard', 'HomeController@dash');
    Route::get('contact', 'HomeController@getContact');
    Route::post('contact', 'HomeController@postContact')->name('user.contact');
    Route::get('update-profile', 'HomeController@getUserUpdate');
    Route::post('update-profile', 'HomeController@postUserUpdate')->name('user.update-profile');
    Route::post('upload-picture', 'HomeController@upload_picture')->name('user.upload-picture');



});




Route::get('login', ['as' => 'login', 'uses' => function() {
    return redirect()->to(url('/'));
}]);
Route::get('register', function () {
    return redirect()->to(url('/'));
});

