<center><h1>REGISTRATION SUCCESSFULL<h1>
    <P1>click below to go to login page</p1></br>
    <a href="login.php" type="submit">login
</center>
<?php 
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "test";

    $conn = mysqli_connect($db_hostname , $db_username ,$db_password ,$db_name);
    if (!$conn){
        echo "connection failer: ".mysqli_connect_errno();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user1 (name, email , username , password) VALUES ('$name','$email', '$username','$password')";

    $result = mysqli_query($conn,$sql);
    if (!$result){
        echo "error: ".mysqli_error ($conn);
        exit;
    }

    
    mysqli_close ($conn);