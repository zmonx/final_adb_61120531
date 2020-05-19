<div class="marshop">

    <?php if ($this->session->flashdata('success-msg')) { ?>
        <div class="alert alert-success" role="alert">
            SAVE SUCCESSFULLY
        </div>
    <?php } ?>

    <form method="get">
        <div class="row ">
            <div class="col-md-2 ">
                <a href="<?php echo base_url('products/create'); ?>" class="btn  btn-block btn-outline-info"><i class="fas fa-plus-circle"></i> ADD PRODUCTS</a>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Products Name" value="<?php echo $name;?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" name="category_id" ">
                        <option value="">Choose product category</option>
                        <?php foreach ($category as $key => $row) { ?>
                            <option value="<?php echo$row['_id']?>" <?php echo ($category_id==$row['_id'])?'selected' :'';?>><?php echo $row['categories_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2 ">
                <!-- <button type="button" class="btn btn-outline-info">Search</button> -->
                <button type="submit" name="search" class="btn  btn-block btn-outline-success" value="search"><i class="fas fa-search"></i> SEARCH</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $key => $row) { ?>
                        <tr>
                            <th scope="row"><?php echo ($key + 1) ?></th>
                            </th>
                            <td><?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['Price'] ?>-</td>
                            <td><?php echo nameCategory($row['category']['$oid']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>