<?php include 'header.php' ?>
<section class="py-5">
  <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="card">
                  <form action="action.php" method="POST">
                      <div class="form-group row">
                          <label for="" class="col-md-4 col-form-label">Length</label>
                          <div class="col-md-8">
                              <input type="number" name="input_length" class="form-control"/>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="" class="col-md-4 col-form-label"></label>
                          <div class="col-md-8">
                              <input type="submit" name="pattern_btn" class="btn btn-outline-dark"/>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="col-md-12 bg-dark text-white">
                        <form action="action.php" method="POST">
                            <div class="form-group row mx-auto">
                                <?php echo isset($result)?$result:'';?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>


