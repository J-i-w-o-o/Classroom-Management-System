<?php
session_start();
$user       =   $_SESSION['user'];
$school_id  =   $_SESSION['school_id'];
$first_name =   $_SESSION['first_name'];
$last_name  =   $_SESSION['last_name'];
$age        =   $_SESSION['age'];
$address    =   $_SESSION['address'];
$role       =   $_SESSION['role'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./main-css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <!--wrapper start-->
    <div class="wrapper">
        <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title">Coding <span>Snow</span></div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="#"><i class="fas fa-bell"></i></a></li>
                    <li><a href="./Components/logout.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
        <!--header menu end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="1.jpg" alt="">
                    <p><?php echo $first_name; ?></p>
                </center>
                <li class="item">
                    <a href="dashboard.php" class="menu-btn">
                        <i class="fas fa-desktop"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
                        <a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
                    </div>
                </li>
                <li class="item" id="messages">
                    <a href="usermanage.php" class="menu-btn">
                        <i class="fas fa-envelope"></i><span>usermanage <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                        <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                        <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>About</span>
                    </a>
                </li>
            </div>
        </div>
        <!--sidebar end-->
        <!--main container start-->
        <div class="main-container">
            <?php
            require('/admin/usermanage.php');
            ?>
        </div>
        <!--main container end-->
    </div>
    <!--wrapper end-->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".sidebar-btn").click(function() {
                $(".wrapper").toggleClass("collapse");
            });
        });
    </script>

</body>

</html>