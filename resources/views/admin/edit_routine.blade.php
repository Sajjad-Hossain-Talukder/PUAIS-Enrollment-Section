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
    <title>Edit Routine</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg my-5 ">
                <h5>Course Name : {{ $det->course_name }}</h5>
                <h5>Course Code : {{ $det->course_code }} </h5>
                <h5>Section : {{ $det->section  }} </h5>
                <h5>Course Instructor : {{ $det->T_name }} </h5>
            </div>
            <div class="col-lg"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <details>
                    <summary class="btn btn-primary "> Add Time and Day </summary>
                    <form method='post' action="{{url('store-routine/'.$det->serial)}}">
                             {{ csrf_field() }}
                        <div class="form-group my-3 ">
                            <label for="st">Start Time  </label> 
                            <input type="time" name="st" class='form-control'>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="et">End Time  </label> 
                            <input type="time" name="et" class='form-control' >
                        </div>
                        <div class="form-group my-3 ">
                            <label for="day">Select Day  </label> 
                            <select name="day" class='form-control'>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                            </select>
                           
                        </div>
                        <div class="form-group my-3 ">
                            <label for="rn">Enter Room Number   </label> 
                            <input type="text" name="rn" class='form-control'>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class='btn btn-block btn-primary'> Add </button>
                        </div>

                    </form>
                </details>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                    <h3 class="text-center"> Class Schedule </h3>
                    @foreach($rout as $r)
                    <div class="card my-3">
                        <h6>Day : {{ $r->day }} </h6>
                        <h6>Start Time : {{  $r->start_time }} </h6>
                    </div>
                    @endforeach
                   
            </div>
        </div>
    </div>

    
</body>
</html>