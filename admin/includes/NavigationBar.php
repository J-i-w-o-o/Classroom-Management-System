<body>
    <!--wrapper start-->
    <div class="x--wrapper">
        <div class="scrollbar-deep-purple">
            <!--header menu start-->
            <div class="x--header">

                <div class="x--header-menu">
                    <div class="x--title"> <a href="../admin/dashboard.php"><span id="orange" class="text-orange">UCC </span>Classroom</div></a>
                    <div class="x--sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="Profile.php"><i class="fas fa-user"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->

            <div class="x--sidebar">

                <div class="x--sidebar-menu">

                    <center class=x--profile>

                        <?php
                        $sqlImg = "SELECT * FROM profileimg WHERE school_id='$school_id'";
                        $resultImg = $con->query($sqlImg);
                        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
                            if ($rowImg['status'] == 0) {
                                $filename = "../uploads/profile" . $school_id . "*";
                                $fileinfo = glob($filename);
                                $fileext = explode(".", $fileinfo[0]);
                                $fileactualext = $fileext[3];
                                echo "<img src='../uploads/profile" . $school_id . ".$fileactualext?" . mt_rand() . "'>";
                            } else {
                                echo "<img src='../uploads/profiledefault.jpg'>";
                            }
                        }
                        ?>
                        <p class="text-primary bg-warning"><?php echo $school_id; ?></p>
                        <p><?php echo $first_name . " " . $last_name; ?></p>
                    </center>

                    <li class="x--item">
                        <a href="dashboard.php" class="x--menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="x--item" id="profile">
                        <a href="#profile" class="x--menu-btn">
                            <i class="fas fa-user-circle"></i><span>Manage Users&nbsp;&nbsp;&nbsp;<i class="fa-sharp fa-solid fa-caret-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="studentManage.php"><i class="fa-solid fa-user-gear"></i><span>Student</span></a>
                            <a href="instructorManage.php"><i class="fa-solid fa-user-gear"></i><span>Teacher</span></a>
                            <a href="adminManage.php"><i class="fa-solid fa-user-gear"></i><span>Admin</span></a>
                        </div>
                    </li>
                    <li class="x--item" id="messages">
                        <a href="#messages" class="x--menu-btn">
                            <i class="fa-solid fa-chalkboard-user"></i><span>Manage Class &nbsp;&nbsp;<i class="fa-sharp fa-solid fa-caret-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="sectionManage.php"><i class="fa-solid fa-user-group"></i><span>Manage Section</span></a>
                            <a href="subjectManage.php"><i class="fa-solid fa-user-group"></i><span>Manage Subjects</span></a>
                        </div>
                    </li>
                    <li class="x--item" id="settings">
                        <a href="#settings" class="x--menu-btn">
                            <i class="fa-regular fa-folder-open"></i><span>Manage Files &nbsp;&nbsp;&nbsp;<i class="fa-sharp fa-solid fa-caret-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="#"><i class="fa-solid fa-eye"></i><span>View files</span></a>
                            <a href="#"><i class="fa-sharp fa-solid fa-bars-progress"></i><span>Modify Files</span></a>
                        </div>
                    </li>
                    <li class="x--item">
                        <a href="aboutUs.php" class="x--menu-btn">
                            <i class="fas fa-info-circle"></i><span>About Us</span>
                        </a>
                    </li>
                    <li class="x--item">
                        <?php

                        if (empty($email) || empty($phone)) {
                            $toggle = 'visible';
                        ?>
                            <a href="Profile.php" class="x--menu-btn">
                            <?php
                        } else {
                            $toggle = 'hidden';
                            ?>
                                <a href="../Components/logout.php" class="x--menu-btn">
                                <?php
                            } ?>
                                <i class="fas fa-power-off"></i><span>Logout</span>
                                </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->