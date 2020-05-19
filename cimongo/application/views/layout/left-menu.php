<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1 class="my-4">SURA SHOP</h1>
            <div class="list-group">
                <?php foreach ($category as $row) { ?>
                    <a href="<?php echo base_url('category/' . $row['_id']) ?>" class="list-group-item"><?php echo $row['categories_name'] ?></a>
                <?php } ?>
            </div>
        </div>
   