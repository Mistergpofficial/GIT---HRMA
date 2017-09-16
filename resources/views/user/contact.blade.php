<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>GIT-HRMA</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css') !!} " type="text/css" />
    <link rel="stylesheet" href="{!! asset('css/bootstrap_calendar.css') !!} " type="text/css" />
    <link rel="stylesheet" href="{!! asset('css/font.css') !!} " type="text/css" />
    <link rel="icon" type="image/jpg" href="../images/ad.jpg" width="40px">
    
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


        </a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.jpg"> </span>
                    <b class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>

                    <li> <a href="{{ url('user/update-profile') }}">Profile</a> </li>
                    <li> <a href="notifications.php">Notifications </a> </li>
                    <li> <a href="contact.php">Help</a> </li>
                    <li class="divider"></li>
                    <li> <a href="{{ route('user.logout') }}" data-toggle="ajaxModal" >Logout</a> </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">

            @component('layouts.sidebar2')
            @endcomponent
                <section id="content">
                <section class="vbox bg-white">
                    <header class="header b-b b-light hidden-print">

                        <p>Contact Us | Available 24*7</p>
                    </header>
                    <br>
                    <br>
                    <div class="col-sm-8">
                        <section class="panel panel-default">
                            <section class="scrollable padder">
                                @if(Session::has('danger'))
                                    <div class="alert alert-success">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                        {{ Session::get('danger') }}
                                    </div>
                                @endif
                                <header class="panel-heading font-bold">Use Below Form To Ask Query</header>
                                <div class="panel-body">
                                    <form action="{{ route('user.contact') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter email" >
                                        @if($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" class="form-control" placeholder="Message Subject" >
                                            @if($errors->has('subject'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Body</label>
                                            <textarea rows="8" cols="90" name="message" placeholder="Message Subject" ></textarea>
                                            @if($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                    </form>
                                </div>
                            </section>
                    </div>

                </section>
            </section>
            <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
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