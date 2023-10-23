<body>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <form action="admin_add_product" method="post">
                <button style="height: 50px; width: 100px; " type="submit" name="Add_btn" value="" class="mt-2 btn-primary btn-sm">Add Products</button>
              </form> 
              </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
            
              <table class="table table-dark">
              <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Visibale</th>
    </tr>
  </thead>  
</div>
</div> 
          </div>
 <tbody>         
          <?php
          if(isset($fetch))
          {
             foreach ($fetch as $value)
            { ?>
                <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->price ?></td>
            <td><?php echo $value->discription ?></td>
            <td><?php echo $value->quantity ?></td>
            <td><img src="<?php echo $value->image ?>" alt="No Profile Picture Found" height="100px" width="500px"  ></td>
            <td><?php echo $value->visibal ?></td> 
            <td>


              <form action="update_product" method="post">
                <button class="btn-primary btn-sm" name="update_btn" value="<?php echo $value->id; ?>">Update</button>
              </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>
          <?php } 
                    }
                    else 
                    {
                      echo "<tr>
                      <th style='text-align:center;' colspan=8>No Data Found</th>
                      </tr>";
                    }
                  
 ?>
 </tbody>
                  </div>
  </body>