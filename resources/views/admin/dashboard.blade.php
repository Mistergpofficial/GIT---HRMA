<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>GIT-HRMA</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css') !!} " type="text/css" />
    <link rel="stylesheet" href="{!! asset('css/bootstrap_calendar.css') !!} " type="text/css" />
    
    <link rel="icon" type="image/jpg" href="../images/ad.jpg" width="40px">
    <link rel="stylesheet" href="{!! asset('css/font.css') !!} " type="text/css" />
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body class="">
<section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="{{ url('dashboard') }}" class="navbar-brand"><img src="../images/ad.jpg" width="40px" class="m-r-sm">GIT-HRMA</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> </span> <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li> <a href="{{ url('admin/update-profile') }}">Profile</a> </li>
                    <li><a href="" data-toggle="modal" data-target="#upload_image_modal">Update Profile Picture</a> </li>
                    <li class="divider"></li>
                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>

                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            @component('layouts.sidebar')
            @endcomponent
            <section id="content">
                <section class="hbox stretch">
                    <section>
                        <section class="vbox">
                            <section class="scrollable padder">
                                <section class="row m-b-md">
                                    <div class="col-sm-6">
                                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                                            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                                        </ul>
                                        <h3 class="m-b-xs text-black">Dashboard</h3>
                                        <small>Welcome back, {{ Auth()->user()->full_name }} <i class="fa fa-map-marker fa-lg text-primary"></i></small> </div>
                                    <div class="col-sm-6 text-right text-left-xs m-t-md">

                                        <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a> <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a> </div>
                                </section>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section class="panel panel-default">
                                            <div class="panel-body">

                                                @if(Session::has('success'))
                                                    <div class="alert alert-danger">
                                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                                        {{ Session::get('success') }}
                                                    </div>
                                                @endif

                                                <footer class="panel-footer bg-info text-center">
                                                    <div class="row pull-out">
                                                        <div class="col-xs-6">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $users->count() }}</span> <small class="text-muted">Total Employee Count</small> </div>
                                                        </div>
                                                        <div class="col-xs-6 dk">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $departments->count() }}</span> <small class="text-muted">Total Department Count </small> </div>
                                                        </div>
                                                        <div class="col-xs-6 dk">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $profiles->count() }}</span> <small class="text-muted">Total Company Registered </small> </div>
                                                        </div>
                                                        <div class="col-xs-6 dk">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $admins->count() }}</span> <small class="text-muted">Total System Admin</small> </div>
                                                        </div>

                                                        <div class="col-xs-6 dk">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $userDepartments->count() }}</span> <small class="text-muted">Total User Department</small> </div>
                                                        </div>

                                                        <div class="col-xs-6 dk">
                                                            <div class="padder-v"> <span class="m-b-xs h3 block text-white">{{ $userDesignations->count() }}</span> <small class="text-muted">Total User Designation</small> </div>
                                                        </div>


                                                    </div>
                                                </footer>
                                            </div>
                                        </section>
                                    </div>


                                    <div class="col-md-6 col-sm-6">
                                        <div class="panel b-a">
                                            <div class="panel-heading no-border bg-primary lt text-center"> <a href=""> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a> </div>
                                            <div class="padder-v text-center clearfix">
                                                <div class="col-xs-6 b-r">
                                                    <div class="h3 font-bold">Like</div>
                                                    <small class="text-muted">us on facebook</small>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="h3 font-bold">Right</div>
                                                    <small class="text-muted">now</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="panel b-a">
                                            <div class="panel-heading no-border bg-info lter text-center"> <a href=""> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a> </div>
                                            <div class="padder-v text-center clearfix">
                                                <div class="col-xs-6 b-r">
                                                    <div class="h3 font-bold">Follow</div>
                                                    <small class="text-muted">us on twitter</small> </div>
                                                <div class="col-xs-6">
                                                    <div class="h3 font-bold">Right</div>
                                                    <small class="text-muted">now</small> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <section class="panel b-light">
                                            <header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong>
                                            </header>
                                            <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"><div class="calendar" id="cal_351"><table class="table header"><tbody><tr></tr></tbody><td><i class="fa fa-arrow-left"></i></td><td colspan="5" class="year span6"><div class="visualmonthyear">August 2017</div></td><td><i class="fa fa-arrow-right"></i></td></table><table class="daysmonth table table"><tbody><tr class="week_days"><td class="first">S</td><td>M</td><td>T</td><td>W</td><td>T</td><td>F</td><td class="last">S</td></tr><tr><td class="invalid first"></td><td class="invalid"></td><td id="cal_351_1_8_2017"><a>1</a></td><td id="cal_351_2_8_2017"><a>2</a></td><td id="cal_351_3_8_2017"><a>3</a></td><td id="cal_351_4_8_2017"><a>4</a></td><td id="cal_351_5_8_2017" class="last"><a>5</a></td></tr><tr><td id="cal_351_6_8_2017" class="first"><a>6</a></td><td id="cal_351_7_8_2017"><a>7</a></td><td id="cal_351_8_8_2017"><a>8</a></td><td id="cal_351_9_8_2017"><a>9</a></td><td id="cal_351_10_8_2017"><a>10</a></td><td id="cal_351_11_8_2017"><a>11</a></td><td id="cal_351_12_8_2017" class="last"><a>12</a></td></tr><tr><td id="cal_351_13_8_2017" class="first"><a>13</a></td><td id="cal_351_14_8_2017"><a>14</a></td><td id="cal_351_15_8_2017"><a>15</a></td><td id="cal_351_16_8_2017"><a>16</a></td><td id="cal_351_17_8_2017"><a>17</a></td><td id="cal_351_18_8_2017"><a>18</a></td><td id="cal_351_19_8_2017" class="last"><a>19</a></td></tr><tr><td id="cal_351_20_8_2017" class="first"><a>20</a></td><td id="cal_351_21_8_2017"><a>21</a></td><td id="cal_351_22_8_2017"><a>22</a></td><td id="cal_351_23_8_2017"><a>23</a></td><td id="cal_351_24_8_2017"><a>24</a></td><td id="cal_351_25_8_2017"><a>25</a></td><td id="cal_351_26_8_2017" class="last"><a>26</a></td></tr><tr><td id="cal_351_27_8_2017" class="first"><a>27</a></td><td id="cal_351_28_8_2017"><a>28</a></td><td id="cal_351_29_8_2017"><a>29</a></td><td id="cal_351_30_8_2017"><a>30</a></td><td id="cal_351_31_8_2017"><a>31</a></td><td class="invalid"></td><td class="invalid last"></td></tr></tbody></table></div></div>
                                            <div class="list-group">
                                                <a href="" class="list-group-item text-ellipsis">
                                                    <span class="badge bg-danger">  </span> Create an Event</a>                            </div>
                                        </section>
                                    </div>
                                </div>







                            </section>
                        </section>

                        <!-- / side content -->
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
            </section>
        </section>
    </section>

    @include('admin.upload')

