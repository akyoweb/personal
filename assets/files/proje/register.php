
<?php

require('database.php');







$username='';
$mobile='';
$namefull='';
$password='';
$message='';

if (isset($_POST['username']) && isset($_POST['mobile']) && isset($_POST['namefull']) && isset($_POST['password'])){

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$namefull=$_POST['namefull'];
$password=$_POST['password'];

// استفاده از Prepared Statement برای جلوگیری از SQL Injection
// جدول users چهار ستون دارد پس باید چهار placeholder و رشته نوع با چهار حرف باشد
$sql = "INSERT INTO users (username, mobile, namefull, password) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $username, $mobile, $namefull, $password);

if (mysqli_stmt_execute($stmt)) {
    $message = '<div style="direction: rtl" class="alert alert-success" role="alert">
    ثبت نام با موفقیت انجام شد. در حال انتقال به صفحه ورود...
    </div>';
    echo '<meta http-equiv="refresh" content="3; url=login.php">';
} else {
    $message = '<div style="direction: rtl" class="alert alert-danger" role="alert">
    خطا در ثبت نام، لطفا دوباره تلاش کنید.
    </div>';
}

mysqli_stmt_close($stmt);
};







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
                                    <?php echo $message; ?>
                                    <form action="register.php" method="post">
<div class="form-floating mb-3">
    <input name="username" class="form-control" id="inputEmail" type="text" placeholder="" />
    <label for="inputEmail">نام کاربری</label>
</div>

<div class="form-floating mb-3">
    <input name="mobile" class="form-control" id="inputEmail" type="tel" placeholder="" />
    <label for="inputEmail">شماره همراه</label>
</div>


    <div class="form-floating mb-3">
        <input name="namefull" class="form-control" id="inputEmail" type="text" placeholder="" />
        <label for="inputEmail">نام و نام خانوادگی</label>
    </div>





                                        <div class="form-floating mb-3">
                                            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">رمز عبور</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                          <button class="btn btn-success"> ثبت نام</button>
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
