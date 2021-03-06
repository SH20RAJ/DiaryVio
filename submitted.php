<html>
<head>
        <title>SUBMITTED</TITLE>
</head>
<link rel="stylesheet" href="main.css">
<body>

<?php
include "header.php";
?>
<div class="container2">
   Name : <div class="fields2"> <?php echo $_POST["name"]; ?></div>

   Email :<div class="fields2"> <?php echo $_POST["email"]; ?></div>

   Date and Time :<div class="fields2"> <?php echo $_POST["datetime"]; ?> </div>
   ID : <div class="fields2"><?php $randomno = rand(1,1000); echo $randomno ; ?></div>
</div>
</div>
    Dairy : <div class="msgcobn2"> <?php echo $_POST["msgcobn"]; ?>
           
           




<?php
$name = $_POST["name"]  ;
$email = $_POST["email"] ;
$day = $_POST["day"] ;
$datetime =  $_POST["datetime"]."
" ;
$msgcobn =  $_POST["msgcobn"] ;
$myfile = fopen("D/$name$randomno.txt", "w") ;

fwrite($myfile, $name) ;
fwrite($myfile, $email);
fwrite($myfile, $datetime);
fwrite($myfile, $msgcobn);
fwrite($myfile, $randomno);
fclose($myfile);
?>


<div class ="linkbox">

        <div class="link" >
<?php echo "http://localhost/DiaryVio/D/$name$randomno.txt"; ?>
</div>

<br>
<a href="./D">
<img src="eye.png" height="80px">
</a>
</div>

<?php 

include('footer.php');


?>
</body>
</html>



