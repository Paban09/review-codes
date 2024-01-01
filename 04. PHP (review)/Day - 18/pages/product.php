<!-- <?php print_r($products) ?> -->


<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach($products as $product){ ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/images/<?php echo $product['image']; ?>" alt="" class="" style="height: 350px;" />
                            <div class="card-body">
                                <h4><?php echo $product['name']; ?></h4>
                                <p>Tk. <?php echo $product['price']; ?></p>
                                <hr>
                                <a href="" class="btn btn-success px-5">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
