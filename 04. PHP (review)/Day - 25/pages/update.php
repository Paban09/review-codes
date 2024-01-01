<?php include 'header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <span class="py-2 fw-bold text-center text-success"><?php echo isset($result)?$result:""; ?></span>
                        <div class="text-center fw-bold card-header">Update Student</div>
                        <div class="card-body">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                
                                <input value="<?php echo $data['id']; ?>" name="id" type="hidden">
                                
                                <div class="row mt-3">
                                    <label class="col-md-3" for="">Name</label>
                                    <div class="col-md-9">
                                        <input value="<?php echo isset($data['name'])?$data['name']:""; ?>" name="name" class="form-control" type="text">

                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label class="col-md-3" for="">Email</label>
                                    <div class="col-md-9">
                                        <input value="<?php echo isset($data['email'])?$data['email']:""; ?>" name="email" class="form-control" type="email">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label class="col-md-3" for="">Mobile</label>
                                    <div class="col-md-9">
                                        <input value="<?php echo isset($data['mobile'])?$data['mobile']:""; ?>" name="mobile" class="form-control" type="number">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-3" for="">Image</label>
                                    <div class="col-md-9">
                                        <input name="image"  class="form-control" type="file">
                                        <img height="50" width="60" src="<?php echo isset($data['image'])?$data['image']:""; ?>" alt="">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <label class="col-md-3" for=""></label>
                                    <div class="col-md-9">
                                        <input name="update_btn" type="submit" value="Update" class="btn btn-outline-success">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>