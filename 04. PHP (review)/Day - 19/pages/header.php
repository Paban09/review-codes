<!-- <?php var_dump($categories) ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>

            <ul class="navbar-nav">
                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                    <ul class="dropdown-menu">
                    <?php foreach($categories as $category){ ?> 
                        <li><a href="action.php?page=category&&id=<?php echo $category['id'] ; ?>" class="dropdown-item"><?php echo $category['name'] ; ?></a></li>
                    <?php } ?>     
                    </ul>
                </li>
                <li><a href="" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>