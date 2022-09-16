@extends('student.layouts.dash')

@section('title')
    <title>{{ Session::get('username') }} - Dashboard</title>
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
    <li class="sidenav-item active">
        <a href="{{url('student-dashboard')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-home"></i>
            <div>Dashboard</div>
        </a>
    </li>

    <!-- Layouts -->
    <li class="sidenav-item">
        <a href="{{url('my-courses')}}" class="sidenav-link">
            <i class="sidenav-icon feather icon-file-text"></i>
            <div>Courses</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-enrollment')}}" class="sidenav-link">
            <i class="sidenav-icon fa fa-bars" aria-hidden="true"></i>
            <div>Enrollment</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-pre-enrollment')}}" class="sidenav-link">
        <i class="sidenav-icon fa fa-th-list" aria-hidden="true"></i>
            <div>Pre-Enrollment</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-inbox')}}" class="sidenav-link">
            <i class="sidenav-icon fa fa-comments" aria-hidden="true"></i>
            <div>Inbox</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-payment')}}" class="sidenav-link">
        <i class="sidenav-icon fa fa-credit-card" aria-hidden="true"></i>
            <div>Payments</div>
        </a>
    </li>

    <li class="sidenav-item">
        <a href="{{url('student-class-routine')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-calendar-alt"></i>
            <div>Class Routine</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-advisorship')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-archive"></i>
            <div>Advisorship</div>
        </a>
    </li>

    <li class="sidenav-item">
        <a href="{{url('student-result')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-server"></i>
            <div>Results</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-exam-schedule')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-layer-group"></i>
            <div>Exam Scheduleing</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('student-notice-event')}}" class="sidenav-link">
            <i class="sidenav-icon 	fas fa-mail-bulk"></i>
            <div>Notices & Events</div>
        </a>
    </li>
    </ul>
@stop



@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 my-4 ">
                <div class="card">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-2 p-3">
                                <img src="thumbnail/{{ $row->image }}"  class="img-fluid rounded float-right" alt="{{ $row->name }}" >
                            </div>
                            <div class="col-lg-6 text-center pt-5">
                                <h4>Hello ,  <span style="color:#1461AA; font-size:28px;"> {{ $row->name }} </span>  ! </h4>
                                <h3>Welcome to P U A I S</h3>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header"><h4 class="text-center"> Basic Info </h4></div>
                    <div class="card-body text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-1 mt-1"> </div>
                                <div class="col-lg-5  mt-1 dv pt-3"> 
                                <i class="fa fa-user" aria-hidden="true"></i><br>
                                    <h5> {{ $row->student_id }} </h5>  <br>
                                </div>
                                <div class="col-lg-1  mt-1"> </div>
                                <div class="col-lg-4 dv  mt-1 pt-3">
                                    <i class="fa fa-square" aria-hidden="true"></i><br>
                                    <h5> {{ $row->batch }} Batch </h5> <br>
                                </div>
                                <div class="col-lg-1  mt-1"> </div>
                                <div class="col-lg-1  mt-1"> </div>
                                <div class="col-lg-4 dv  mt-1 pt-3">
                                    <i class="fa fa-university" aria-hidden="true"></i><br>
                                    <h5>{{ $row->department }}</h5> <br>
                                </div>
                                <div class="col-lg-1  mt-1"> </div>
                                <div class="col-lg-5 dv  mt-1 pt-3">
                                    <i class="fa fa-envelope" aria-hidden="true"></i><br>
                                    <h5>{{ $row->email }}</h5><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        
                
                <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-5  p-4 m-4 intr">
                                <h5> <a href="#"> Profile </a></h5>
                            </div>
                            <div class="col-lg-5  p-4 m-4 intr" >
                                <h5> <a href="#"> Education & Skills </a></h5>
                            </div>
                            <div class="col-lg-5  p-4 m-4 intr">
                                <h5> <a href="#"> Licenses & Certifications </a></h5>
                            </div>
                            <div class="col-lg-5  p-4 m-4 intr">
                                <h5> <a href="#">Accomplishments </a></h5>
                            </div>
                        </div>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="card border-dark" >
                    <div class="card-header"><h4 class="text-center">Advisor</h4></div>
                    <div class="card-body text-center">
                        
                        
                        <img class="img-fluid img-thumbnail rounded p-3  mx-auto d-block" src="thumbnail/{{$adv->image}}"> <hr>
                             
                        <div >  <h6> {{ $adv->name }}</h6> </div>
                        <div >  
                            <p class="text-center">
                                {{ $adv->designation }}
                                <br>
                                {{ $adv->email}}
                                <br>
                                {{ $adv->mobile}}
                            </p> 
                        </div>
                        
                        
                        <div> <a href="student_contact_advisor.php" class="text-center btn btn-warning">Contact</a></div>
                        
                     </div>
                </div>
                <div class="card mt-3 p-5 border-dark" >
                    <a href="student_inbox.php" class="card-link stretched-link"> <h4 class="text-center"> I N B O X </h4></a>
                </div>
                
                <div class="card mt-3 border-dark" >
                    <h5 class="text-center mt-2">Batchmates</h5> <hr>
                    <div class="container">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
                <div class="card mt-3 border-dark">
                    <h4 class="text-center mt-3">Calender</h4>
                    <div data-tockify-component="calendar" data-tockify-calendar="know.what"></div>
                    <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
                </div>

            </div>


        </div>
    </div>

  
    
@stop

