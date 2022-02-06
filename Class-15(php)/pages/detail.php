<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($Details as $Detail) {?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="assets/img/<?php echo $Detail['image']; ?>" alt="" class="card-img-top h-100">
                        <div class="card-header">Product Specification</div>
                        <div class="card-body">
                            <h3>Product Name:<?php echo $Detail['name']; ?></h3>
                            <h4>Price:<?php echo $Detail['price']; ?></h4>
                            <h4>Brand Name:<?php echo $Detail['brand']; ?></h4>
                            <h4>Category: <?php echo $Detail['category']; ?></h4>
                            <hr/>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
