<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center fw-bold">Student Information</div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>Student Id</td>
                                        <td>Student Name</td>
                                        <td>Student Email</td>
                                        <td>Student Mobile</td>
                                    </tr>

                                    <?php foreach($students as $student){ ?>
                                        <tr>
                                            <td><?php echo $student['id'] ?></td>
                                            <td><?php echo $student['name'] ?></td>
                                            <td><?php echo $student['email'] ?></td>
                                            <td><?php echo $student['mobile'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php' ?>
