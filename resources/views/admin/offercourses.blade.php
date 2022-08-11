<!DOCTYPE html>
<html lang="en">
<head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Offer Courses</title>
</head> 

<body>

<div class="container">
    <div class="row">

        <h3 class='text-center my-3'> Offer Courses </h3>

        <form method='post' action="{{url('add-course')}}">
            {{ csrf_field() }}

            <div class="container">
                <div class="row">
                        <div class="form-group col-6 my-2 ">
                            <label for="sess">Select Session :  </label> 
                            <select name="sess" class='form-control'>
                                @foreach($session as $s)
                                    {{$val = $s->s_name. " ".$s->s_year ; }}
                                    <option value="{{$val}}">{{$val}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6 mt-2 ">
                            <label for="course">Select Course :  </label> 
                            <select name="course" class='form-control'>
                                @foreach($course as $c)
                                   
                                    <option value="{{ $c->course_code }}">{{$c->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6 mt-2 ">
                            <label for="sec">Select Section :  </label> 
                            <select name="sec" class='form-control'>
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
                            <label for="teacher">Select Teacher :  </label> 
                            <select name="teacher" class='form-control'>
                                @foreach($teacher as $t)
                                    <option value="{{ $t->T_Id }}">{{$t->T_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3"></div>
                        <div class="form-group col-6 text-center mt-3">
                            <button type="submit" class='btn btn-primary'> Add Course </button>
                        </div>
                        <div class="col-3"></div>
                        
                </div>
            </div>
        </form>
    </div>
</div>



<div class="container mt-3">
    <div class="row">
        <h3 class="text-center my-5 ">Course Details</h3>


        <form method='post' action="{{url('courses-details')}}">
            {{ csrf_field() }}
            <div class="container">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="sess">Select Session :  </label> 
                        <select name="sess" class='form-control'>
                            @foreach($session as $s)
                                {{$val = $s->s_name. " ".$s->s_year ; }}
                                <option value="{{$val}}">{{$val}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="sem">Select Semester :  </label> 
                        <select name="sem" class='form-control'>
                                <option value="1">First</option>
                                <option value="2">Second</option>
                                <option value="3">Third</option>
                                <option value="4">Fourth</option>
                                <option value="5">Fifth</option>
                                <option value="6">Sixth</option>
                                <option value="7">Seventh</option>
                                <option value="8">Eighth</option>
                        </select>
                    </div>

                    <div class="col-3"></div>
                    <div class="form-group col-6 text-center mt-3">
                        <button type="submit" class='btn btn-primary'> Show Courses </button>
                    </div>
                    <div class="col-3"></div>
                    
                </div>
            </div>
            

    
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        @if(Session::has('null'))
            <h4 class="text-center mt-5 ">{{ Session::get('null') }}</h4>
        @endif

        @if ( Session::has('rows'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Section</th>
                        <th>Teacher ID</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach(Session::get('rows') as $p)
                    <tr>
                        <td>{{$p->course_code}}</td>
                        <td>{{$p->course_name}}</td>
                        <td>{{$p->section}}</td>
                        <td>{{$p->T_name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>



</body>
</html>

