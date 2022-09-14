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

    <div class="container border-bottom text-center p-4">
        <h4>{{ $row->session_name." ".$row->session_year}}</h4>
    </div>

    <div class="container">
         
       
          
                <div class="container text-center my-5">
                    <div class="row">
                        
                        <div class="col-lg-4 dv p-3">          
                            <a href="{{url('pre-all-assigned-course/'.$row->id)}}" class="stretched-link text-dark"> <h5>All Assigned Courses</h5> </a>
                        </div>
                        <div class="col-lg-1">  </div>
                        <div class="col-lg-7 dv p-3">          
                            <a href="{{url('pre-add-new-course/'.$row->id)}}" class="stretched-link text-dark"> <h5>Add New Courses</h5> </a>
                        </div>
                        <div class="col-lg-12 dv my-2 p-3">          
                            <a href="{{url('pre-check-response/'.$row->id)}}" class="stretched-link text-dark"> <h5> Check Response </h5> </a>
                        </div>
                        

                    
                            
                    </div>
                </div>
           
        

    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




