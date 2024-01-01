
    
<?php include 'header.php'; ?>   


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body mt-3">
                        
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="col-md-3" for="">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3" for="">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="image_upload" value="submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>    
