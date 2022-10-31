<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>{{ $row->session_name." ".$row->session_year }}</title>
    <style>
        .dv{
            border : 1px solid black;
            border-radius : 10px;
        }
        .dv:hover{
           
            border-radius : 10px;
            box-shadow : 1px 1px 5px gray;
        }
    </style>
</head>
<body>

    <div class="container text-center p-4">
        <h4>{{ $row->session_name." ".$row->session_year}}</h4>
        <div class="text-center">
                 <h6> Assign Course </h6>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 text-center my-5">

                        @if ( Session::has('success'))
                            <div class="alert alert-success text-center">
                                <strong> {{  Session::get('success') }}</strong>
                                {{Session::forget('success')}}
                            </div>
                        @endif
                        

                <table class="table">
                    <thead>
                        <tr>
                            <th>Semester</th>
                            <th>Course Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assigned as $as )
                            @if($as->id != 0 )
                            <tr>
                                <td>{{$as->semester}}</td>
                                <td>{{$as->course_title}}</td>
                                <td>
                                    <form action="{{url('pre-add-course/'.$row->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cid" value="{{$as->id}}" class="form-control" >
                                        <button type="submit" class='btn btn-primary btn-block'> Add </button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                  
                </table>

            </div>
            <div class="col-lg-2"></div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!--
                @foreach($assigned as $as )
                    <div class="col-lg-3 text-center p-1">
                    <details>
                        <summary>
                            <div class="card">
                                <h6>{{$as->course_title}}</h6>
                                <h6>{{$as->semester}} Semester </h6>
                            </div>
                        </summary>

                        <form action="{{url('pre-add-course/'.$row->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="cid" value="{{$as->id}}" class="form-control" >
                                        <button type="submit" class='btn btn-primary btn-block'> Add </button>
                        </form>


                    </details>

                </div>                 
                @endforeach

-->
      


