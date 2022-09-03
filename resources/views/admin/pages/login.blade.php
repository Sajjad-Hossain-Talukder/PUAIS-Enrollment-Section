<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                    <h5 class="text-center"> Login </h5>
                    <form method='post' action="{{url('check-login')}}">
                             {{ csrf_field() }}
                             
                             
                            @if ( Session::has('fail'))
                                <div class="alert alert-danger">
                                    <strong> {{  Session::get('fail') }}</strong>
                                </div>
                            @endif
                            
                        <div class="form-group my-3 ">
                            <label for="em">Email</label> 
                            <input type="email" name="em" class='form-control'>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="pass">Password</label> 
                            <input type="password" name="pass" class='form-control'>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class='btn btn-primary btn-block'> Login </button>
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