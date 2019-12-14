<?php 
    include_once'connect.php';
    $id = $_GET['id'];
    
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
    <title>Obituary Report | Detail Necrology</title>

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
                                <?php
                                $query="SELECT * FROM virtual_necrology vn INNER JOIN user_account ua ON vn.user_id = ua.user_id WHERE vn.necrology_id=".$id.";";
                                $result= mysqli_query($connect, $query);
                                
                                while($rows = mysqli_fetch_array($result)){
                                    ?>
                                <h3 class="title-5 m-b-35">data Necrology:  <?php echo $rows['nec_name'];?></h3>
                                <p><b>Owner: </b> <?php echo '<a href="detail_userAccount.php?id='.$rows['user_id'].'">'.$rows['username'].'</a>'?></p>
                                <p><b>Address: </b> <?php echo $rows['address'];?></p>
                                <p><b>Description: </b> <?php echo $rows['description'];?></p>
                                    <?php
                                }
                                ?>
                                <br>
                                <h4>Tabel Necrology</h4>
                                <br>
                                <!--tabel obituary di dalam necrology yg dipilih-->
                                <?php
                                    //untuk SQLnya
                                    $query="SELECT *
                                    FROM obituary ob 
                                    INNER JOIN necrology_obituary n_o 
                                    ON ob.obituary_id = n_o.obituary_id 
                                    INNER JOIN virtual_necrology vn 
                                    ON vn.necrology_id = n_o.necrology_id  
                                    WHERE vn.necrology_id=".$id.";";
                                    $result= mysqli_query($connect, $query);?>
                                <table class="table table-borderless table-data3" >
                                    <thead>
                                            <tr>
                                                <th>fullname</th>
                                                <th>death_date</th>
                                                <th>description</th>
                                                <th>last_edited_date</th>
                                            </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo '<a href="detail_obituary.php?id='.$rows['obituary_id'].'">'.$rows['fullname'].''?></td>
                                            <td><?php echo $rows['death_date'];?></td>
                                            <td><?php echo $rows['biography'];?></td>
                                            <td><?php echo $rows['last_edited'];?></td>
                                        </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                                <!-- END DATA TABLE -->
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
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