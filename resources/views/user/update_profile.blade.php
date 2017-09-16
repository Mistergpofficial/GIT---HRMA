<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>GIT-HRMA</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css') !!}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body class="">
<section class="vbox">
    <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="{{ url('dashboard') }}" class="navbar-brand"><img src="../images/ad.jpg" width="40px" class="m-r-sm">GIT-HRMA</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> </span> <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li> <a href="{{ url('update-profile') }}">Profile</a> </li>
                    <li><a href="" data-toggle="modal" data-target="#upload_image_modal">Update Profile Picture</a> </li>
                    <li class="divider"></li>
                    <li> <a href="javascript:;"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout" data-toggle="ajaxModal" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp; Logout</a> </li>
                    <form id ="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </header>
    <section>

        <section class="hbox stretch">
            @include("layouts.sidebar2")
            <section id="content">
                <section class="vbox">
                    <header class="header bg-white b-b b-light">
                        <p><strong>Important Instructions </strong>All Details Are Mandatory.</p>
                    </header>
                    <section class="scrollable wrapper">
                        <div class="row">

                            <div class="col-sm-12 portlet">
                                <section class="panel panel-success portlet-item">
                                    <header class="panel-heading">Employee Settings </header>
                                    <section class="panel panel-default">
                                        <header class="panel-heading bg-light">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#home" data-toggle="tab">Update Employee</a></li>

                                            </ul>
                                        </header>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home">
                                                    @if(Session::has('success'))
                                                        <div class="alert alert-success">
                                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                                            {{ Session::get('success') }}
                                                        </div>
                                                    @endif
                                                    <div class="panel-body">
                                                        <form action="{{ route('user.update-profile') }}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                                            <div class="panel-heading">PERSONAL INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input type="text" value="{{ Auth::user()->full_name }}" class="form-control"  name="full_name" >
                                                                <span class="help-block">
                                                                    @if($errors->has('full_name'))
                                                                        <strong>{{ $errors->first('full_name') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <input type="email" value="{{ Auth::user()->email }}" class="form-control"  name="email" >
                                                                <span class="help-block">
                                                                    @if($errors->has('email'))
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <input type="date" value="{{ Auth::user()->dob }}" class="form-control"  name="dob" >
                                                                <span class="help-block">
                                                                    @if($errors->has('dob'))
                                                                        <strong>{{ $errors->first('dob') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>


                                                            <div class="panel-heading">CONTACT INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="{{ Auth::user()->phonenum }}" class="form-control"  name="phonenum" >
                                                                <span class="help-block">
                                                                    @if($errors->has('mobile'))
                                                                        <strong>{{ $errors->first('mobile') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea name="address" value="{{ Auth::user()->address }}" class="form-control" cols="2" rows="10" ></textarea>
                                                                <span class="help-block">
                                                                    @if($errors->has('address'))
                                                                        <strong>{{ $errors->first('address') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                                <input type="text" value="{{ Auth::user()->country }}" class="form-control"  name="country" >
                                                            </div>

                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" value="{{ Auth::user()->state }}" class="form-control"  name="state" >
                                                            </div>


                                                            <div class="panel-heading">COMPANY INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <input type="text" disabled value="{{ Auth::user()->userDepartments->department->name }}" class="form-control"  name="country" >
                                                                <span class="help-block">
                                                                    @if($errors->has('department'))
                                                                        <strong>{{ $errors->first('department') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Employment Type</label>
                                                                <input type="text" disabled value="{{ Auth::user()->employment_type }}" class="form-control"  name="country" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Designation</label>
                                                                <input type="text" disabled value="{{ Auth::user()->userDesignations->designation->name }}" class="form-control"  name="country" >
                                                                <span class="help-block">
                                                                    @if($errors->has('designation'))
                                                                        <strong>{{ $errors->first('designation') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>DATE OF EMPLOYMENT</label>
                                                                <input type="date" value="{{ Auth::user()->employment_date }}" class="form-control"  name="employment_date" >
                                                                <span class="help-block">
                @if($errors->has('employment_date'))
                                                                        <strong>{{ $errors->first('employment_date') }}</strong>
                                                                    @endif
            </span>
                                                            </div>
                                                            <div class="panel-heading">EDUCATION INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>SCHOOL ATTENDED</label>
                                                                <input type="text" value="{{ Auth::user()->school }}" class="form-control"  name="school" >
                                                                <span class="help-block">
                @if($errors->has('school'))
                                                                        <strong>{{ $errors->first('school') }}</strong>
                                                                    @endif
            </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>COURSE OF STUDY</label>
                                                                <input type="text" value="{{ Auth::user()->course }}" class="form-control"  name="course" >
                                                                <span class="help-block">
                @if($errors->has('course'))
                                                                        <strong>{{ $errors->first('course') }}</strong>
                                                                    @endif
            </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>DEGREE OBTAINED</label>
                                                                <input type="text" value="{{ Auth::user()->degree }}" class="form-control"  name="degree" >
                                                                <span class="help-block">
                @if($errors->has('degree'))
                                                                        <strong>{{ $errors->first('degree') }}</strong>
                                                                    @endif
            </span>
                                                            </div>



                                                            <button type="submit" class="btn btn-lg btn-primary btn-block">I Have Filled And Checked All Details. Update Employee For Me Now.</button>



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