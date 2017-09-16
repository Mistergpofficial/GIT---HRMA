@extends('layouts.master')
@section('content')

<section id="content">
    <link rel="stylesheet" href="./css/style.css">

    <div class="bg-primary dk" style="background: url(&#39;images/about.jpg&#39;);background-size:cover;">

        <div style="background:rgba(0,0,0,0.4)">
            <div class="text-center wrapper">
                <div class="m-t-xl m-b-xl">
                    <div class="text-uc h1 font-bold inline">
                        <div class="m-r-sm text-center text-white">GIT-HRMA  <span class="font-thin text-muted">  </span></div>

                    </div>
                    <div class="h4 text-muted m-t-sm">We manage your human resources effectively and efficiently...
                    </div>
                </div>
                <p class="text-center m-b-xl">
                    <a href="{{ url('signin') }}" class="btn btn-lg btn-dark m-sm">Login</a>
                    <!--
                    or <a href="" class="btn btn-lg btn-warning b-white bg-empty m-sm"> Sign
                        Up
                    </a>-->
                    </p>
                <p id="days"></p>
            </div>
            <div class="padder">

                <div class="hbox">

                    <div class="clearfix"></div>
                    <aside class="col-md-3 v-bottom text-right">
                        <div class="hidden-sm hidden-xs">
                            <section class="panel bg-dark inline m-b-n-lg m-r-n-lg aside-sm no-border device phone animated fadeInLeftBig">
                                <header class="panel-heading text-center"><i class="fa fa-minus fa-2x m-b-n-xs block"></i>
                                </header>
                                <div>
                                    <div class="m-l-xs m-r-xs"><img src="./images/fool.jpg" class="img-full"></div>
                                </div>
                            </section>
                        </div>
                    </aside>
                    <aside class="col-sm-10 col-md-6">
                        <section class="panel bg-dark m-b-n-lg no-border device animated fadeInUp">
                            <header class="panel-heading text-left"><i class="fa fa-circle fa-fw"></i> <i class="fa fa-circle fa-fw"></i> <i class="fa fa-circle fa-fw"></i></header>
                            <img src="./images/Captur.jpg" class="img-full"></section>
                    </aside>
                    <aside class="col-md-3 v-bottom">
                        <div class="hidden-sm hidden-xs">
                            <section class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
                                <header class="panel-heading text-center"><i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i></header>
                                <div class="">
                                    <div class="m-l-xs m-r-xs"><img src="./images/Capture1.png" class="img-full"></div>
                                </div>
                            </section>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="dker pos-rlt"  style="background-color: #577578;">
                <div class="container wrapper">
                    <div class="m-t-lg m-b-lg text-center"> We help you manage your human resources so well for proper documentation...
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="about">
        <div class="container">

            <div class="m-t-xl m-b-xl text-center wrapper"><h3>Welcome to GIT-HRMA</h3>
                <div id="story"></div>
                <p class="text-muted">
                    GIT-HRMA is a platform developed to help employers manage effectively and efficiently their employers
                    and their respective activities.</p>
                <br>

              <!--  <iframe width="560" height="315" src="./images/XMOTw-I2up4.html" frameborder="0" allowfullscreen=""></iframe> -->
                <div id="about_feature"></div>
                <br><br>
                <p style="font-size: 15px;"><b>What we will do for you</b></p>
            </div>
            <div class="row m-t-xl m-b-xl text-center">

                <div class="col-sm-4 fadeInLeft animated" data-ride="animated" data-animation="fadeInLeft" data-delay="300"><p class="h3 m-b-lg"><i class="fa fa-group fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Employee Information</h4>
                        <p class="text-muted m-t-lg">We help you keep proper records of your employees.We are aware how vital those
                            information are to you and we have made such provision for you</p></div>
                </div>
                <div class="col-sm-4 fadeInLeft animated" data-ride="animated" data-animation="fadeInLeft" data-delay="600"><p class="h3 m-b-lg"><i class="fa fa-camera-retro fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Leave Management</h4>
                        <p class="text-muted m-t-lg">Employee leave application and management can now be done with ease with our robust but simple leave manage application incorporated into this platform</p></div>
                </div>
                <div class="col-sm-4 fadeInLeft animated" data-ride="animated" data-animation="fadeInLeft" data-delay="900"><p class="h3 m-b-lg"><i class="fa fa-signal fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Attendance Management</h4>
                        <p class="text-muted m-t-lg">Time they say is the sole of a business...Proper records of employee attendance can now be done with our attendance management application on this platform</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <br>
                <br>
                <div class="col-sm-4 fadeInRight animated" data-ride="animated" data-animation="fadeInRight" data-delay="300"><p class="h3 m-b-lg"><i class="fa fa-map-marker fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Payroll Management</h4>
                        <p class="text-muted m-t-lg">Easy to use payroll management application has been provided to make it easy to manage employees payroll structure</p></div>
                </div>
                <div class="col-sm-4 fadeInRight animated" data-ride="animated" data-animation="fadeInRight" data-delay="600"><p class="h3 m-b-lg"><i class="fa fa-bullhorn fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Notice Board</h4>
                        <p class="text-muted m-t-lg">Urgent notices can now be sent once and very fast as well and can be accessed by employees without standing from your seat or stepping out of your office</p>
                    </div>
                </div>
                <div class="col-sm-4 fadeInRight animated" data-ride="animated" data-animation="fadeInRight" data-delay="900"><p class="h3 m-b-lg"><i class="fa fa-clipboard fa-3x text-info"></i></p>
                    <div class=""><h4 class="m-t-none">Reports</h4>
                        <p class="text-muted m-t-lg">Our system is intelligent enough to give you reports depending on yor need, analysis such as how many doctors/engineers/teachers are in the church?,
                            how many employees work in your firm?, when an employee was employed?, the payroll list/structure of your employees how
                            many people's birthday do we have today/week/month etc and the list continues.</p>
                    </div>
                </div>
            </div>
           <!-- <div class="m-t-xl m-b-xl text-center wrapper"><p style="color: #979797">As the renowned operating
                    system for churches, you can manage nearly everything about your church, our data entry process
                    is easy, you can either use and excel file to bulk upload, send a unique link to members or you
                    register them yourself individually.<br><br><b>Note:</b> we are open to <span class="text-primary">suggestions</span>.
                </p></div> -->

        </div>
    </div>

    <script async="" src="./js/analytics.js.download"></script><script src="./js/jquery.min.js.download"></script>

    <script src="./js/index.js.download"></script>
</section>
@endsection