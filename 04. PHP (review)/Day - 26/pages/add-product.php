<?php include 'header.php'; ?>

   <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center fw-bold">Add Product</div>
                    <span class="text-center fw-bold text-success pt-3"><?php echo isset($message)? $message:'';?></span>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" required name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Price</label>
                                <div class="col-md-9">
                                    <input type="number" required name="price" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Stock</label>
                                <div class="col-md-9">
                                    <input type="number" required name="stock" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for="">Product Description</label>
                                <div class="col-md-9">
                                    <input type="text-area" required name="description" class="form-control">
                                </div>
                            </div>

                            

                            <div class="row mt-3">
                                <label class="col-md-3" for=""> Image</label>
                                <div class="col-md-9">
                                    <input type="file" required name="image" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" name="add_product" class="btn btn-success" value="Create New Product">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>

<?php include 'footer.php'; ?>