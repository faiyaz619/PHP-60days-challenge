<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/all.css.css">
    <link rel="stylesheet" href="assests/css/style.css.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            LearnPhp
        </a>
        <ul class="navbar-nav mx-0">
            <li><a href="" class="nav-link">Home</a></li>
            <li><a href="" class="nav-link">Services</a></li>
            <li><a href="" class="nav-link">Blog</a></li>
            <li><a href="" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>
<!-- Section-->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Please fill up the form
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    First Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    Last Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                    Full Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result: '';?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">
                                </label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-outline-success" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Section-->

<script src="assests/js/jquery-3.6.0.js"></script>
<script src="assests/js/bootstrap.js"></script>
</body>
</html>

