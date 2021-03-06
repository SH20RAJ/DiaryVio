<html>
 <head>
    <title>
        DiaryVio
    </title>
    <link href="main.css" rel="stylesheet">
</head>


<body>


<div class="container">
    <br><br><br><br>
<?php 
    Include "header2.php";
    header('location:talk');
    ?>  
<br><hr>

 <form action="submitted.php" method="POST">
    NAME : <input type="text" name="name" class="fields">
    
    EMAIL : <input type="email" name="email" class="fields">
    
    <input type="datetime-local" value="Date" name="datetime" class="tbtn">
    <input type="week" name="day">
    
    
    <input type="submit" id="btn" value="POST" class="btn" name="submit">
    
    
    <br>
    <textarea placeholder="StartWritingDiary" name="msgcobn" class="msg"></textarea>
    <br>
    <!-- <input type="text" value = "
    <? php 
    include
    echo $name; ?>
    " name="phpcommon">-->
    <?php 
    Include "footer.php"
    ?>

</div>
</form>


</body>
</html>