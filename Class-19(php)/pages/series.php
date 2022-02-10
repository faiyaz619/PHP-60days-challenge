<?php include 'header.php' ?>
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white text-uppercase ">
                    <div class="card-header font-weight-bolder text-center">
                      Sum of Series
                    </div>
                    <div class="card-body">
                        <form action="action.php"method="post">
                              <div class="form-group row">
                                  <label for="" class="col-md-3">Starting Number</label>
                                  <div class="col-md-9">
                                  <input type="number" required class="form-control" name="starting_number">
                                  </div>
                              </div>
                              <div class="form-group row">
                                   <label for="" class="col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" required class="form-control" name="ending_number">
                                    </div>
                              </div>
                              <div class="form-group row">
                                  <label for="" class="col-md-3">Result</label>
                                  <div class="col-md-9">
                                      <textarea class="form-control" rows="8"><?php echo isset($result)?$result:'' ; ?></textarea>
                                  </div>
                              </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-3"></label>
                                 <div class="col-md-9">
                                    <input type="submit" class="btn btn-block btn-outline-success" name="series_btn"/>
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
