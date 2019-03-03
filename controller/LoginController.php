<?php

if (isset($_REQUEST["Login"])) {
    $email = $_POST["email"];
    $password =md5( $_POST["password"]);

    // $email= $_REQUEST["email"];
    // $password= $_REQUEST["password"];
    $conn= mysqli_connect("localhost", "root", "", "rawphp");
    if (!$conn) {
        die("Connect to DB error: ". mysqli_connect_error());
    }
    $sql= "SELECT * FROM user WHERE email= '$email' AND password= '$password'";
    $query_result = mysqli_query($conn, $sql);
    $user= mysqli_fetch_assoc($query_result);
    if($user) {
        session_start();
        $_SESSION["role"]= $user["role"];
        $_SESSION["username"]= $user["username"];
            if ($user["role"] === "admin") {
                header("location: ../view/back/lte/index.php?txt=Your are ADMIN in");
            }else {
                header("location: ../view/index.php?txt=Your are USER in");
            }
    } else {
        header("location: ../view/login.php?txt=Wrong email or password");
    }
    
} else {
    # code...
}
