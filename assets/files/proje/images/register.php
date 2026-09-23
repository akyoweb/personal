<?php

require('database.php');

// print_r($db);

// $sql= mysqli_query($db , "insert into users (username) values ('majid')" );

$username='';
$mobile='';
$namefull='';
$password='';


if (isset($_POST['username'])){


    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $namefull=$_POST['namefull'];
    $password=$_POST['password'];


    $sql= mysqli_query($db , "insert into users (username,mobile,namefull,pass) values ('$username','$mobile','$namefull','$password')" );


    // echo "insert into users (username,mobile,namefull,pass) values ('$username','$mobile','$namefull','$password')" ;

    // echo mysqli_error($db);
    

}


?>


<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="GPS Tracker - ردیاب جی پی اس" />
        <meta name="author" content="مجید تجن جاری" />
        <title>Login - AioTracker</title>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>



    <body class="body_login">


    <div class="login" id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">صفحه ثبت نام</h3></div>
                                <div class="card-body">
                                    <form action="register.php" method="post">
<div class="form-floating mb-3">
    <input class="form-control" name="username" id="inputEmail" type="text" placeholder="" />
    <label for="inputEmail">نام کاربری</label>
</div>

<div class="form-floating mb-3">
    <input class="form-control"  name="mobile" id="inputEmail" type="tel" placeholder="" />
    <label for="inputEmail">شماره همراه</label>
</div>
 
 
    <div class="form-floating mb-3">
        <input class="form-control"  name="namefull" id="inputEmail" type="text" placeholder="" />
        <label for="inputEmail">نام و نام خانوادگی</label>
    </div>





                                        <div class="form-floating mb-3">
                                            <input  name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">رمز عبور</label>
                                        </div>
                                         
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                           
                                            <input type="submit" value="ثبت نام" class="btn btn-success" > 
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">وارد شوید!    </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
      
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    </body>

</html>
