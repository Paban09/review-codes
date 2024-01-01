<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
    
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">

                        <form action="action.php" method="post" enctype="multipart/form-data" >

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold" for="">Full Name</label>
                                <div class="col-md-9">
                                    <input name="name" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold" for="">Email</label>
                                <div class="col-md-9">
                                    <input name="email" class="form-control" type="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold" for="">Mobile</label>
                                <div class="col-md-9">
                                    <input name="mobile" class="form-control" type="number">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3 fw-bold" for="">Image</label>
                                <div class="col-md-9">
                                    <input name="image" class="form-control" type="file">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3" for=""></label>
                                <div class="col-md-9">
                                    <input name="submit_btn" value="Submit" class="btn btn-success" type="submit">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>