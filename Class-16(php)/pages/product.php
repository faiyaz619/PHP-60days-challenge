<?php include 'header.php'?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) {?>
                <div class="col-md-4 mb-3">
                    <div class="card px-0">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-100">
                        <div class="card-header text-center text-uppercase font-weight-bolder"><?php echo $product['name'] ?></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 pr-0">
                                    <h5>Product Name:</h5>
                                </div>
                                <div class="col-md-6 px-0">
                                    <p><?php echo $product['name']; ?></p>
                                </div>
                            </div>

                            <h6>Price:</h6><p><?php echo $product['price']; ?></p>
                            <h6>Brand Name:<?php echo $product['brand']; ?></h6>
                            <h6>Category:</h6> <p><?php echo $product['category']; ?></p>
                            <hr/>
                            <a href="action.php?pages=search&&id=<?php echo $product['id'];?>" class=" btn btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'?>
