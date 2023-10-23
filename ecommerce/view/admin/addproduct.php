<?php 
// echo "<pre>";
// print_r($response);
// echo "</pre>";
?>
<body>

 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
            </div>
  
  <form action="" method="post" enctype="multipart/form-data">
    <?php #print_r($_REQUEST); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="">
  </div>
  
  
  <div class="form-group">
    <label for="email">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="" required >
  </div>
  
  
  <div class="form-group">
    <label for="password">Discription</label>
    <input type="text" class="form-control" id="discription" name="discription" value="" required >
  </div>

  <div class="form-group">
    <label for="username">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="" required >
  </div>

  <div class="form-group">
    <label for="visibility">visibal</label>
    <input style="margin-left:-560px;" type="checkbox" class="form-control" id="visibal" name="visibal">
  </div>
  
  <div class="form-group">
    <label for="image"></label>
    <input type="file" class="form-control" id="image" name="image" >
  </div>
  
  <div class="form-group mt-3 mb-3">    
    <img src="../" alt="No image found" height="100px" width="100px">
  </div>
  
  <input type="hidden" name="image" id="image" value="">
  
  
  <button type="submit" class="btn btn-primary" name="add_product" value="">Submit</button>
</form>
</body>