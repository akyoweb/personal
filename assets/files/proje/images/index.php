<?php

require("database.php");

if (isset($_COOKIE['username'])){




}else{


    echo '<meta http-equiv="refresh" content="0; URL=\'login.php\'" /> ';

}


if (isset($_POST['devicename'])){


    $devicename=$_POST['devicename'];
    $deviceserial=$_POST['deviceserial'];  

    $userid=$_COOKIE['userid'];


    $sql= mysqli_query($db , "
    
    insert into devices (device_name,device_serial,user_id) values ('$devicename','$deviceserial','$userid')
    
    " );

    echo "
    
    insert into devices (device_name,device_serial,user_id) values ('$devicename','$deviceserial','$userid')
    
    " ;

    echo mysqli_error($db);

}



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="ردیاب آیوترکر" />
        <meta name="author" content="مجید تجن جاری" />
        <title>Aio Tracker</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>



    <body class="sb-nav-fixed">



        <div class="modal fade" id="Modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Device</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post" action="index.php">
                <div class="modal-body">
                 
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Device Name</span>
                        <input name="devicename" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Device Serial</span>
                        <input  name="deviceserial" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>





                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Add</button>
                </div>
                </form>
              </div>
            </div>
          </div>





        <div class="modal fade" id="Modalsetting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Setting</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>







        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Aio Tracker</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Map
                            </a>


<!-- 

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.php">Login</a>
                                            <a class="nav-link" href="register.php">Register</a>
                                            <a class="nav-link" href="password.php">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.php">401 Page</a>
                                            <a class="nav-link" href="404.php">404 Page</a>
                                            <a class="nav-link" href="500.php">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->




















                            <div class="sb-sidenav-menu-heading">Devices</div>
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Modaladd">
                                <div class="sb-nav-link-icon"><i class="fa fa-location-dot"></i></div>
                                Add Device
                            </a>
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Modalsetting">
                                <div class="sb-nav-link-icon"><i class="fa fa-bars"></i></div>
                                Setting
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged:</div>
                        <?php if (isset($_COOKIE['namefull'])){ echo $_COOKIE['namefull'];} ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <br>
                        <!-- <h1 class="mt-4">Map</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home</li>
                            
                        </ol> -->
                        <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        نقشه کل
                                    </div>
                                    <div class="card-body" style="    padding: 0;">
                                        

                                        <div id="map" style="  width: 100%;height: 560px; ">
        


                                    </div>
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>






                       <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        لیست دستگاه ها
                                    </div>
                                    <div class="card-body" style="    padding: 0;">
                                        

                                        <div style="  width: 100%;height: 200px; ">

                                        <table class="table">
                                            <tr>
                                            <th> نام دستگاه </th>
                                            <th> سریال دستگاه </th>
                                            </tr>

                                        <?php


                                        $sql=mysqli_query($db,"
                                            select * from devices;
                                        ");

                                        while($row=mysqli_fetch_assoc($sql)){

                                            echo '
                                            <tr>
                                                <td> ' . $row['device_name'] . ' </td>
                                                <td>  ' . $row['device_serial'] . ' </td>
                                            </tr>  
                                            ';
                                        }


                                        ?>
                                         
                                          

                                        </table>
        


                                    </div>
                                </div>
                            </div>
                          
                        </div>  
                        
                        <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                      وضعیت
                                    </div>
                                    <div class="card-body" style="    padding: 0;">
                                        

                                        <div   style="  width: 100%;height: 200px; ">
        


                                    </div>
                                </div>
                            </div>
                          
                        </div>
                       
                    </div>






                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Aio Tracker 2023</div>
                            <div>
                                 
                              
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 


        

<script>


    function myMap() {



        var gpsx=0;
        var gpsy=0;

                
        <?php


        $sql=mysqli_query($db,"
            select * from device_log order by id desc limit 1;
        ");

        if($row=mysqli_fetch_assoc($sql)){

            echo '
            gpsx= '.$row['gpsx'].';
            gpsy= '.$row['gpsy'].';
            ';
        }


        ?>
        
        var myCenter = new google.maps.LatLng(gpsx, gpsy);
         
        
            
          var mapCanvas = document.getElementById("map");
    
          var mapOptions = {
            center: myCenter, 
            zoom: 11,
            // mapTypeId: google.maps.MapTypeId.HYBRID
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          
          
        
        var map = new google.maps.Map(mapCanvas, mapOptions); 
    
    
        google.maps.event.addListener(map,'click',function() {click1();});
        
        


        var p1 = new google.maps.LatLng(gpsx, gpsy);
        var marker = new google.maps.Marker({position: p1,  icon: { url: "images/loc.png", scaledSize: new google.maps.Size(33, 50)}  });
     
        marker.setMap(map);
    
        
            var infoWindow = new google.maps.InfoWindow();
    
            google.maps.event.addListener(marker, 'click', function () {
                var markerContent = '<button> click </button> Majid Tejenjari <br><br> توضیحات دلخواه';
                infoWindow.setContent(markerContent);
                infoWindow.open(map, this);
            });
    
    
    
        // google.maps.event.addListener(marker,'click',function() { 
    
        //      click1();
        // });
         
         
          
          
        }
    
    
    
    function click1(){
    
    }
    
    
    </script> 

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1r0WGwV_MRE_l1hCBvxGhBg5C0fVmgzQ&callback=myMap"></script>
    

    </body>
</html>
