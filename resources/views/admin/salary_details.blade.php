<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>GIT-HRMA</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css') !!} " type="text/css" />
    <link rel="stylesheet" href="{!! asset('js/calendar/bootstrap_calendar.css') !!} " type="text/css" />

    <link rel="icon" type="image/jpg" href="../../images/ad.jpg" width="40px">
</head>
<body class="">
<section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="{{ url('dashboard') }}" class="navbar-brand"><img src="../../images/ad.jpg" width="40px" class="m-r-sm">GIT-HRMA</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> </span> <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li> <a href="{{ url('admin/update-profile') }}">Profile</a> </li>
                    <li><a href="" data-toggle="modal" data-target="#upload_image_modal">Update Profile Picture</a> </li>
                    <li class="divider"></li>
                    <li> <a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">Logout</a> </li>
                    <form id ="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            @include('layouts.sidebar')
            <section id="content">
                <section class="vbox">
                    <header class="header bg-white b-b b-light">
                        <p><strong>Important Instructions </strong>All Details Are Mandatory</p>
                    </header>
                    <section class="scrollable wrapper">
                        <div class="row">

                            <div class="col-sm-12 portlet">
                                <section class="panel panel-success portlet-item">
                                    <header class="panel-heading">Payroll Management</header>
                                    <section class="panel panel-default">
                                        <header class="panel-heading bg-light">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#home" data-toggle="tab"> Settings</a></li>

                                            </ul>
                                        </header>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home">
                                                    @if(Session::has('success'))
                                                        <div class="alert alert-danger">
                                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif

                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-8 col-md-offset-2">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">Manage Salary Details</div>
                                                                    <div class="panel-body">

                                                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.post-salary_details') }}">
                                                                            {{ csrf_field() }}
                                                                            <input type="hidden" value="{{ $userId }}" name="id">
                                                                            <div class="form-group">
                                                                                <label for="designation" class="col-md-4 control-label">Designation *</label>

                                                                                <div class="col-md-6">
                                                                                    <input type="text" class="form-control" value="{{ $user->userDesignations->designation->name }}" name="designation"  required placeholder="Employee Designation"/>
                                                                                    <br/>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="department" class="col-md-4 control-label">Department Name *</label>

                                                                                <div class="col-md-6">
                                                                                    <input type="text" class="form-control" value="{{ $user->userDepartments->department->name }}" name="department"  required placeholder="Employee Department"/>
                                                                                    <br/>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="employment_type" class="col-md-4 control-label">Employment Type *</label>

                                                                                <div class="col-md-6">
                                                                                    <input type="text" class="form-control" name="employment_type" disabled value="{{ $user->employment_type }}" required placeholder="Employment Type"/>
                                                                                    <br/>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="user" class="col-md-4 control-label">Select Employee *</label>

                                                                                <div class="col-md-6">
                                                                                    <input type="text" class="form-control" name="employee_name" disabled value="{{ $user->full_name }}" required placeholder="Employee Name"/>

                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>





                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">Salary Details</div>
                                                                <div class="panel-body">




                                                                    <div class="form-group{{ $errors->has('basic_salary') ? ' has-error' : '' }}">
                                                                        <label for="basic_salary" class="col-md-4 control-label">Basic Salary *</label>

                                                                        <div class="col-md-6">
                                                                            <input type="text" name="basic_salary" value="{{ old('basic_salary') }}" class="form-control">
                                                                            @if ($errors->has('basic_salary'))
                                                                                <span class="help-block">
                                                                                            <strong>{{ $errors->first('basic_salary') }}</strong>
                                                                                        </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>





                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="columns">
                                                <div class="col-md-5">
                                                    @include('layouts.panel')
                                                </div>

                                                <div class="col-md-5">
                                                    @include('layouts.panel2')
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <button type="submit" class="btn btn-primary">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>



                                        </div>
                            </div>
                    </section>
                </section>

                </div>
                </div>
            </section>
        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
</section>
</section>
</section>
<!-- Bootstrap -->
<!-- App -->
<script src="{!! asset('js/app.v1.js') !!}"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="{!! asset('js/app.plugin.js') !!}"></script>
<script language="javascript">
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>
</body>
</html>