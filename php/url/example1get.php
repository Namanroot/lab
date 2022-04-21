<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET Variables From URL</title>
</head>
<body>
    <?php 
    $lname=$_GET['lname'];
    $fname=$_GET['fname'];
    echo 'Fuck '.$lname.''.$fname;
     ?>
    
</body>
</html>