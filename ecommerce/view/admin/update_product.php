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
    
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $response->name;?>">
  </div>
  
  
  <div class="form-group">
    <label for="email">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="<?php echo $response->price;?>"  >
  </div>
  
  
  <div class="form-group">
    <label for="password">Discription</label>
    <input type="text" class="form-control" id="discription" name="discription" value="<?php echo $response->discription;?>"  >
  </div>

  <div class="form-group">
    <label for="username">Quantity</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $response->quantity;?>">
  </div>

  <div class="form-group">
    <label for="visibility">visibal</label>
    <input style="margin-left:-560px;" type="checkbox" class="form-control" value="<?php echo $response->visibal;?>" id="visibal" name="visibal"  >
  </div>
  
  <div class="form-group">
    <label for="image"></label>
    <input type="file" class="form-control" id="image" name="image" >
  </div>
  
  <div class="form-group mt-3 mb-3">    
    <img src="<?php echo $response->image;?>" alt="No image found" height="100px" width="100px">
  </div>

  <input type="hidden" name="image" id="image" value="">
  
  <button type="submit" class="btn btn-primary" name="update" value="">Submit</button>
</form>
</body>