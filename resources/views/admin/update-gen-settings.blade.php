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
                                    <header class="panel-heading"> Update General Settings </header>
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

                                                    <div class="panel-body">
                                                        <form action="{{ route('admin.general_settings') }}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <label>Company Name</label>
                                                                <input type="text" value="" class="form-control"  name="company_name" >
                                                                <span class="help-block">
                                                                    @if($errors->has('company_name'))
                                                                        <strong>{{ $errors->first('company_name') }}</strong>
                                                                        @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Company Logo</label>
                                                                <input type="file" value="" class="form-control"  name="company_logo" >
                                                                <span class="help-block">
                                                                    @if($errors->has('company_logo'))
                                                                        <strong>{{ $errors->first('company_logo') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <input type="email" value="" class="form-control"  name="email" >
                                                                <span class="help-block">
                                                                    @if($errors->has('email'))
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Company Address</label>
                                                                <input type="text" value="{{ old('company_address') }}" class="form-control"  name="company_address" >
                                                                <span class="help-block">
                                                                    @if($errors->has('company_address'))
                                                                        <strong>{{ $errors->first('company_address') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" value="{{ old('city') }}" class="form-control"  name="city" >
                                                                <span class="help-block">
                                                                    @if($errors->has('city'))
                                                                        <strong>{{ $errors->first('city') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <script type= "text/javascript" src = "{!! asset('js/countries.js') !!}"></script>
                                                                <label> Select Country (with states):</label>
                                                                <select id="country" name ="country" class="form-control"></select><br>
                                                                <span class="help-block">
                                                                    @if($errors->has('country'))
                                                                        <strong>{{ $errors->first('country') }}</strong>
                                                                    @endif
                                                                </span>
                                                                <label> Select State: </label>
                                                                <select name ="state" id ="state" class="form-control"></select>
                                                                <span class="help-block">
                                                                    @if($errors->has('state'))
                                                                        <strong>{{ $errors->first('state') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="{{ old('phonenum') }}" class="form-control"  name="phonenum" >
                                                                <span class="help-block">
                                                                    @if($errors->has('phonenum'))
                                                                        <strong>{{ $errors->first('phonenum') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alternate Mobile</label>
                                                                <input type="text" value="{{ old('alt_phonenum') }}" class="form-control"  name="alt_phonenum" >
                                                                <span class="help-block">
                                                                    @if($errors->has('alt_phonenum'))
                                                                        <strong>{{ $errors->first('alt_phonenum') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Website</label>
                                                                <input type="text" value="{{ old('website') }}" class="form-control"  name="website" >
                                                                <span class="help-block">
                                                                    @if($errors->has('website'))
                                                                        <strong>{{ $errors->first('website') }}</strong>
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Save">
                                                        </form>

                                                    </div>


                                                </div>

                                            </div>



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