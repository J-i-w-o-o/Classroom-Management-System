<?php   
if(isset($_POST['upload'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $filetmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png','gif');
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if ($fileSize < 512000 ) {
                $res = $con->query("SELECT status FROM profileimg WHERE school_id='$school_id'");
                $row = $res->fetch_assoc();
                $status = $row['status'];
                if($status == 0){
                    $filename = "../uploads/profile".$school_id."*";
                    $fileinfo = glob($filename);
                    $fileext = explode(".", $fileinfo[0]);
                    $fileactualext = $fileext[3];

                    $file = "../uploads/profile".$school_id.".".$fileactualext;

                    if(unlink($file)){
                        // WAS IMG DELETED
                    } else {
                        // WAS NOT DELETED
                    }

                    $sql = "UPDATE profileimg SET status=1 WHERE school_id='$school_id';";
                    mysqli_query($con, $sql);
                } 
                //Upload new file
                $fileNameNew = "profile".$school_id.".".$fileActualExt;
                $fileDestination = '../uploads/'."$fileNameNew";
                move_uploaded_file($filetmpName,$fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE school_id='$school_id';";
                $res = $con->query($sql);

            }else {
                echo "Exceeded File size limit!";
            }
        }else{
            echo "Error Uploading File!";
        }
    } else {
        echo "Error file type!";
    }
}
?>