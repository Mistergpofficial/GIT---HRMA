<!-- .aside -->
<aside class="bg-light aside-md hidden-print" id="nav">
    <section class="vbox">
        <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                    <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">
                                       </strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <span class="arrow top hidden-nav-xs"></span>

                            <li> <a href="{{ url('user/update-profile') }}">Profile</a> </li>
                            <li><a href="" data-toggle="modal" data-target="#upload_image_modal">Update Profile Picture</a> </li>
                            <li> <a href="contact.php">Help</a> </li>
                            <li class="divider"></li>
                            <li> <a href="{{ route('user.logout') }}" >Logout</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                    <ul class="nav nav-main" data-ride="collapse">
                        <li class="active"> <a href="{{ url('/user/dashboard') }}" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a> </li>

                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Account</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"> <i class="i i-dot"></i> <span>Downline/Earnings</span> </a> </li>



                                <li > <a href="" class="auto"> <i class="i i-dot"></i> <span>Invoice/Account Status</span> </a> </li>
                                <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Payments History</span> </a> </li>
                            </ul>
                        </li>

                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Help</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Notifications</span> </a> </li>
                                <li > <a href="{{ url('user/contact') }}" class="auto"> <i class="i i-dot"></i> <span>Contact</span> </a> </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="line dk hidden-nav-xs"></div>


                </nav>
                <!-- / nav -->
            </div>
        </section>

        @include('user.upload')
        <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="{{ route('user.logout') }}" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
    </section>
</aside>
<!-- /.aside -->
