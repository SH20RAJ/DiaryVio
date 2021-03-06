<?php
include 'config.php' ;

$sql = " SELECT * FROM uploads";

$result = mysqli_query($conn , $sql);
//$row = mysqli_fetch_assoc($result) ;

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
    echo "<a href='show/".$row['fileid']."'>".$row['user']."".$row['timestamp']." </a> <Br>";
    
  }
 } else {
 echo "0 results found !!!!! ";
  }

?>