<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Series</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Learn Php</a>
        <ul class="navbar-nav">
            <li><a href="#" class="nav-link"> Calculator</a></li>
            <li><a href="#" class="nav-link"> Simple calculation</a></li>
        </ul>
    </div>
</nav>
<!--    Section     -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-primary text-white">
                    <div class="card-header">
                        Checking String
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="#" class="col-md-6 col-form-label px-0">
                                            Enter your String:
                                        </label>
                                        <input type="text" class="form-control col-md-6 " name="given_string"/><?php echo isset($result )?$result :'' ;?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="#" class="col-md-6 col-form-label px-1">
                                           Total Word:
                                        </label>
                                        <input type="text" class="form-control col-md-6" name="word"/><?php echo isset($result )?$result :'' ;?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="#" class="col-md-6">Odd / EVEN :</label>
                                <input type="text" class="form-control col-md-6" name="word"/>
                            </div>
                            <div class="form-group row">
                                <label for="#" class="col-md-3 col-form-label">
                                    Result :
                                </label>
                                <textarea type="number" class="form-control col-md-9" /><?php echo isset($result )?$result :'' ;?></textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label"></label>
                                <div class="col-md-7">
                                    <label class="col-form-label">
                                        <input type="submit" class="btn btn-outline-light px-5" name="btn" value="submit"/>
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

<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
