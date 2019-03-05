<?php
$errors=[];

if(isset($_POST["submit"]))
{
    
    $username= trim($_POST["username"]);   
    $email= trim($_POST["email"]);  
    $password= md5(trim($_POST["password"]));   
    $address= $_POST["address"];   
    $role= $_POST["role"];  

    if ($role === "Select Role") {
        $errors["role"]= "Select a role";
    }
    if (empty($username) or $username>=4) {
        $errors["username"]= "Enter a Unick username";
    }
    if (empty($email)) {
        $errors["email"]= "Enter a valid email";
    }
    if (empty($password) or $password<6) {
        $errors["password"]= "Enter a valid password";
    }
    if (empty($address)) {
        $errors["address"]= "Enter a valid address";
    }







    if (empty($errors)) {

        // Create connection
        $conn = mysqli_connect("localhost", "root","", "rawphp");

        // check connection
        if ($conn->connect_error) {
            die("Connection field : " . $conn->connect_error);
        }


        // image upload
        if ($_FILES["image"]["tmp_name"]){
            $image=$_FILES["image"];
            $file_data = explode(".", $image["name"]);
            $file_ext = end($file_data);
            $file_name = uniqid("pp_", true).".".$file_ext;
            $upload= move_uploaded_file($image["tmp_name"], "../images/".$file_name);
            $file_path = "images/".$file_name;
        }else {
            $file_path = "images/default.jpg";
        }
       


            $sql= "INSERT INTO user (username, email, password, address, image, role) values ('$username', '$email', '$password', '$address', '$file_path', '$role')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo "Data inserted successfully";

            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
       
        // close connection
        mysqli_close($conn);

        header("location: ../view/login.php?txt=Registration successful");

    }

}
?>
<h2><?php 
    if (!empty($errors)) {
        foreach ($errors as $key => $error) {
            echo $error."<br>";
        }
    }
    
?></h2>