</section>
<!-- Bootstrap -->
<!-- App -->

<script src="{!! asset('js/bootstrap_calendar.js') !!}"></script>
<script src="{!! asset('js/app.v1.js') !!}"></script>
<script src="{!! asset('js/app.plugin.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>


<script>

    $(document).ready(function () {
        var cTime = new Date(), month = cTime.getMonth() + 1, year = cTime.getFullYear();

        theMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        theDays = ["S", "M", "T", "W", "T", "F", "S"];
        $('#calendar').calendar({
            months: theMonths,
            days: theDays,
            events: [],
            popover_options: {
                placement: 'top',
                html: true
            }
        });
    });

    $("#flot-pie").bind("plotclick", function (event, pos, item) {

        window.location = "http://demo.mychurchmember.com/admin/all_groups";
    });</script>
<script>
    var data = [["Jan",0],["Feb",0],["Mar",0],["Apr",0],["May",0],["Jun",0],["Jul",0],["Aug",0],["Sep",0],["Oct",0],["Nov",0],["Dec",0]];

    var data27 = [{"label":" Females","data":0},{"label":" Males","data":0}];

    $("#flot-1ine").bind("plotclick", function (event, pos, item) {
        // if (item) {
        var daat = item.datapoint;
        var id = daat[0] + 1;
        var numberOfPersons = daat[1];
        if (id == 1) {
            var monthName = "January";
        } else if (id == 1) {
            var monthName = "Febuary";
        } else if (id == 1) {
            var monthName = "March";
        } else if (id == 4) {
            var monthName = "April";
        } else if (id == 5) {
            var monthName = "May";
        } else if (id == 6) {
            var monthName = "June";
        } else if (id == 7) {
            var monthName = "July";
        } else if (id == 8) {
            var monthName = "August";
        } else if (id == 9) {
            var monthName = "September";
        } else if (id == 10) {
            var monthName = "October";
        } else if (id == 11) {
            var monthName = "November";
        } else if (id == 12) {
            var monthName = "December";
        }
        var ppl_name = []

        $('.month_name').text(monthName);
        var theppl = ppl_name[daat[0]];
        $('.ppl').text(theppl);
//                    $('#flotDetail').modal('show')

    });
</script>

</body>
</html>