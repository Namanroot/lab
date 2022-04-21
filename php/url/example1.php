

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Passing PHP variable Using Get</title>
</head>
<body>
    <form method="POST" >
    LastName : <input type="text" name="lname" ><br/>
    FirstName : <input type="text" name="fname" ><br/>
    <input type="submit" name="btnok" value="submit" >
    </form>

    <?php 
        if(isset($_POST['btnok'])){
            $name1=$_POST['lname'];
            $name2=$_POST['fname'];
            header('location:sample.php?lname='.$name2.'&&fname='.$name1);
        }
     ?>
   
    
</body>
</html>