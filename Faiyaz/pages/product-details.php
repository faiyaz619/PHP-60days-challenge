<?php include 'header.php'?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4"></div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $detail['image']; ?>" alt="" class="card-img-top img-fluid h-450 w-auto">
                    <div class="card-header">Product Specification</div>
                    <div class="card-body">
                        <h3>Product Name:<?php echo $detail['name']; ?></h3>
                        <h4>Price:<?php echo $detail['price']; ?></h4>
                        <h4>Brand Name:<?php echo $detail['brand']; ?></h4>
                        <h4>Category: <?php echo $detail['category']; ?></h4>
                        <h4>Category: <?php echo $detail['description']; ?></h4>
                        <hr/>
                    </div>
                </div>
                <a href="action.php?pages=product" class="btn btn-success"> Back</a>
            </div>
            <div class="col-md-4 mb-4"></div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
