<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .login,
        .image {
        min-height: 100vh;
        }

        .bg-image {
            background-size: cover;
            background-position: center center;
        }
    </style>
    <title>login</title>
</head>
<body>

    <div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image">
            <img src="{{url('images/premieruniversity.jpeg')}}">
        </div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4 text-center my-4">P U A I S</h3>
                            
                            <form method='post' action="{{url('check-login')}}">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <input type="email" name="em" placeholder="Email address" required autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" name="em" class='form-control' >
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="pass" placeholder="Password" required class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" class='form-control'>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                    <label for="customCheck1" class="custom-control-label">Remember password</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log in</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>

            <nav class="layout-footer footer">
                <div class="container-fluid d-flex flex-wrap container-p-x pb-3">
                    <div class="pt-3">
                        <span class="footer-text font-weight-semibold"> 
                            <p class="text-center">Copyright ©2022-2023 Premier University, All Rights Reserved.</p>
                        </span>
                    </div>
                </div>
            </nav>
        
        </div>

      
        
        <!-- End -->

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>