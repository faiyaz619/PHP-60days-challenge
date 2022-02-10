<?php include 'header.php'; ?>
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
