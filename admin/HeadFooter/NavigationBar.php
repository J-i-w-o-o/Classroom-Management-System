<body>
    <!--wrapper start-->
    <div class="x--wrapper">
        <div class="scrollbar-deep-purple">
            <!--header menu start-->
            <div class="x--header">

                <div class="x--header-menu">
                    <div class="x--title"><span id="orange" class="text-orange">UCC</span> Classroom</div>
                    <div class="x--sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fas fa-user"></i></a></li>
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
                        <p><?php echo $first_name." ".$last_name; ?></p>
                    </center>

                    <li class="x--item">
                        <a href="dashboard.php" class="x--menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="x--item" id="profile">
                        <a href="#profile" class="x--menu-btn">
                            <i class="fas fa-user-circle"></i><span>Manage Users <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="usermanage.php"><i class="fas fa-image"></i><span>Add User</span></a>
                            <a href="update_delete.php"><i class="fas fa-address-card"></i><span>Update/Delete User</span></a>
                            <a href="#"><i class="fas fa-address-card"></i><span>Archive User</span></a>
                        </div>
                    </li>
                    <li class="x--item" id="messages">
                        <a href="#messages" class="x--menu-btn">
                            <i class="fas fa-envelope"></i><span>Manage Class <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                            <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                        </div>
                    </li>
                    <li class="x--item" id="settings">
                        <a href="#settings" class="x--menu-btn">
                            <i class="fas fa-cog"></i><span>Manage files <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="x--sub-menu">
                            <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                            <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                        </div>
                    </li>
                    <li class="x--item">
                        <a href="#" class="x--menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                    <li class="x--item">
                        <a href="../Components/logout.php" class="x--menu-btn">
                            <i class="fas fa-power-off"></i><span>Logout</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->

            <!--main container end-->