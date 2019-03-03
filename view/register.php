<?php include("head.php")?>
 <!--Custom styles-->
 <link rel="stylesheet" type="text/css" href="styles.css">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form class="shadow-lg p-3 mb-5 bg-white rounded" action="../controller/RegisterController.php" method="post" enctype="multipart/form-data">
                   
                    <div class="form-group">
                            <select name="role" id="my-input" class="custom-select">
                                <option>Select Role</option>
                                <option value="user" >User</option>
                                <option value="admin">Admin</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">User Name</label>
                        <input type="text" name="username" class="form-control" id="inputAddress" placeholder="User Name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputfile">Photo</label>
                        <input type="file" name="image" class="form-control" id="inputfile">
                    </div>







                  
                
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>        
<?php include("foot.php")?>
