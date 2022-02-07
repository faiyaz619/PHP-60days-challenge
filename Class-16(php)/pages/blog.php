<?php include 'header.php' ?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
        <?php foreach ($blogs as $blog) {?>
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <img src="../assets/img/<?php echo $blog['image']; ?>" alt="" class="w-100">
                    <div class="card-header">Password Generator</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3><?php echo $blog['title']; ?></h3>
                            <h4><?php echo $blog['author']; ?></h4>
                            <hr/>
                            <a href="" class=" btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
