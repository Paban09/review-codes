<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">Logo</a>
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="action.php?page=home">Home</a></li>
                <li><a class="nav-link" href="">Full Name</a></li>
                <li><a class="nav-link" href="">Calculator</a></li>
            </ul>
        </div>
    </nav>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Full Name Program</div>
                        <div class="card-body">

                            <form action="action.php" method="POST">

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">First Name : </label>
                                    <div class="col-md-9">
                                        <input name="first_name" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Last Name : </label>
                                    <div class="col-md-9">
                                        <input name="last_name" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name : </label>
                                    <div class="col-md-9">
                                        <input value="<?php echo isset($result)? $result : " "; ?>" type="text" class="form-control" />
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input name="full_name_btn" type="submit" class="btn btn-success" value="submit" />
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>