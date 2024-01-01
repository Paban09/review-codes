<?php include 'header.php'; ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center fw-bold">All Product</div>
                <span class="text-center fw-bold text-success pt-3"><?php echo isset($message)? $message:'';?></span>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Stock Amount</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($products as $product){ ?>
                            <tr>
                                <th><?php echo $product['name'] ; ?></th>
                                <th><?php echo $product['price'] ; ?></th>
                                <th><?php echo $product['stock'] ; ?></th>
                                <th><?php echo $product['description'] ; ?></th>
                                <th> <img src="<?php echo $product['image']; ?>" height="40" width="60" alt=""> </th>
                                <th>
                                    <a class="btn btn-success" href="action.php?page=edit-product&&id=<?php echo $product['id'];?>">Edit</a>
                                    <a class="btn btn-danger"  href="action.php?page=delete-product&&id=<?php echo $product['id'];?>">Delete</a>
                                </th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>