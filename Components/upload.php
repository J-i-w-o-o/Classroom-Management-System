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
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 512000 ) {
                $fileNameNew = "profile".$school_id.".".$fileActualExt;
                $fileDestination = '../uploads/'."$fileNameNew";
                move_uploaded_file($filetmpName,$fileDestination);
                $sql = "UPDATE profileimg SET status=0 WHERE school_id='$school_id';";
                $res = $con->query($sql);
                echo "Success!";

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