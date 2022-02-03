<?php include 'header.php';?>
<!--    Section     -->
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card text-dark">
                    <div class="card-header font-weight-bolder bg-dark text-white text-uppercase">
                        Checking String
                    </div>
                    <div class="card-body bg-white">
                        <form action="action.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="#" class="col-md-12 col-form-label px-0">
                                            Enter your String :
                                        </label>
                                        <input type="text" required class="form-control col-md-12 " name="string" value="<?php echo isset( $result['string'])? $result['string']:'';?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="#" class="col-md-12 col-form-label px-1">
                                           Total Word :
                                        </label>
                                        <input type="text" class="form-control col-md-12" value="<?php echo isset($result['word'])?$result['word']:'';?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for="#" class="col-md-12 col-form-label px-1">
                                            Total Character :
                                        </label>
                                        <input type="text" class="form-control col-md-12" value="<?php echo isset( $result['character'])? $result['character']:'';?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label"></label>
                                <div class="col-md-4">
                                    <label class="col-form-label">
                                        <input type="submit" class="btn btn-dark px-5 text-uppercase" name="btn" value="submit" />
                                    </label>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
<!--Section-->

