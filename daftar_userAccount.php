<?php 
    include_once'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Obituary Report | Daftar User Account</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
    </div>
    <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="daftar_userAccount.php">
                                <i class="fas fa-table"></i>Table User Account</a>
                        </li>
                        <li>
                            <a href="daftar_obituary.php">
                                <i class="fas fa-table"></i>Table Obituary</a>
                        </li>
                        <li>
                            <a href="daftar_necrology.php">
                                <i class="fas fa-table"></i>Table Necrology</a>
                        </li>
                        <li>
                            <a href="daftar_relasi.php">
                                <i class="fas fa-table"></i>Table Relation</a>
                        </li>
                        <li>
                            <a href="active_user.php">
                                <i class="fas fa-table"></i>Table Active User</a>
                        </li>
                        <li>
                            <a href="daftar_necrology_user.php">
                                <i class="fas fa-table"></i>Table Necrology User</a>
                        </li>
                        <li>
                            <a href="daftar_necrology.php">
                                <i class="fas fa-table"></i>Table Relation</a>
                        </li>
                        <li>
                            <a href="daftar_obituary_in_necrology.php">
                                <i class="fas fa-table"></i>Table Obituary in Necrology</a>
                        </li>
                        <!--from Nick-->
                        <li>
                            <a href="flower_obituary.php">
                                <i class="fas fa-table"></i>Table Donasi</a>
                        </li>
                        <li>
                            <a href="not_active_user.php">
                                <i class="fas fa-table"></i>Table Not Active User</a>
                        </li>
                        <li >
                            <a href="jumlah_story.php">
                                <i class="fas fa-table"></i>Table Jumlah Story User</a>
                        </li>
                        <li>
                            <a href="rememberer.php">
                                <i class="fas fa-table"></i>Table rememberer</a>
                        </li>
                        <li>
                        <a href="jumlah_foto.php">
                                <i class="fas fa-table"></i>Foto User</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!--MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data User Account</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <form action="daftar_userAccount.php" method="POST">
                                        <select name="gender" id="">
                                            <option value="all">All gender</option>
                                            <?php
                                            //query for filter by gender
                                            $query="SELECT g.gender_type FROM gender g;";
                                            $result= mysqli_query($connect, $query);
                                            while($rows = mysqli_fetch_array($result))
                                            {?>
                                            <option value="<?php echo $rows['gender_type']?>"><?php echo $rows['gender_type']?></option>
                                            <?php
                                            }?>
                                        </select>
                                        <select name="status" id="">
                                            <option value="all">All status</option>
                                            <option value=0>Member</option>
                                            <option value=1>Guest</option>
                                        </select>
                                        <input type="submit" name="submit" class="submit"/>
                                    </form>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>obituary_id</th>
                                                <th>username</th>
                                                <th>biography</th>
                                                <th>birthdate</th>
                                                <th>province</th>
                                                <th>photo_profile</th>
                                                <th>isGuest</th>
                                                <th>gender_id</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $filter_gender="";
                                            if(isset($_POST['submit'])){
                                                $filter_gender = $_POST['gender'];
                                                $filter_status = $_POST['status'];
                                                $countCons=0;
                                                $where ="";
                                                $constrain_gender = "";
                                                $constrain_status = "";
                                                $and ="";
                                                if ($filter_gender == "all") {
                                                    $constrain_gender = "";
                                                }else{
                                                    $constrain_gender = " g.gender_type='".$filter_gender."'";
                                                    $countCons++;
                                                }
                                                if ($filter_status == "all") {
                                                    $constrain_status = "";
                                                }else {
                                                    $constrain_status = " ua.isGuest=".$filter_status."";
                                                    $countCons++;
                                                }
                                                if ($countCons==1) {
                                                    $where = " WHERE ";
                                                }else if ($countCons==2) {
                                                    $where = " WHERE ";
                                                    $and = " AND ";
                                                }else{
                                                    $where ="";
                                                    $and ="";
                                                }
                                                //debugging
                                                echo $filter_gender;
                                                echo $filter_status;
                                                echo $countCons;
                                                //query
                                                $query="SELECT * FROM user_account ua INNER JOIN gender g ON ua.gender_id = g.gender_id ".$where. $constrain_gender. $and. $constrain_status.";";
                                                echo $query;
                                            }else {
                                                $query="SELECT * FROM user_account ua INNER JOIN gender g ON ua.gender_id = g.gender_id ;";
                                            };
                                            $result= mysqli_query($connect, $query);
                                            while($rows = mysqli_fetch_array($result))
                                            {
                                                ?>  
                                                <tr class="tr-shadow">
                                                <td>
                                                    <?php echo $rows['obituary_id'];?>
                                                </td>
                                                <td>
                                                    <?php echo '<a href="detail_userAccount.php?id='.$rows['user_id'].'">'.$rows['username'].''?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['biography'];?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['birthdate'];?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['province'];?>
                                                </td>
                                                <td>
                                                    <?php echo $rows['photo_profile'];?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($rows['isGuest'] == 1) {
                                                            echo "GUEST";
                                                        }else {
                                                            echo "MEMBER";
                                                        };
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    if($rows['gender_id'] == 1)
                                                    {
                                                        ?>
                                                        <span class="status--process"><?php echo $rows['gender_type'];?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span class="status--denied"><?php echo $rows['gender_type'];?></span>
                                                        <?php
                                                    }?>
                                                </td>
                                                
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/ddtf.js"></script>
    <script>
        $('#myTable').ddTableFilter();
    </script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>