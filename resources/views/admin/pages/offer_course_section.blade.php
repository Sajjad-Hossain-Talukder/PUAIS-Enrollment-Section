@extends('admin.layouts.dash')

@section('title')
    <title>Assign Courses</title>
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
                                        <img src="{{ asset('thumbnail/'.Session::get('image')) }}" alt class="d-block ui-w-30 rounded-circle">
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
    <li class="sidenav-item">
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
    <li class="sidenav-item active">
        <a href="{{url('course-detail')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Course Details</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('enrollment')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Enrollment</div>
        </a>
    </li>
    <li class="sidenav-item">
        <a href="{{url('pre-enrollment')}}" class="sidenav-link">
            <i class="sidenav-icon fas fa-chalkboard-teacher"></i>
            <div>Pre-Enrollment</div>
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


 
    <div class="card m-3">

        <div class="container border-bottom text-center p-4">
                <h3>{{ $row->session_name." ".$row->session_year}}</h>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5 border-right">
                    <div class="container text-center p-3">
                        <h5 class="text-center"> Assign New Class </h5>
                    </div>
                            
                            
                            @if ( Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <strong> {{  Session::get('success') }}</strong>
                                    {{Session::forget('success')}}
                                </div>
                            @endif
                            
                            <form method='post' action="{{url('add-course')}}">
                                {{ csrf_field() }}

                                <div class="container">
                                    <div class="row">
                                            <div class="form-group">
                                                <input type="hidden" name="session" value="{{$row->id}}">
                                            </div>
                                            <div class="form-group col-6 mt-2 ">
                                                <label for="course">Select Course </label> 
                                                <select name="course" class='form-control' Required>
                                                    @foreach($course as $c)
                                                        <option value="{{ $c->id }}">{{$c->course_title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-6 mt-2 ">
                                                <label for="sec">Select Section  </label> 
                                                <select name="sec" class='form-control' Required>
                                                        <option value="A">A</option>
                                                        <option value="A1">A1</option>
                                                        <option value="A2">A2</option>
                                                        <option value="B">B</option>
                                                        <option value="B1">B1</option>
                                                        <option value="B2">B2</option>
                                                        <option value="C">C</option>
                                                        <option value="C1">C1</option>
                                                        <option value="C2">C2</option>
                                                        <option value="D">D</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="E">E</option>
                                                        <option value="E1">E1</option>
                                                        <option value="E2">E2</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6 mt-2 ">
                                                <label for="teacher">Select Teacher  </label> 
                                                <select name="teacher" class='form-control' Required >
                                                    @foreach($teacher as $t)
                                                        <option value="{{$t->id }}">{{$t->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-6 mt-2 ">
                                                <label for="sc">Student Capacity</label> 
                                                <input type="number" name="sc" class="form-control" Required>
                                            </div>

                                            <div class="col-3"></div>
                                                <div class="form-group col-6 text-center mt-3">
                                                <button type="submit" class='btn btn-primary btn-block'> Add Course </button>
                                            </div>
                                            <div class="col-3"></div>
                                            
                                    </div>
                                </div>
                            </form>
                </div>
                <div class="col-lg-7 border-left">
                    <div class="container text-center p-3">
                        <h5 class="text-center"> Assigned Classes </h5>
                    </div>

                    @if(Session::has('blank'))
                        <div class="alert alert-danger text-center">
                            <h6>{{ Session::get('blank')}} </h6>
                        </div>

                    @endif
                    @if(!Session::has('blank'))
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>semester</th>
                                <th>Course Title </th>
                                <th>Section</th>
                                <th>Instructor</th>
                                <th>Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($assigned as $as)
                                <tr>
                                    <td>{{$as->semester }}</td>
                                    <td>{{$as->course_title }}</td>
                                    <td>{{$as->section }}</td>
                                    <td>{{$as->name }}</td>
                                    <td>{{$as->student_capacity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
   
@stop

