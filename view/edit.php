<?php 
ob_start();
    include("headb.php");




    // read part
    if( isset($_GET["id"]))
    {
       
    $id= $_GET["id"];
        // Create connection
        $conn= mysqli_connect("localhost", "root","", "rawphp");

        // check connection
        if (!$conn){
            die("<h2>Connection field : " . mysqli_connect_error()."</h2>");
        }

            $sql= "SELECT * FROM products WHERE id= '$id'";
            $query = mysqli_query($conn, $sql);
            if (!$query) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $product= mysqli_fetch_assoc($query);
        
            // close connection
            mysqli_close($conn);
    }else {

      die("----------------------------------------------------ID not found"); 
      
    }






    // update part
    if(isset($_POST["update"])){
      
        $id= $_POST["id"];
        $name= $_POST["name"]; 
        $short_disc= $_POST["short_disc"]; 
        $long_disc= $_POST["long_disc"]; 
        $brand= $_POST["brand"]; 
        $cat= $_POST["cat"]; 
        $slug= str_replace(' ', '', $_POST["name"]);;
        

        // Create connection
        $conn= mysqli_connect("localhost", "root","", "rawphp");

        // check connection
        if (!$conn){
            die("<h2>Connection field : " . mysqli_connect_error()."</h2>");
        }

        // upload foto
        if (isset($_FILES["image"]["name"])) {

          $id= $_POST["id"];
          $sql = "SELECT * FROM products WHERE id='$id'";
          $query= mysqli_query($conn, $sql);
          $q_result= mysqli_fetch_assoc($query);
          if ( file_exists($q_result["image"])) {
            unlink($q_result["image"]);
            
          }

           $image=$_FILES["image"];
            $data = explode(".", $image["name"]);
            $image_name = uniqid("pro_",true).".". end($data); 
            $file= $image["tmp_name"];
            move_uploaded_file($file, "../images/".$image_name);
            $image_url="../images/".$image_name;
        }
        $sql= "UPDATE  products SET name= '$name', image= '$image_url', short_disc= '$short_disc', long_disc= '$long_disc', brand= '$brand', cat= '$cat', slug= '$slug' WHERE id='$id'";
        $query_last= mysqli_query($conn, $sql);

        if ($query_last) {
          header("location:products.php");
          mysqli_close($conn);
        }
    }

?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          

        <div class="card">
                
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label>Name</label>
                    <input name="id" type="hidden" class="form-control"  value="<?php echo $product["id"];?> ">
                    <input name="name" type="txt" class="form-control"  value=" <?php echo $product["name"];?>">
                  </div>

                  <div class="form-group">
                    <label>Short Descreaption</label>
                    <textarea  class="form-control" name="short_disc" ><?php echo $product["short_disc"];?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Long Descreaption</label>
                    <textarea class="form-control" name="long_disc" ><?php echo $product["long_disc"];?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Brand </label>
                    <input name="brand" type="txt" class="form-control" value=" <?php echo $product["brand"];?>">
                  </div>
                  <div class="form-group">
                    <label>Category </label>
                    <input name="cat" type="txt" class="form-control" value=" <?php echo $product["cat"];?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Slag </label>
                    <input name="slug" type="txt" class="form-control" value=" <?php echo $product["slug"];?>">
                  </div>
                  
                  <div class="form-group">
                    <label>image </label>
                    <input name="image" type="file" class="form-control">
                  </div>
                <div class="card-footer">
                  <button name="update" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

 
  
<?php include("footb.php") ?>
