<!-- B. Demonstrate Insert query with php and Sql. 
    Take the input from the user and that should be inserted 
    in the database name created “LabTest” and table name “Student”. -->
<?php
$name=$_POST['name'];
$email=$_POST['email'];

$serverName = "localhost";
$username = "nandan";
$password = "123";
$databasename = "labtest";
$conn = mysqli_connect($serverName, $username, $password, $databasename);


$query= "INSERT INTO student (name,email ) VALUES('$name', '$email')";


if(isset($_POST['submit'])){

if( mysqli_query($conn, $query)){
    echo "data has been inserted";
}
else{
    echo "error". die(mysqli_error($conn));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Name : <input type="text" name="name" ><br><br>
        Email : <input type="text" name="email" >
        <input type="submit" name="submit" value="Submit" id="">
    </form>
    
</body>
</html>


