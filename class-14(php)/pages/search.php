<?php include 'header.php' ?>
<!-- section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All user Info
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
                                <?php foreach ($students as $student){ ?>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['mobile']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['address']; ?></td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section -->
<?php include 'footer.php' ?>