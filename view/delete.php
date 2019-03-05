<?php

$conn= mysqli_connect("localhost", "root","", "rawphp");
if (!$conn) {
  die("errror". mysqli_connect_error());
}

$id= $_GET["id"];
if (! empty($id)) {

    $sql= "DELETE FROM products WHERE id= $id";
    $query_results= mysqli_query($conn , $sql);

    $sql = "SELECT * FROM products WHERE id='$id'";
          $query= mysqli_query($conn, $sql);
          $q_result= mysqli_fetch_assoc($query);
          if ( file_exists($q_result["image"])) {
            unlink($q_result["image"]);
            
          }
        if ($query_results) {
            header("location:products.php");
        }
}





mysqli_close($conn);