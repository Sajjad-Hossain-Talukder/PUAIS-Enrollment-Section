<!DOCTYPE html>
<html lang="en">
<head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
        .first{
            border-radius : 20px;
            box-shadow : 1px 1px 10px gray ; 
        }
    </style>

    <title>Resister - Student</title>

</head>

<body >

    <div class="container p-3 mt-5 first">
        <div class="row">
            <div class="col-lg-3 col-sm-12 col-md-12"></div>
            
            <div class="col-lg-2 col-sm-12 col-md-12 text-center" >
                <a href="index.php" style="text-decoration:none;"><img src="images/puc.png" class="img-fluid">  </a>
            </div>
            <div class="col-lg-4 col-sm-12 col-md-12 mt-3">
            <a href="index.php" style="text-decoration:none; color : black; text-align:center">
                <h1>Premier University</h1>
                <h6>Center of Excellence for Quality Learning</h6>
            </a>
                
            </div>
            <div class="col-lg-3 col-sm-12 col-md-12"></div>
        </div> 
    </div>


    
    <div class="text-center mt-5"><h2>Student Resister</h2></div>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" >
                            <div  class="text-center">
                                    <label for="stuname"> Student Name </label> <br>
                                    <input type="text" placeholder="First Name" name="fname" required  style="width:50%;" class="text-center">
                                    <input type="text" placeholder="Last Name" name="lname" required  style="width:31%;" class="text-center"> 

                                    <br><br>

                                    <label for="faname">Father Name </label> <br>
                                    <input type="text" required  style="width:82%;" name="faname" required class="text-center"> <br><br>

                                    <label for="moname" >Mother Name </label> <br>
                                    <input type="text" required  style="width:82%;" name="moname" class="text-center"> <br><br>

                                    <label for="dob" > Date of Birth </label><br>
                                    <input type="date" name="dob" required style="width:82%;" class="text-center"><br><br>
                
                                    <label for="gend"  > Gender </label><br>
                                    <input type="radio" value="Male" name="gend" style="width:8%;" >
                                    <label for="gend" class="gendi"> Male </label>
                                    <input type="radio" value="Female" name="gend" style="width:8%;" >
                                    <label for="gend" class="gendi"> Female </label>
                                    <input type="radio" value="Others" name="gend" checked style="width:8%;" >
                                    <label for="gend" class="gendi" > Others </label>

                                    <br><br>

                                    

                                    <label for="dept" > Department </label> <br>
                                    <select name="dept" style="width:82%;" >
                                        <option value="Computer Science & Engineering - CSE">Computer Science & Engineering - CSE </option>
                                        <option value="Electrical & Electronics Engineering - EEE">Electrical & Electronics Engineering - EEE </option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="BBA">BBA</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Law">Law</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Sociology & Sustainable Development">Sociology & Sustainable Development</option>
                                        <option value="CISCO Certified Network Associates(CCNA)">CISCO Certified Network Associates(CCNA)</option>
                                    </select> <br><br>

                                    <label for="sid" >Student ID </label> <br>
                                    <input type="text" placeholder="Ex : 1803010201623" name="sid" style="width:82%;" class="text-center"> <br><br>
                                </div>
                            
                                
                         </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                       
                        <form method="post" enctype="multipart/form-data" >
                            <div  class="text-center">

                                <label for="batch" >Batch </label> <br>
                                <input type="text"  name="batch" style="width:82%;" placeholder="Ex : 35" class="text-center"> <br><br>



                                <label for="email"  > Email </label><br>
                                <input type="email" style="width:82%;" name="email" required class="text-center"><br><br>

                                <label for="mbl"> Mobile </label><br>
                                <input type="tel" style="width:82%;" name="mobile" required class="text-center"> <br><br>

                                

                                <label for="address">Address </label> <br>
                                <input type="text" name="address" style="width:82%;" required class="text-center">  <br><br>

                                <label for="pic"  > Profile Image  </label> <br>
                                <input type="file" name="pic" required class="text-center"> <br><br>


                                <label for="pass"> Password </label> <br>
                                <input type="password"  name="pass" style="width:82%;" required class="text-center"> <br><br>


                                <label for="cpass">Confirm Password </label> <br>
                                <input type="password" style="width:82%;" required name="cpass" class="text-center"> <br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <input type="submit" value="Resister" style="width:82%;" name="sub" class="btn btn-primary" >
        </div>
    </div>



    <div class="text-center py-3 mt-5 bg-dark text-white">
        <h6>Copyright © 2021 Premier University IT. All rights reserved.</h6>
    </div>


</body>
</html>



            <div class="form-group">
                <label for="name"> Name </label>
                <input type="text" name='name' class='form-control'>
            </div>

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" name='email' class='form-control'>
            </div>

            <div class="form-group">
                <label for="birth_date"> Date of Birth </label>
                <input type="date" name='birth_date' class='form-control'>
            </div>

            <div class="form-group">
                <label for="salary"> Salary </label>
                <input type="number" name='salary' class='form-control'>
            </div>

            <div class="form-group">
                <button type="submit" class='btn btn-primary'> Save</button>
            </div>

        </form>