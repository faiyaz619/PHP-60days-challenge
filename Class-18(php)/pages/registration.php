<?php include 'header.php' ?>
<section class="py-5" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center text-uppercase font-weight-bolder">
                        Registration form
                    </div>
                    <div class="card-body">
                        <form action="action.php"method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="full_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="email">
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" name="phone">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Subject</label>
                                <div class="col-md-9">
                                   <label><input type="checkbox" name="subject[]" value="Bangla">Bangla</label>
                                   <label><input type="checkbox" name="subject[]" value="English">English</label>
                                   <label><input type="checkbox" name="subject[]" value="Math">Math</label>
                                   <label><input type="checkbox" name="subject[]" value="physics">Physics</label>
                                   <label><input type="checkbox" name="subject[]" value="chemistry">Chemistry</label>
                                   <label><input type="checkbox" name="subject[]" value="Biology">Biology</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="reg_btn"/>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include 'footer.php' ?>
