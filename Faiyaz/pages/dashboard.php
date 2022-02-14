<?php include 'header.php'; ?>
<section class="py-5">
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
    <?php foreach ($results as $result) {?>
        <tr>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['mobile']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['address']; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
<?php include 'footer.php'; ?>