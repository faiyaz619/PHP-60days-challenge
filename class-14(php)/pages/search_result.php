<?php include 'header.php' ?>
<!-- section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Search Result
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" name="search_btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php if(isset($result['name'])) { ?>
                        <table class="table text-center table-bordered table-hover table-active ">
                            <thead class="text-white text-uppercase bg-dark">
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['mobile']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['address']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                        <?php } else { ?>
                            <h1 class="text-danger text-center"> Sorry ... No record found.<h1>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section -->
<?php include 'footer.php' ?>
