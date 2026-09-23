<?php

require('database.php');

// print_r($db);

// $sql= mysqli_query($db , "insert into users (username) values ('majid')" );

$username='';  
$password='';


if (isset($_POST['username'])){


    $username=$_POST['username'];
    $password=$_POST['password']; 


    $sql= mysqli_query($db , "
    
    select * from users where (username='$username' or mobile='$username') and pass='$password';
    
    " );

    $login=0;

    if ($row=mysqli_fetch_assoc($sql)){


            $login=1;

            setcookie('username', $row['username'], time() + (86400 * 30), "/");
            setcookie('namefull', $row['namefull'], time() + (86400 * 30), "/");
            setcookie('userid', $row['id'], time() + (86400 * 30), "/");
            echo '<meta http-equiv="refresh" content="0; URL=\'index.php\'" /> ';

    }else{


        echo '<div style="direction: rtl;" class="alert alert-danger" role="alert">
        نام کاربری یا رمز عبور اشتباه است!
      </div>';


    }





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
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">صفحه ورود</h3></div>
                                <div class="card-body">
                                    <form action="login.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" id="inputEmail" type="text" placeholder="name@example.com" />
                                            <label for="inputEmail">نام کاربری</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">رمز عبور</label>
                                        </div>
                                         
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                           
                                            <input type="submit" class="btn btn-primary" value="ورود"> 
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">ثبت نام کنید!    </a></div>
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
