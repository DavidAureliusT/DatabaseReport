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
                        <li>
                            <a href="daftar_userAccount.php">
                                <i class="fas fa-table"></i>Table User Account</a>
                        </li>
                        <li class="active">
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
                                $query="SELECT *,ob.obituary_id AS 'id_obituary' FROM obituary ob INNER JOIN user_account ua ON ob.user_id = ua.user_id INNER JOIN gender g ON ob.gender_id = g.gender_id WHERE ob.obituary_id=".$id.";";  
                                $result= mysqli_query($connect, $query);
                                while($rows = mysqli_fetch_array($result)){
                                    ?>
                                <h3 class="title-5 m-b-35">data <?php echo $rows['fullname'];?></h3>
                                <p><b>Obituary_id:</b> <?php echo $rows['id_obituary'];?></p>
                                <p><b>Gender:</b> <?php 
                                                    if($rows['gender_type'] == "Male")
                                                    {
                                                        ?>
                                                        <span class="status--process"><?php echo $rows['gender_type'];?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span class="status--denied"><?php echo $rows['gender_type'];?></span>
                                                        <?php
                                                    };?>
                                </p>
                                <p><b>biography:</b> <?php echo $rows['biography'];?></p>
                                <p><b>fullname:</b> <?php echo $rows['fullname'];?></p>
                                <p><b>birthdate:</b> <?php echo $rows['birthdate'];?></p>
                                <p><b>region:</b> <?php echo $rows['region'];?></p>
                                <p><b>death_date:</b> <?php echo $rows['death_date'];?></p>
                                <p><b>death_location:</b> <?php echo $rows['death_location'];?></p>
                                <p><b>last_edited:</b> <?php echo $rows['last_edited'];?></p>
                                    <?php
                                }
                                ?>
                                <br>
                                <h4>Tabel Donasi</h4>
                                <br>
                                <!--tabel necrology milik user-->
                                <?php
                                    //untuk SQLnya
                                 $query="SELECT * , SUM(f.donation) AS total_donasi 
                                    FROM flower f 
                                    INNER JOIN obituary ob 
                                    ON f.obituary_id = ob.obituary_id 
                                    WHERE f.obituary_id=".$id."";
                                    $result= mysqli_query($connect, $query);?>
                                <table class="table table-borderless table-data3" >
                                    <thead>
                                        <tr>
                                            
                                            <th>date_upload</th>
                                            <th>donaton</th>
                                            <th>biography</th>
                                            <th>fullname</th>
                                            <th>birthdate</th>
                                            <th>region</th>
                                            <th>death_date</th>
                                            <th>death_location</th>
                                            <th>last_edited</th>
                                            <th>total_donasi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $rows['date_upload'];?></td>
                                            <td><?php echo $rows['donation'];?></td>
                                            
                                            
                                            <td><?php echo $rows['biography'];?></td>
                                            <td><?php echo $rows['fullname'];?></td>
                                            <td><?php echo $rows['birthdate'];?></td>
                                            <td><?php echo $rows['region'];?></td>
                                            <td><?php echo $rows['death_date'];?></td>
                                            <td><?php echo $rows['death_location'];?></td>
                                            <td><?php echo $rows['last_edited'];?></td>
                                            <td><?php echo $rows['total_donasi'];?></td>
                                        </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>
                                


                                <br>
                                <h4>Tabel Relation</h4>
                                <br>
                                <!--tabel necrology milik user-->
                                <?php
                                    //untuk SQLnya
                                    $query="SELECT relation.user_id,user_account.username,relation_type.relation_type,obituary.obituary_id,relation_type_id FROM relation right join relation_type ON relation.relation_type_id = relation_type.relation_id INNER JOIN obituary ON obituary.obituary_id = relation.obituary_id left join user_account ON user_account.user_id = relation.user_id WHERE relation.obituary_id=".$id.";";
                                    $result= mysqli_query($connect, $query);?>
                                <table class="table table-borderless table-data3" >
                                    <thead>
                                        <tr>
                                            <th>User_id</th>
                                            <th>Username</th>
                                            <th>Relation_type</th>
                                            <th>Obituary_id</th>
                                            <th>Relation_type_id</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['user_id'];?></td>
                                            <td><?php echo $rows['username'];?></td>
                                            <td><?php echo $rows['relation_type'];?></td>
                                            <td><?php echo $rows['obituary_id'];?></td>
                                            <td><?php echo $rows['relation_type_id'];?></td>
                                        </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>







                                <br>
                                <h4>Tabel Rememberer</h4>
                                <br>
                                <!--tabel necrology milik user-->
                                <?php
                                    //untuk SQLnya
                                    $query="SELECT user_account.user_id,rememberer.obituary_id,fullname,count(rmb_id) as total FROM rememberer
                                    left join obituary ON obituary.obituary_id= rememberer.obituary_id 
                                    left join user_account ON user_account.user_id=rememberer.user_id WHERE rememberer.obituary_id=".$id.";";
                                    $result= mysqli_query($connect, $query);?>
                                <table class="table table-borderless table-data3" >
                                    <thead>
                                        <tr>
                                            <th>User_id</th>
                                            <th>obituary_id</th>
                                            <th>fullname</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['user_id'];?></td>
                                            <td><?php echo $rows['obituary_id'];?></td>
                                            <td><?php echo $rows['fullname'];?></td>
                                            <td><?php echo $rows['total'];?></td>
                                        </tr>
                                <?php
                                }
                                ?>
</tbody>
                                </table>




<br>
                                <h4>Tabel Story</h4>
                                <br>
                                <!--tabel necrology milik user-->
                                <?php
                                    //untuk SQLnya
                                    $query="SELECT user_account.user_id,username,story.obituary_id,count(story.user_id)as total from user_account 
                                    left join story on user_account.user_id=story.user_id 
                                    WHERE story.obituary_id=".$id.";";
                                    $result= mysqli_query($connect, $query);?>
                                <table class="table table-borderless table-data3" >
                                    <thead>
                                        <tr>
                                            <th>User_id</th>
                                            <th>Username</th>
                                            <th>Obituary_id</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['user_id'];?></td>
                                            <td><?php echo $rows['username'];?></td>
                                            <td><?php echo $rows['obituary_id'];?></td>
                                            <td><?php echo $rows['total'];?></td>
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