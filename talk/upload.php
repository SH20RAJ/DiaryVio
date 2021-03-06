<?php
include_once '../config.php';
$fileid = uniqid('sd',true);
$fileurl = "uploads/".$fileid;
if(move_uploaded_file($_FILES['myday']['tmp_name'] , $fileurl.".mp3" ))
    { 
    $fileurl ;
    $sql = "INSERT INTO uploads (user , privacy , fileid) value ('".$user."' , 'public' , '".$fileid."' )"; 
    if(mysqli_query($conn , $sql )){
        echo 'File Uploaded !' ;
        header('location:../talk');
    }
    
}


?>