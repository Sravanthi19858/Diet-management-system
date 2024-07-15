<?php
    $db_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "test";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM user1 WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>";
        header("location: homepage.php");
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>