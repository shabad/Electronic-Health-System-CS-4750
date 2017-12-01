
<!DOCTYPE html>
<?php
  include "db.php";
  $id = $_GET["id"];

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Profile Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-5" />Markarn Doe</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="index.php" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="checkin.php" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Check In Patient</a>
                        </li>
                        <li>
                            <a href="doctors.php" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Doctors</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <!-- <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3> -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-block">

                              <?php
                              $result = $mysqli->query("select p.Patient_ID, Name, Address, DOB, Phone, Gender, Blood_Group, Days_Stayed, Companion_Name, Companion_Phone, Relationship FROM Patient as p
                                left outer join Accompanied_by as a on p.Patient_ID = a.Patient_ID WHERE p.Patient_ID = $id");
                                $row = $result->fetch_assoc();
                                $days = $row["Days_Stayed"];


                              ?>
                              <h3 class="text-themecolor m-b-0 m-t-0">Information</h3>
                              <br>
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Name"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Phone</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Phone"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Address"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">DOB</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["DOB"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gender</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Gender"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Blood Group</label>
                                        <div class="col-sm-12">
                                          <?php

                                          echo $row["Blood_Group"];

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Days Stayed</label>
                                        <div class="col-sm-12">
                                          <?php

                                          echo $row["Days_Stayed"];

                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Accompanied by</label>
                                        <div class="col-sm-12">
                                          <?php

                                          echo $row["Companion_Name"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Companion Phone</label>
                                        <div class="col-sm-12">
                                          <?php

                                          echo $row["Companion_Phone"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-block">
                              <h3 class="text-themecolor m-b-0 m-t-0">Tests</h3>
                              <br>
                              <?php
                              $result = $mysqli->query("select `Patient_ID`, `Test`, Test_Date, `Cost`, Doctors.Name as Doctor_Name FROM Tests, Doctors
 WHERE Tests.Patient_ID = $id AND Tests.Doctor_ID = Doctors.Doctor_ID");
                                $totaltestcost = 0;
                                while($row = $result->fetch_assoc()) {
                              ?>
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Test Name</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Test"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Test Date</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Test_Date"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Doctor</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Doctor_Name"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Cost</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Cost"];
                                          $totaltestcost +=$row["Cost"];

                                            ?>
                                        </div>
                                    </div>

                                </form>
                                <?php
                                  echo '<hr>';
                              } ?>
                              Total Test Cost:
                              <?php
                              echo $totaltestcost;


                               ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-block">
                              <h3 class="text-themecolor m-b-0 m-t-0">Procedures</h3>
                              <br>
                              <?php
                              $result = $mysqli->query("SELECT Procedure.Name, Procedure.Cost, Doctors.Name as Doctor_Name FROM `Procedure`, Doctors WHERE Procedure.Patient_ID = $id AND Doctors.Doctor_ID = Procedure.Doctor_ID");
                              $totalprocedurecost = 0;
                                while($row = $result->fetch_assoc()) {

                              ?>
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Procedure Name</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Name"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Doctor Name</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Doctor_Name"];

                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Cost</label>
                                        <div class="col-md-12">
                                          <?php

                                          echo $row["Cost"];
                                          $totalprocedurecost += $row["Cost"];

                                            ?>
                                        </div>
                                    </div>


                                </form>
                                <?php
                                  echo '<hr>';
                              }
                              ?>
                              Total Procedure Cost:
                              <?php
                              echo $totalprocedurecost;
                              ?>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                  <div class="col-lg-6 col-md-6">
                      <div class="card">
                          <div class="card-block">
                            <h3 class="text-themecolor m-b-0 m-t-0">Add Test</h3>
                            <br>



                              <form class="form-horizontal form-material" action = "tests.php" method="POST">
                                      <?php
                                      echo '<input class="form-control" type ="hidden" name="id" value="'.$id.'">';

                                      ?>
                                  <div class="form-group">
                                      <label class="col-md-12">Test Name</label>
                                      <div class="col-md-12">
                                        <input class="form-control" type="text" name = "testname">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-md-12">Test Date</label>
                                      <div class="col-md-12">
                                        <input class="form-control" type="text" name = "testdate">
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <label class="col-md-12">Doctor</label>
                                      <div class="col-md-12">
                                        <input class="form-control" type="text" name = "testdoctor">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-md-12">Cost</label>
                                      <div class="col-md-12">
                                        <input class="form-control" type="text" name = "cost">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-sm-12">
                                          <button class="btn btn-success" name="addtest">Add Test</button>
                                      </div>
                                  </div>




                              </form>

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="card">
                          <div class="card-block">
                            <h3 class="text-themecolor m-b-0 m-t-0">Add Procedure</h3>
                            <br>

                              <form class="form-horizontal form-material" action = "procedures.php" method="POST">
                                <?php
                                echo '<input class="form-control" type ="hidden" name="id" value="'.$id.'">';

                                ?>
                                <div class="form-group">
                                    <label class="col-md-12">Procedure Name</label>
                                    <div class="col-md-12">
                                      <input class="form-control" type="text" name="procedurename">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Doctor</label>
                                    <div class="col-md-12">
                                      <input class="form-control" type="text" name="doctorid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Cost</label>
                                    <div class="col-md-12">
                                      <input class="form-control" type="text" name="cost">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" name="addprocedure">Add Procedure</button>
                                    </div>
                                </div>


                              </form>

                          </div>
                      </div>
                  </div>
                </div>







                <div class="row">

                  <div class="col-lg-6 col-md-6">
                      <div class="card">
                          <div class="card-block">
                            <h3 class="text-themecolor m-b-0 m-t-0">Room Rent</h3>
                            <br>
                            <?php

                              $result = $mysqli->query("SELECT Rent AS rent FROM `Room`");
                              $row = $result->fetch_assoc();
                              $totalrent = $days*$row["rent"];
                            ?>
                              <h4 class="card-title">Total Rent</h4>
                              <div class="text-right">
                                  <h2 class="font-light m-b-0"> $<?php echo $days*$row["rent"] ?></h2>
                                  <span class="text-muted">Total Rent for <?php echo $days; ?> Days</span>
                              </div>

                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                      <div class="card">
                          <div class="card-block">
                            <h3 class="text-themecolor m-b-0 m-t-0">Total Charged</h3>
                            <br>
                              <h4 class="card-title">Total Charged</h4>
                              <div class="text-right">
                                  <h2 class="font-light m-b-0"> $<?php echo $totaltestcost + $totalprocedurecost + $totalrent; ?></h2>

                              </div>

                          </div>
                      </div>
                  </div>


                </div>



                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2017 Shabad Sobti & Dhruv Jain
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
