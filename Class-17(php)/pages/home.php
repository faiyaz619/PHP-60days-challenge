<?php include 'header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center text-uppercase font-weight-bolder">
                        Please Input field Carefully
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)){ ?>
                        <h2 class="text-center text-success font-weight-bolder mb-3"> <?php echo $message?></h2>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Author Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="author_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">BLog Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-outline-success btn-block" name="btn"
                                           value="save"/>
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

