<!-- <?php print_r($products) ?> -->

<?php include 'header.php' ?>

    <section class="py-5">
            <div class="container">
                <div class="row">
                <?php foreach($products as $product){ ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img style="height: 300px;" src="assets/images/<?php echo $product['image']; ?>" alt="">
                            <div class="card-body">
                                <h4><?php echo $product['name']; ?></h4>
                                <p>Tk. <?php echo $product['price']; ?></p>
                                <hr>
                                <a href="action.php?page=detail&&id=<?php echo $product['id']; ?>" class="btn btn-success px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>    

                </div>
            </div>
        </section>

<?php include 'footer.php' ?>