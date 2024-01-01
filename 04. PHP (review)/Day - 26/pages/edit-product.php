<?php include 'header.php';?>
<div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center fw-bold">Update Product</div>
                    <!-- <span class="text-center fw-bold text-success pt-3"><?php echo isset($message)? $message:'';?></span> -->
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <input type="text" hidden value="<?php echo $singleProduct['id'];?>" name="id" class="form-control">

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo $singleProduct['name'];?>" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo $singleProduct['price'];?>" name="price" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Stock</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo $singleProduct['stock'];?>" name="stock" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Description</label>
                                <div class="col-md-9">
                                    <input type="text-area" value="<?php echo $singleProduct['description'];?>" name="description" class="form-control">
                                </div>
                            </div>

                            

                            <div class="row mt-3">
                                <label class="col-md-3" for=""> Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                    <img height="40" width="60" src="<?php echo $singleProduct['image'];?>" alt="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" name="update_product" class="btn btn-success" value="Update Product">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
<?php include 'footer.php';?>