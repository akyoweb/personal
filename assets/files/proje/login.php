 <?php
 


 require('database.php');

  $username = '';
 $password = '';
 $error = '';

  if (isset($_POST['username'])) {

     $username = $_POST['username'];
     $password = $_POST['password'];

     // استفاده از Prepared Statement برای جلوگیری از SQL Injection
     $stmt = mysqli_prepare($db, "SELECT * FROM users WHERE (username = ? OR mobile = ?) AND password = ?");
     mysqli_stmt_bind_param($stmt, 'sss', $username, $username, $password);
     mysqli_stmt_execute($stmt);
     $sql = mysqli_stmt_get_result($stmt);

  $login=0;

  if($row=mysqli_fetch_assoc($sql)){

  mysqli_stmt_close($stmt);

 $login=1;




echo '<meta http-equiv="refresh" content="3; url=index.php">';




}else{


 $error = '<div style="direction: rtl" class="alert alert-danger" role="alert">
 نام کاربری یا رمز عبور اشتباه است
 </div>';


 };




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
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">صفحه ورود</h3>
                                </div>
                                <div class="card-body">
                                    <?php echo $error; ?>
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input name="username" class="form-control" id="inputEmail" type="text"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">نام کاربری</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="password" class="form-control" id="inputEmail" type="password"
                                                placeholder="name@example.com" />

                                            <label for="inputPassword">رمز عبور</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <input type="submit" value="ورود" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">ثبت نام کنید! </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>

</html>