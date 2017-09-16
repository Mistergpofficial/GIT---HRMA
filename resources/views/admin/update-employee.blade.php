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
    <link rel="stylesheet" href="{!! asset('js/zabuto_calendar.css') !!}" type="text/css">
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
            @component('layouts.sidebar')
            @endcomponent
            <section id="content">
                <section class="vbox">
                    <header class="header bg-white b-b b-light">
                        <p><strong>Important Instructions </strong> <b>1.</b> All Details Are Mandatory. <b>2. </b> Enter 0 to disable the referral level. <b>3.</b> All amounts should be in integer (1) not decimal (1.0).</p>
                    </header>
                    <section class="scrollable wrapper">
                        <div class="row">

                            <div class="col-sm-12 portlet">
                                <section class="panel panel-success portlet-item">
                                    <header class="panel-heading"> Employee Settings </header>
                                    <section class="panel panel-default">
                                        <header class="panel-heading bg-light">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#home" data-toggle="tab"> Settings</a></li>
                                            </ul>
                                        </header>
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home">


                                                    <div class="panel-body">
                                                        <form action="{{ route('admin.post-update-employee') }}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                                            <div class="panel-heading">PERSONAL INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Full Name</label>
                                                                <input type="text" value="{{ $user->full_name }}" class="form-control"  name="full_name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <input type="email" value="{{ $user->email }}" class="form-control"  name="email" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <input type="date"  value="{{ $user->dob }}" class="form-control"  name="dob" required>
                                                            </div>

                                                            <div class="panel-heading">CONTACT INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="{{ $user->phonenum }}" class="form-control"  name="mobile" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea name="address" value="{{ $user->address }}" class="form-control" cols="2" rows="10" ></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" value="{{ $user->country }}" class="form-control"  name="country" required><br>
                                                                <input type="text" value="{{ $user->state }}" class="form-control"  name="state" required>
                                                            </div>


                                                            <div class="panel-heading">COMPANY INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <input type="text" value="{{ $user->userDesignations->designation->name }}" class="form-control"  name="department" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Employment Type</label>
                                                                <input type="text" value="{{ $user->employment_type }}" class="form-control"  name="employment_type" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Designation</label>
                                                                <input type="text" value="{{ $user->userDepartments->department->name }}" class="form-control"  name="designation" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>DATE OF EMPLOYMENT</label>
                                                                <input type="date" value="{{ $user->employment_date }}" class="form-control"  name="employment_date" required>
                                                            </div>
                                                            <div class="panel-heading">EDUCATION INFORMATION</div>
                                                            <div class="form-group">
                                                                <label>SCHOOL ATTENDED</label>
                                                                <input type="text" value="{{ $user->school }}" class="form-control"  name="school" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>COURSE OF STUDY</label>
                                                                <input type="text" value="{{ $user->course }}" class="form-control"  name="course" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>DEGREE OBTAINED</label>
                                                                <input type="text" value="{{ $user->degree }}" class="form-control"  name="degree" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>UPLOAD CV</label>
                                                                <input type="file" value="" class="form-control"  name="documents" required>
                                                            </div>





                                                    </div>

                                                            <button type="submit" class="btn btn-lg btn-primary btn-block">I Have Filled And Checked All Details. Update/Edit Details For Me Now.</button>
                                                        </form>
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

<script src="{!! asset('js/app.v1.js') !!}"></script>
<script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="js/charts/flot/jquery.flot.min.js"></script>
<script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/charts/flot/jquery.flot.spline.js"></script>
<script src="js/charts/flot/jquery.flot.pie.min.js"></script>
<script src="js/charts/flot/jquery.flot.resize.js"></script>
<script src="js/charts/flot/jquery.flot.grow.js"></script>
<script src="js/charts/flot/demo.js"></script>
<script src="js/calendar/bootstrap_calendar.js"></script>
<script src="js/calendar/demo.js"></script>
<script src="js/sortable/jquery.sortable.js"></script>
<script src="{!! asset('js/app.plugin.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
<script src="{!! asset('js/zabuto_calendar.js')  !!}"></script>
</body>
</html>