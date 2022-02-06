<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-100">
                        <div class="card-header">Product Specification</div>
                        <div class="card-body">
                            <h3>Product Name:<?php echo $product['name']; ?></h3>
                            <h4>Price:<?php echo $product['price']; ?></h4>
                            <h4>Brand Name:<?php echo $product['brand']; ?></h4>
                            <h4>Category: <?php echo $product['category']; ?></h4>
                            <hr/>
                            <a href="action.php?status=search&id=<?php echo $product['id']?>" class=" btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php';?>
