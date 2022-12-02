<?php
    require('includes/Header.php');
?>

<div class="x--main-container">    
    
    <!-- Modal Imports -->
    <?php 
      require './Modals/Add/usersStatistics.php';// Users Statistics Modal Pop-up
    ?>

    <!----CSS3---->
    <link rel="stylesheet" href="../main-css/dashboard.css">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<!--Google Material Icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!--Google Material Icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    
<div class="wrapper">
        <div class="main-content">
			
            <!-- Row of Boxes Start -->
			<div class="row">

                <!-- 1st Box: Total Number of Registered Users -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-warning">
                                <i class="fa-solid fa-users fs-2 align-top"></i>
                            </div>
                        </div>

                        <div class="card-content text-end">
                            <p class="category"><strong>Users</strong></p>
                            <h3 class="card-title">

                                <?php 
                                    require 'databaseDashboard.php';

                                    $queryStudents = "SELECT id FROM students ORDER BY id";
                                    $queryInstructors = "SELECT id FROM instructors ORDER BY id";
                                    $queryAdmins = "SELECT id FROM admins ORDER BY id";

                                    $query_runStudents = mysqli_query($connection, $queryStudents);
                                    $query_runInstructors = mysqli_query($connection, $queryInstructors);
                                    $query_runAdmins = mysqli_query($connection, $queryAdmins);

                                    $countStudents = mysqli_num_rows($query_runStudents);
                                    $countInstructors = mysqli_num_rows($query_runInstructors);
                                    $countAdmins = mysqli_num_rows($query_runAdmins);

                                    echo $countStudents + $countInstructors + $countAdmins ;
                                ?>       

                            </h3>
                        </div>

                        <div class="card-footer text-center">
                            <div class="stats" data-toggle="modal" data-target="#usersStatistics">
                                <i class="material-icons text-info">info</i>
                                <a href="#">See More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2nd Box: Total Number of Instructors  -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-warning">
                                <i class="fa-solid fa-chalkboard-user fs-2 align-top"></i>
                            </div>
                        </div>
                        <div class="card-content text-end">
                            <p class="category"><strong>Instructors</strong></p>
                            <h3 class="card-title">

                                <?php 
                                    require 'databaseDashboard.php';
                                    $query = "SELECT id FROM instructors ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo $row;
                                ?>       

                            </h3>
                        </div>
                        <div class="card-footer text-center">
                            <div class="stats">
                                <i class="material-icons text-info">info</i>
                                <a href="InstructorManage.php">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 3rd Box: Total Number of Students  --> 
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-warning fs-2">
                                <div class="userStudent"><i class="fa-solid fa-user-large align-top"></i></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong>Students</strong></p>
                            <h3 class="card-title">
                                <?php 
                                    require 'databaseDashboard.php';
                                    $query = "SELECT id FROM students ORDER BY id";
                                    $query_run = mysqli_query($connection, $query);
                                    $row = mysqli_num_rows($query_run);
                                    echo $row;
                                ?>       
                            </h3>
                        </div>
                        <div class="card-footer text-center">
                            <div class="stats">
                                <i class="material-icons text-info">info</i>
                                <a href="studentManage.php">See More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4th Box: Total Number of Courses  -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header">
                            <div class="icon icon-warning fs-2">
                                <i class="fa-sharp fa-solid fa-graduation-cap align-top"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="category"><strong>Courses</strong></p>
                            <h3 class="card-title">38</h3>
                        </div>
                        <div class="card-footer text-center">
                            <div class="stats">
                                <i class="material-icons text-info">info</i>
                                <a href="#">See More</a>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Row of Boxes End -->
            </div>
					
            <!-- Data Tables & Calendar of Activities Start -->
            <div class="row">

                <!-- Data Tables Start -->
                <div class="col-lg-7 col-md-12">

                    <div class="card" style="min-height: 485px">

                        <div class="card-header card-header-text text-center" id="dataTables">
                            <form method="post">

                                <input type="submit" name="studentsButtonShow" value="Students"/>
                                <input type="submit" name="instructorsButtonShow" value="Instructors"/>
                                <input type="submit" name="adminsButtonShow" value="Admins"/>

                            </form>
                            <!-- <a href="#" onclick="students();" class="dataTables btn-lg active" role="button" aria-pressed="true">Students</a>
                            <a onclick="instructors()" href="#" class="dataTables btn-lg" role="button" aria-pressed="true">Instructors</a>
                            <a onclick="courses()" href="#" class="dataTables btn-lg" role="button" aria-pressed="true">Admins</a>
                            <a onclick="subjects()" href="#" class="dataTables btn-lg" role="button" aria-pressed="true">Subjects</a> -->
                        </div>

                            <div class="card-content table-responsive">
                                <?php
                                    // $studentsPreview = file_get_contents('studentsButtonShow.php');
                                    // echo $studentsPreview;
                                    if(isset($_POST['studentsButtonShow'])) {
                                        $studentsPreview = file_get_contents('studentsButtonShow.php');
                                        echo $studentsPreview;
                                    }
                                    if(isset($_POST['instructorsButtonShow'])) {
                                        $instructorsPreview = file_get_contents('instructorsButtonShow.php');
                                        echo $instructorsPreview;
                                    }
                                    if(isset($_POST['adminsButtonShow'])) {
                                        $adminsPreview = file_get_contents('adminsButtonShow.php');
                                        echo $adminsPreview;
                                    }
                                ?>

                            </div>
                        
                    </div>
                
                <!-- Data Tables End -->
                </div>
            
                <!-- Calendar of Activities Start -->
                <div class="col-lg-5 col-md-12">

                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">For Lease (Wanted Poster)</h4>
                                </div>

                                <div class="card-content">
                                    <div class="streamline">
                                        


                                    </div>
                                </div>
                            </div>

                <!-- Calendar of Activities End -->
                </div>

            <!-- Data Tables & Calendar of Activities End -->
            </div>
					
        </div>
</div>
  
    <script type="text/javascript">

    $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });
                
                $('.more-button,.body-overlay').on('click', function () {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });
                
            });

    // Add active class to the current button (highlight it)
    var header = document.getElementById("dataTables");
    var btns = header.getElementsByClassName("dataTables");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }

    </script>

</body>
</html>

</div>

<?php
    require('includes/Footer.php');
?>