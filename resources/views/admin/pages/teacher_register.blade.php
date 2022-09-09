@extends('admin.layouts.dash')

@section('title')
    <title>Teacher Registration </title>
@stop


@section('intro')
                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers</div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="thumbnail/{{ Session::get('image') }}" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Session::get('username') }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{url('profile')}}" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{url('logout')}}" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                        </div>
@stop


@section('sidebar')
    <ul class="sidenav-inner py-1">

    <!-- Dashboards -->
    <li class="sidenav-item">
        <a href="{{url('dashboard')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-home"></i>
            <div>Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="sidenav-item active">
        <a href="{{url('registration')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-file-text"></i>
            <div>Registration</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('teacher-student')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-file-text"></i>
            <div>Teacher-Student Details</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('course-detail')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Course Details</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('session-section')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-list"></i>
            <div>Sessions & Sections</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('class-routine')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-calendar-alt"></i>
            <div>Class Routine</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('advisorship')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-archive"></i>
            <div>Advisorship</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('payments')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-credit-card"></i>
            <div>Payments</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('results')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-server"></i>
            <div>Results</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('exam-schedule')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-layer-group"></i>
            <div>Exam Scheduleing</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('notice-event')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-mail-bulk"></i>
            <div>Notices & Events</div>
        </a>
    </li>
    </ul>
@stop



@section('content')

<div class="text-center mt-5">
    <h3>Teacher Register</h3>
</div>

@if ( Session::has('success'))
    <div class="alert alert-success text-center">
        <strong> {{  Session::get('success') }}</strong>
    </div>
@endif

<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <form  method='post'  action="{{url('store-teacher')}}" enctype="multipart/form-data">

                 {{ csrf_field() }}
                <div class="form-group">
                    <label for="stuname"> Teacher Name </label> 
                    <input type="text" placeholder="First Name" name="fname" required class='form-control' >
                    <input type="text" placeholder="Last Name" name="lname" required class='form-control' > 
                </div>
                
                <div class="form-group">
                    <label for="faname">Father Name </label> 
                    <input type="text" name="faname"  class='form-control' required >
                </div>

                <div class="form-group">
                    <label for="moname" >Mother Name </label>
                    <input type="text" name="moname" class='form-control' required > 
                </div>

                <div class="form-group">
                    <label for="dob" > Date of Birth </label>
                    <input type="date" name="dob" class='form-control' required >
                </div>


                <div class="form-group">
                    <label for="gend"  > Gender  </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gend" value="female" class='form-control' >Female
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gend" value="male" class='form-control'>Male
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gend" value="others" class='form-control' checked >Others
                        </label>
                    </div>
                </div>


                

                <div class="form-group">
                    <label for="dept" > Department </label> 
                    <select name="dept" class='form-control' required  >
                        <option value="Computer Science & Engineering - CSE">Computer Science & Engineering - CSE </option>
                        <option value="Electrical & Electronics Engineering - EEE">Electrical & Electronics Engineering - EEE </option>
                        <option value="Architecture">Architecture</option>
                        <option value="BBA">BBA</option>
                        <option value="Economics">Economics</option>
                        <option value="Law">Law</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Sociology & Sustainable Development">Sociology & Sustainable Development</option>
                        <option value="CISCO Certified Network Associates(CCNA)">CISCO Certified Network Associates(CCNA)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tid" >Teacher ID </label required > 
                    <input type="text" placeholder="Ex : 1803010201623" name="tid"  class='form-control' required> 
                </div>

        </div>
        <div class="col-lg-6">
                <div class="form-group">
                    <label for="desi" >Designation</label> 
                    <input type="text"  name="desi"  class='form-control' required> 
                </div>

                <div class="form-group">
                    <label for="email"  > Email </label>
                    <input type="email" name="email" class='form-control' required>
                </div>

                <div class="form-group">
                    <label for="mbl"> Mobile </label>
                    <input type="tel"  name="mobile" required class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="address">Address </label> 
                    <input type="text" name="address" class='form-control' required>  
                </div>
                <br>
                
                <div class="form-group">
                    <label for="image"  > Profile Image  </label> 
                    <input type="file" name="image" class='form-control' required> 
                </div>
                <br>
                    
                @if(Session::has('fail'))
                    <div class="alert alert-danger text-center">
                        <strong> {{  Session::get('fail') }}</strong>
                    </div>
                @endif

                <div class="form-group">
                    <label for="pass"> Password </label> 
                    <input type="password"  name="pass" class='form-control' required> 
                </div>

                <div class="form-group">
                    <label for="cpass">Confirm Password </label> <br>
                    <input type="password" name="cpass" class='form-control' required> <br>
                </div>

        </div>
    </div>
</div>

<div class="text-center mb-5">
    <input type="submit" value="Register"  name="sub" class="btn btn-primary" >
</div>

</form>

@stop

