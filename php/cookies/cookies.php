<?php
$cookie_name = "studname";
$cookie_value = "Baharth";
setcookie($cookie_name, $cookie_value, time() + 86400 * 30);
$cookie_name = "usn";
$cookie_value = "1BM14CS002";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
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