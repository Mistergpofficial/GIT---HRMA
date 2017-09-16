<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>GIT-HRMA</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css') !!} " type="text/css" />
 
    <link rel="icon" type="image/jpg" href="../../images/ad.jpg" width="40px">
    <link rel="stylesheet" href="{!! asset('js/calendar/bootstrap_calendar.css') !!} " type="text/css" /> <div id="google_translate_element" align="right"></div><script type="text/javascript">
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
                        <p><strong>Important Instructions </strong> <b>1.</b> If you find unknown status of user, then kindly edit the user profile and update the status.<b> 2. </b> Records are shown from newest to oldest.</p>
                    </header>
                    <section class="scrollable wrapper">
                        <div class="row">

                            <div class="col-sm-12 portlet">
                                <section class="panel panel-success portlet-item">
                                    <header class="panel-heading"> Leave Settings </header>
                                    <section class="panel panel-default">
                                        <header class="panel-heading bg-light">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#home" data-toggle="tab">Leave Category List</a></li>

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
                                                                    <div class="panel-heading">Edit Leave Category</div>
                                                                    <div class="panel-body">
                                                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.post-leave_category_edit') }}">
                                                                            {{ csrf_field() }}

                                                                            <input type="hidden" name="id" value="{{ $leaveId }}" />

                                                                            <div class="form-group{{ $errors->has('leave_category') ? ' has-error' : '' }}">
                                                                                <label for="leave_category" class="col-md-4 control-label">Leave Category *</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="leave_category" type="text" class="form-control" placeholder="Enter Your leave Category Name" name="leave_category" required>

                                                                                    @if ($errors->has('leave_category'))
                                                                                        <span class="help-block">
                                                                                            <strong>{{ $errors->first('leave_category') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                    <br/>
                                                                                    <button type="submit" class="btn btn-primary">
                                                                                        Update
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel-body">


                                                        <div class="table-responsive">
                                                            @if($leavess->count() > 0)
                                                                <table class="table table-striped b-t b-light">
                                                                    <thead>
                                                                    <tr>

                                                                        <th width="5%">SL</th>
                                                                        <th width="15%">Category Name</th>
                                                                        <th width="15%">Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($leavess as $leave)
                                                                        <tr>

                                                                            <td>
                                                                                {{ $leave->id }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $leave->leave_category }}
                                                                            </td>

                                                                            <td>

                                                                                <a class="btn btn-success" href='{{ route('admin.leave_category_edit', ['id' => $leave->id ]) }}'>Edit</a> <br/>
                                                                                <a class="btn btn-success" href='{{ route('admin.delete-leave', ['id' => $leave->id ]) }}'>Delete </a> <br/>
                                                                            </td>

                                                                        </tr>
                                                                    @endforeach


                                                                    </tbody>
                                                                </table>
                                                            @else
                                                                <div class="alert alert-info">Not Found!!</div>
                                                            @endif
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