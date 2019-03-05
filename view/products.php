<?php 
include("headb.php");

$conn= mysqli_connect("localhost", "root","", "rawphp");
          if (!$conn) {
            die("errror". mysqli_connect_error());
          }
          // read part
          $sql= "SELECT * FROM products";
          $query_results= mysqli_query($conn , $sql);

          mysqli_close($conn);
          
          


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
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
        
            <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> <i class="fa fa-plus" aria-hidden="true"></i> Add</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                    <label>Show 
                    <select name="example1_length" aria-controls="example1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                    </select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                    <label>Search:
                      <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                    </label></div></div></div><div class="row"><div class="col-sm-12">

                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 94px;">ID</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 126px;">Name</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 110px;">Image</th>
                <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 77px;">Short Description</th> -->
                <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 51px;">Long Description</th> -->
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 51px;"> Brand</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 51px;"> Category</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 51px;">Slug </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 51px;">Action </th>
                </tr>
                </thead>


                <tbody>

                <?php foreach ($query_results as $key => $query_result) {?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $query_result["id"] ?></td>
                  <td><?php echo $query_result["name"] ?></td>
                  <td><img src="<?php echo $query_result["image"] ?>" alt="product" height="80"></td>
                  <!-- <td><?php //echo $query_result["short_disc"] ?></td> -->
                  <!-- <td><?php //echo $query_result["long_disc"] ?></td> -->
                  <td><?php echo $query_result["brand"] ?></td>
                  <td><?php echo $query_result["cat"] ?></td>
                  <td><?php echo $query_result["slug"] ?></td>
                  <td>
                  <a name="" id="" class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $query_result["id"]; ?>" role="button"><i class="fa fa-edit" aria-hidden="true"></i></a>
                  <a name="" id="" class="btn btn-primary btn-sm" href="delete.php?id=<?php echo $query_result["id"]; ?>" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
               </tr>  
                <?php } ?>

                </tbody>


                <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1"> ID</th>
                    <th rowspan="1" colspan="1"> Name</th>
                    <th rowspan="1" colspan="1"> Image</th>
                    <!-- <th rowspan="1" colspan="1"> Short Description</th> -->
                    <!-- <th rowspan="1" colspan="1"> Long Description</th> -->
                    <th rowspan="1" colspan="1"> Brand</th>
                    <th rowspan="1" colspan="1"> Category</th>
                    <th rowspan="1" colspan="1"> Slug</th>
                    <th rowspan="1" colspan="1"> Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        <div class="row">
      </div>
      <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div>
        </div>
        </div>
      </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controll/ProductController.php" method="post"  enctype="multipart/form-data">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input name="name" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Brand</label>
            <input name="brand" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category</label>
            <input name="cat" type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input name="image" type="file" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Short Description:</label>
            <textarea name="short_disc" class="form-control" id="message-text" required></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Long Description:</label>
            <textarea name="long_disc" class="form-control" id="message-text"></textarea>
          </div>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  <!-- /.modal -->
  
<?php include("footb.php") ?>
