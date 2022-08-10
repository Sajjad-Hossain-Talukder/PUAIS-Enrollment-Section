<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Routine</title>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <h2 class="text-center">Update Class Routine</h2>


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