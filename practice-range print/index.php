<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Range Calculator</a>
            <ul class="navbar-nav">
                <li><a class="nav-link">Simple Calculator</a></li>
                <li><a class="nav-link">Scientific Calculator</a></li>
            </ul>
        </div>
    </nav>
<section class="py-5 bg-info ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto" >
                <div class="card bg-dark text-light">
                    <div class="card-header text-center"><h3>Select The Range</h3></div>
                    <div class="card-body">
                        <form action="action.php" method="post">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-6 col-form-label">First Number :</label>
                                        <div class="col-md-6">
                                        <input type="number" class="form-control" name="first_number"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-6 col-form-label">Second Number :</label>
                                        <div class="col-md-6">
                                        <input type="number" class="form-control" name="second_number"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Result :</label>
                                <div class="col-md-9">
                                        <textarea readonly class="form-control">
                                            <?php echo isset($result )?$result :'' ;?>
                                        </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label"></label>
                                <div class="col-md-7">
                                    <label class="col-form-label">
                                        <input type="submit" class="btn btn-outline-success px-5" value="submit"/>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-5 bg-dark">
        <footer class="text-center">
            <p class="text-light">This site is preserved by Faiyaz Fahim &copy;</p>
        </footer>
    </section>

<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>