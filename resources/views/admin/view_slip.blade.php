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


        </a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> </span>
                    <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li> <a href="{{ url('admin/update-profile') }}">Profile</a> </li>
                    <li> <a href="notifications.php">Notifications </a> </li>
                    <li> <a href="contact.php">Help</a> </li>
                    <li class="divider"></li>
                    <li> <a href="logout.php" data-toggle="ajaxModal" >Logout</a> </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            @component('layouts.sidebar')
            @endcomponent
            <section id="content">
                <section class="vbox bg-white">
                    <header class="header b-b b-light hidden-print">
                        <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print Slip</button>
                        <p>Salary Summary</p>
                    </header>

                    <section class="scrollable wrapper">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>MUTUAL BENEFITS LIFE ASSURANCE LTD</h4>
                                19/21 Town Planning Way Ilupeju
                            </div>
                            <div class="col-xs-6 text-right">
                                <p><b>Registration Date : {{ $user->created_at->toFormattedDateString() }} </b></p>
                            </div>
                        </div>
                        <div class="well m-t">
                            <div class="row">
                                <div class="col-xs-6"> <strong>FOR:</strong>
                                    <h4>{{ $user->full_name }}</h4>
                                    <h4>{{ $user->userDesignations->designation->name }}</h4>

                                </div>
                                <div class="col-xs-6"> <strong>FROM:</strong>
                                    <h4>MUTUAL BENEFITS LIFE ASSURANCE PLC</h4>



                                </div>
                            </div>
                        </div>

                        <div class="line"></div>

                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="60">ALLOWANCES</th>
                                    <th>VALUE</th>
                                    <th width="140">DEDUCTIONS</th>
                                    <th width="90">VALUE</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <td colspan="0.3" class="text-right"><strong>TRANSPORT ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->transport}}</td>
                                    <td colspan="0.3" class="text-right"><strong>Tax</strong></td>
                                    <td>#{{$user->salary->tax}}</td>
                                </tr>

                                <tr>

                                    <td colspan="0.3" class="text-right"><strong>HOUSING ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->housing}}</td>
                                    <td colspan="0.3" class="text-right"><strong>GSM (CUG) USAGE</strong></td>
                                    <td>#{{$user->salary->gsm}}</td>
                                </tr>

                                <tr>

                                    <td colspan="0.3" class="text-right"><strong>BASIC SALARY</strong></td>
                                    <td>#{{$user->salary->basic_salary}}</td>
                                    <td colspan="0.3" class="text-right"><strong>NHF</strong></td>
                                    <td>#{{$user->salary->nhf}}</td>
                                </tr>


                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>DRESSING ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->dressing}}</td>
                                </tr>


                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>DOMESTIC ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->domestic}}</td>
                                </tr>

                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>EDUCATION ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->education}}</td>
                                </tr>

                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>FURNITURE ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->furniture}}</td>
                                </tr>

                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>UTILITY ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->utilities}}</td>
                                </tr>

                                <tr>
                                    <td colspan="0.3" class="text-right"><strong>LUNCH ALLOWANCE</strong></td>
                                    <td>#{{$user->salary->lunch}}</td>
                                </tr>

                                <tr>

                                    <td colspan="0.3" class="text-right"><strong>TOTAL</strong></td>
                                    <td>#{{ $nob }}</td>
                                    <td colspan="0.3" class="text-right"><strong>TOTAL</strong></td>

                                    <td>#{{ $result }}</td>

                                </tr>

                                <tr>
                                    <td colspan="0.4" class="text-right"><strong>NET PAY</strong></td>
                                    <td>#{{ $diff }}</td>
                                </tr>




                                </tbody>
                            </table>

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