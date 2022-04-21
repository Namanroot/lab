<?php
session_start();
$_SESSION['name']="nandan";
$_SESSION['USN']="1BM20IS083";
$_SESSION['name']="nandan";

?>
<html>

<body>
    <?php 
    echo '<a href="out.php">';
    echo 'Click here to see student details';
    echo '</a>';
    ?>
</body>

</html>