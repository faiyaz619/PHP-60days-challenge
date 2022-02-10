<?php include 'header.php'; ?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header font-weight-bolder text-uppercase text-center">Prime Number Checker</div>
                    <div class="card-body">
                        <form action="action.php"method="POST">
                            <div class="form-group row">
                                <div class="col-md-3">Enter Number</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="given_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">Result</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" readonly value="<?php echo isset($result)?$result:''; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success btn-block" name="btn" "/>
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

