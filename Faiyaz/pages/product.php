<?php include 'header.php'; ?>
<section class="py-5">
    <table class="table text-center table-bordered table-hover table-active ">
        <thead class="text-white text-uppercase bg-dark">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
            <th>Category</th>
            <th>image</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $result) {?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['price']; ?></td>
                <td><?php echo $result['brand']; ?></td>
                <td><?php echo $result['category']; ?></td>
                <td><img src="assets/img/<?php echo $result['image'];?>" height="50px" /></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
<?php include 'footer.php'; ?>
