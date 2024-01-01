<?php include 'header.php'; ?>   


    <section class="py-5">
        <div class="container">
            <div class="row">

            <!-- registration form  -->
                <div class="col-md-6 mt-3">
                    
                    <div class="card">
                        <div class="card-header text-center fw-bold">Registration Form</div>
                        <div class="card-body">

                            <form action="action.php" method="post">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" />
                                    </div>                               
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" />
                                    </div>                               
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" />
                                    </div>                               
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Subject</label>
                                    <div class="col-md-9">
                                        <?php foreach($subjects as $subject){ ?>
                                            <label><input type="checkbox" name="subject[]" value="<?php echo $subject['name']; ?>" /> <?php echo $subject['name']; ?></label>
                                        <?php } ?>
                                    </div>                               
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success px-5" name="reg_btn" value="submit" />
                                    </div>                               
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            <!-- registration preview  -->
                <div class="col-md-6  mt-3">
                    
                    <div class="card">
                        <div class="card-header text-center fw-bold">Student Detail Information</div>
                        <div class="card-body">

                            <table class="table table-bordered">

                                <tr>
                                    <th>Student Name</th>
                                    <td><?php echo isset($results['name'])?$results['name'] : " " ; ?></td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td><?php echo isset($results['email'])?$results['email'] : " " ; ?></td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td><?php echo isset($results['mobile'])?$results['mobile'] : " " ; ?></td>
                                </tr>

                                <tr>
                                    <th>Subject Name</th>
                                    <td>
                                        <?php  if(isset($results['subjects'])){ ?>
                                            <ul>
                                                <?php foreach($results['subjects'] as $subject){ ?>    

                                                    <li><?php echo $subject; ?></li>
                                            
                                                <?php } ?>

                                            </ul>
                                        <?php } ?>
                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>    
