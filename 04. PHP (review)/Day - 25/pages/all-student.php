<?php include 'header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    
                    <div class="card">
                        <div class="card-header fw-bold text-center">All Student Details</div>
                        <span class="text-center fw-bold text-primary"><?php echo isset($message)?$message:""; ?></span>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>MOBILE</th>
                                        <th>IMAGE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($students as $student){ ?>
                                        <tr>                                           
                                            <th><?php echo $student['name'] ; ?></th>
                                            <th><?php echo $student['email'] ; ?></th>
                                            <th><?php echo $student['mobile'] ; ?></th>
                                            <th>
                                                <img src="<?php echo $student['image'];?>" alt="" height="50" width="80">
                                            </th>
                                            <th>
                                                <a href="action.php?page=update&&id=<?php echo $student['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="action.php?page=delete&&id=<?php echo $student['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                                            </th>
                                        </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>