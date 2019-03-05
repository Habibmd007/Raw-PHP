<?php
    
    $conn= mysqli_connect("localhost", "root", "", "rawphp");

    if (!$conn) {
        die("Error". mysqli_connect_errno());
    }

    if (!empty($_FILES["image"]["name"])) {

        $image=$_FILES["image"];
        $data = explode(".", $image["name"]);
        $image_name = uniqid("pro_",true).".". end($data); 
        $file= $image["tmp_name"];
        move_uploaded_file($file, "../images/".$image_name);
        $image_url="../images/".$image_name;
        
    }else {
        var_dump($_FILES["image"]);
        die("------------------------------------------------------image Needed");
    }

    $name= $_POST["name"]; 
    $short_disc= $_POST["short_disc"]; 
    $long_disc= $_POST["long_disc"]; 
    $brand= $_POST["brand"]; 
    $cat= $_POST["cat"]; 
    $slug= str_replace(' ', '', $_POST["name"]);

    $sql= "INSERT INTO products(name, image, short_disc, long_disc, brand, cat, slug) VALUES('$name', '$image_url', '$short_disc', '$long_disc','$brand', '$cat', '$slug')";
    $query= mysqli_query($conn, $sql);

    if ($query) {
        header("location:../view/products.php");

    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    

// close connection
mysqli_close($conn);



?>