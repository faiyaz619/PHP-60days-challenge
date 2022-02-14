<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Mobile Mart</a>
        <ul class="navbar-nav">
            <?php if (isset($_SESSION['id'])) { ?>
                <li><a href="action.php?pages=product" class="nav-link">All products</a></li>
                <li><a href="action.php?pages=all-user" class="nav-link">All user</a></li>
                <li><a href="action.php?pages=upload" class="nav-link">File Upload</a></li>
                <li class="dropdown">
                    <a href="action.php?pages=registration" data-toggle="dropdown" class="nav-link dropdown-toggle"><?php echo $_SESSION['name']?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?pages=logout" class="dropdown-item">logout</a></li>

                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

<section class="py-5 bg-info h-450">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 ">
                <div class="card bg-dark text-primary">
                    <div class="card-header text-center text-uppercase font-weight-bolder">
                        Login Form
                    </div>
                    <div class="card-body">
                        <h3 class="text-danger"><?php echo isset($message)? $message: '' ?></h3>
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-3">Email address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="login-btn"/>
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
