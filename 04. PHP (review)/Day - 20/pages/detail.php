<!-- <?php print_r($productDetail); ?> -->


<?php include 'header.php' ?>
    <section class="py-5">
        <div class="container">
        <?php foreach($productDetail as $product){ ?>    
            <div class="card">
                <div class="row">
                
                    <div class="col-md-6">
                        <img class="w-100" src="assets/images/<?php echo $product['image']; ?>" alt="">
                    </div>
                    <div class="col-md-6 pt-5">
                        <h4>Name: <?php echo $product['name']; ?></h4>
                        <h4>Price: <?php echo $product['price']; ?>Tk</h4>
                        <p>Description: <?php echo $product['description']; ?></p>
                    </div>
                </div>
            </div>

        <?php } ?>   
        </div>
    </section>

<?php include 'footer.php' ?>
