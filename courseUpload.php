<?php session_start();
require 'includes/common.php';


$courseName=$_POST['courseName'];
$coursePrice=$_POST['coursePrice'];
$courseIntroduction=$_POST['courseIntroduction'];
$courseDescription=$_POST['courseDescription'];
$chapter1Description=$_POST['chapter1Description'];
$chapter2Description=$_POST['chapter2Description'];

$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$temp = explode(".", $_FILES["imageUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imageUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
) {
    //echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], "uploads/images/" . $newfilename)) {
        //echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}


/////////////////image upload ended//////////////////////////




$target_file1 = $target_dir . basename($_FILES["video1"]["name"]);
$uploadOk1 = 1;
$videoFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

$temp1 = explode(".", $_FILES["video1"]["name"]);
$newfilename1 = round(microtime(true)) . '.' . end($temp1);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check1 = filesize($_FILES["video1"]["tmp_name"]);
    if($check1 !== false) {
        echo "File is an image - " . $check1["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file1)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["video1"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($videoFileType1 != "mp4" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["video1"]["tmp_name"], "uploads/videos/" . $newfilename1)) {
        echo "The file ". basename( $_FILES["video1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
/////////////////video1 upload ended//////////////////////////



$target_file2 = $target_dir . basename($_FILES["video2"]["name"]);
$uploadOk2 = 1;
$videoFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

$temp2 = explode(".", $_FILES["video2"]["name"]);
$newfilename2 = round(microtime(true))*2 . '.' . end($temp2);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check2 = filesize($_FILES["video2"]["tmp_name"]);
    if($check2 !== false) {
        echo "File is an image - " . $check2["mime"] . ".";
        $uploadOk2 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk2 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file2)) {
    echo "Sorry, file already exists.";
    $uploadOk2 = 0;
}
// Check file size
if ($_FILES["video2"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk2 = 0;
}
// Allow certain file formats
if($videoFileType2 != "mp4" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["video2"]["tmp_name"], "uploads/videos/" . $newfilename2)) {
        echo "The file ". basename( $_FILES["video2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
/////////////////video1 upload ended//////////////////////////

$insert_query="Insert into items(name,price,img,teacher_id,introduction,description,chapter1b,chapter1a,chapter2b,chapter2a) values ('".$courseName."',".$coursePrice.",'uploads/images/".$newfilename."',".$_SESSION['user_id'].",'".$courseIntroduction."','".$courseDescription."','".$chapter1Description."','uploads/videos/".$newfilename1."','".$chapter2Description."','uploads/videos/".$newfilename2."');";
    mysqli_query($con,$insert_query) or die(mysqli_error($con));

    header('location:courseDisplay.php');
?>