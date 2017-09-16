

<!-- .aside -->
<aside class="bg-black aside-md hidden-print" id="nav">
    <section class="vbox">
        <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                    <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="{!! asset(Auth::user()->pro_pic) !!}"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <span class="arrow top hidden-nav-xs"></span>
                            <li> <a href="{{ route('admin.update-profile') }}">Profile</a> </li>
                            <li><a href="" data-toggle="modal" data-target="#upload_image_modal">Update Profile Picture</a> </li>
                            <li class="divider"></li>
                            <li><a href="{{ route('admin.logout') }}">Logout</a></li>

                        </ul>
                    </div>
                </div>
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                    <ul class="nav nav-main" data-ride="collapse">
                        <li class="active"> <a href="#" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Account</span> </a>
                            <ul class="nav dk">
                                <li class="active" > <a href="{{ url('admin/dashboard') }}" class="auto"><i class="i i-dot"></i> <span>Dashboard</span> </a> </li>

                            </ul>
                        </li>

                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Settings</span> </a>
                            <ul class="nav dk">
                                <li > <a href="{{ route('admin.general_settings') }}" class="auto"> <i class="i i-dot"></i> <span>General Settings</span> </a> </li>
                                <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Set Working Days</span> </a> </li>
                                <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Holiday List</span> </a> </li>
                                <li> <a href="{{ route('admin.leave_category') }}" class="auto"> <i class="i i-dot"></i> <span>Leave Category</span> </a> </li>
                                <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Notification Settings</span> </a> </li>
                                <li> <a href="" class="auto"> <i class="i i-dot"></i> <span>Personal Event</span> </a> </li>
                            </ul>
                        </li>



                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Mailbox</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Inbox</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Sent</span> </a> </li>

                            </ul>
                        </li>

                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Department</span> </a>
                            <ul class="nav dk">
                                <li > <a href="{{ route('admin.add') }}" class="auto"><i class="i i-dot"></i> <span>Add Department</span> </a> </li>
                                <li > <a href="{{ route('admin.department_list') }}" class="auto"><i class="i i-dot"></i> <span>Department List </span> </a> </li>
                            </ul>
                        </li>

                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Employee</span> </a>
                            <ul class="nav dk">
                                <li > <a href="{{ route('admin.create') }}" class="auto"><i class="i i-dot"></i> <span>Add Employee</span> </a> </li>
                                <li > <a href="{{ route('admin.employee_list') }}" class="auto"><i class="i i-dot"></i> <span>Employee List </span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Employee Award </span> </a> </li>
                            </ul>
                        </li>

                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Attendance</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Manage Attendance</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Attendance Report</span> </a> </li>
                            </ul>
                        </li>

                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Payroll Management</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Manage Salary Details</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Employee Salary List</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Make Payment</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Generate Payslip</span> </a> </li>
                            </ul>
                        </li>


                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Expense Management</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Add Expense</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Expense Report</span> </a> </li>
                            </ul>
                        </li>


                        <li > <a href="" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-info-circle"> </i> <span class="font-bold">Notice Board</span> </a>
                            <ul class="nav dk">
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Add Notice</span> </a> </li>
                                <li > <a href="" class="auto"><i class="i i-dot"></i> <span>Manage Notice</span> </a> </li>
                            </ul>
                        </li>


                    </ul>
                    <div class="line dk hidden-nav-xs"></div>


                </nav>
                <!-- / nav -->
            </div>
        </section>
        @include('admin.upload')
        <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
    </section>
</aside>
<!-- /.aside -->