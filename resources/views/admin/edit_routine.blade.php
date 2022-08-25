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
            <div class="col-lg my-5 text-center">
                <h5> {{ $det->course_name }}</h5>
                <p> {{ $det->course_code }} <br>
                 {{ $det->section  }} <br>
                 {{ $det->T_name }} </p>
            </div>
            <div class="col-lg"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-4">

                    <h6 class="text-center"> Add New Schedule </h6>
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
                            <button type="submit" class='btn btn-primary btn-block'> Add </button>
                        </div>

                    </form>
                
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
                    <h6 class="text-center my-3"> Class Schedule </h6>
                    @if($leng == 0 )
                        <p class="p-3 mb-2 bg-danger text-white text-center" > No Schedule Added Yet !!! </p>
                    @endif
                    <div class="container">
                        <div class="row">
                            @foreach($rout as $r)
                            <div class="col-lg-6">
                                <div class="card p-1 my-3 text-center">
                                    <div class="card-body">
                                    
                                        <p>{{ $r->day }}<br>
                                        {{ date("g:i a", strtotime($r->start_time)) }} - {{ date("g:i a", strtotime($r->end_time)) }} <br>
                                        Room : {{ $r->room }}</p>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{url('update-routine/'.$r->serial)}}" class="btn btn-primary">Update</a>
                                        
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$r->serial}}"> Delete</a>
                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal{{$r->serial}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Confirmation</h5>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        Are you sure you want to delete <b> {{ $r->day }} ( {{ date("g:i a", strtotime($r->start_time)) }} - {{ date("g:i a", strtotime($r->end_time)) }} )</b> ? 
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                        <a class="btn btn-danger" href="{{url('delete-routine/'.$r->serial)}}"> YES</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  


                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>