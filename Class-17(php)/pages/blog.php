<?php include 'header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div >
                    <h1 class="text-center text-warning font-weight-bolder"> ALL BLOGS</h1>
                </div>
                <div class="row">
                    <?php foreach ($allBlogs as $blog) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo isset($blog['image'])?$blog['image']:''?>" alt class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo isset($blog['title'])?$blog['title']:''?></h4>
                                <span class="text-muted"><?php echo isset($blog['author'])?$blog['author']:''?></span>
                                <p class="text-justify"><?php echo isset($blog['description'])?$blog['description']:''?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>


