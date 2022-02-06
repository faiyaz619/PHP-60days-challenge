<?php include 'header.php'; ?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Password Generator</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" name="password_length" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Your Password </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo isset($result)? $result:''?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
