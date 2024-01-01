<!-- <?php print_r($categoryProducts); ?> -->


<?php include 'header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($categoryProducts as $product){ ?>

                <div class="col-md-4">
                    <div class="card">
                        <img style="height:350px" class="card-img-top" src="assets/images/<?php echo $product['image']; ?>" alt="">
                        <div class="card-body">
                            <h4><?php echo $product['name']; ?></h4>
                            <p>Tk . <?php echo $product['price']; ?></p>
                            <hr>
                            <a href="" class="btn btn-success px-5">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<?php include 'footer.php' ?>