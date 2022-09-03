<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Edit Routine</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg my-3 text-center">
                <h5> {{ $val->course_name }}</h5>
                <p> {{ $val->course_code }} <br>
                 {{ $val->section  }} <br>
                 {{ $val->T_name }} </p>
            </div>
            <div class="col-lg"></div>
        </div>
    </div>


   
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

                    <h5 class="text-center"> <u>Update Schedule </u></h5>
                    <form method='post' action="{{url('update-routine-entry/'.$det->serial)}}">
                             {{ csrf_field() }}
                        <div class="form-group my-3 ">
                            <label for="st">Start Time  : {{ date("g:i A", strtotime($det->start_time)) }} <br> Enter New Start Time : </label> 
                            <input type="time" name="st" class='form-control' required >
                        </div>
                        <div class="form-group my-3 ">
                            <label for="et">End Time  : {{ date("g:i A", strtotime($det->end_time)) }} <br> Enter New End Time :</label> 
                            <input type="time" name="et" class='form-control' placeholder="{{ $det->end_time }}"  required >
                        </div>
                        <div class="form-group my-3 ">
                            <label for="day">Day : {{ $det->day }} <br> Select Day :  </label> 
                            <select name="day" class='form-control' placeholder="{{ $det->day }}" required >
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
                            <input type="text" name="rn" class='form-control' placeholder="{{ $det->room}}"  required >
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class='btn btn-primary btn-block'> Update</button>
                        </div>

                    </form>
                
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>