<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Add Courses & Sections </title>
</head>
<body>

    <div class="container border-bottom text-center p-4">
        <h4>{{ $row->session_name." ".$row->session_year}}</h4>
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


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




