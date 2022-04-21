<?php
session_start();
$name=$_SESSION['name'];
$usn=$_SESSION['USN'];
?>
<html>


<body>
    <?php
    echo 'Name: '.$name;
    echo "\n";
    echo 'USN: '.$usn;
    ?>
</body>

</html>