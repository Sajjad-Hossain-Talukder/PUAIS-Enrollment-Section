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

<h6 class="text-center"> Add Admin</h6>

@if ( Session::has('success'))
    <div class="alert alert-success">
        <strong> {{  Session::get('success') }}</strong>
    </div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                    <form method='post' enctype="multipart/form-data" action="{{url('admin-registration')}}">
                             {{ csrf_field() }}
                        <div class="form-group my-3 ">
                            <label for="nm">Name   </label> 
                            <input type="text" name="nm" class='form-control'>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="desi">Designation   </label> 
                            <input type="text" name="desi" class='form-control'>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="em">Email   </label> 
                            <input type="text" name="em" class='form-control'>
                        </div>

                        <div class="form-group my-3 ">
                            <label for="cont">Contact  </label> 
                            <input type="text" name="cont" class='form-control'>
                        </div>
            </div>
            <div class="col-lg-4">
                        <div class="form-group my-3 ">
                            <label for="pass">Password   </label> 
                            <input type="password" name="pass" class='form-control'>
                        </div>
                        
                        @if ( Session::has('err_msg'))
                                <div class="alert alert-danger">
                                    <strong> {{  Session::get('err_msg') }}</strong>
                                </div>
                        @endif

                        <div class="form-group my-3 ">
                            <label for="cpass">Confirm Password   </label> 
                            <input type="password" name="cpass" class='form-control'>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="image">Image   </label> 
                            <input type="file" name="image" class='form-control'>
                            
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class='btn btn-primary btn-block'> Add </button>
                        </div>

                    </form>
                
            </div>
          
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>