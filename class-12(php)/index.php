<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Calculator</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/all.css">
    <link rel="stylesheet" href="assests/css/style.css.css">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-warning">
        <div class="container">
            <a href="#" class="navbar-brand"> Php Calculator</a>
            <ul class="navbar-nav">
                <li><a href="#" class="nav-link">Calculator</a></li>
                <li><a href="#" class="nav-link">Scientific Calculator</a></li>
            </ul>
        </div>
    </nav>
<!--Section-->
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            My Calculator
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" class="form-control"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number" class="form-control"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo isset($result)? $result: '';?>" readonly class="form-control"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="operator" class="btn btn-outline-success" value="+"/>
                                        <input type="submit" name="operator" class="btn btn-outline-success" value="-"/>
                                        <input type="submit" name="operator" class="btn btn-outline-success" value="*"/>
                                        <input type="submit" name="operator" class="btn btn-outline-success" value="/"/>
                                        <input type="submit" name="operator" class="btn btn-outline-success" value="%"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--Section-->
<!-- Footer section-->
    <section class="py-5 bg-dark">
        <footer class="text-center">
            <p class="text-white">Copyright &copy; preseverd by Faiyaz Fahim</p>
        </footer>
    </section>
<!-- Footer section-->

</body>
</html>