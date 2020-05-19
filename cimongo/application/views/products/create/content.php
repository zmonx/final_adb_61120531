<div class="marshop"></div>
<div class="container">

    <h3>CREATE PRODUCTS</h3>
    <hr>
    <form method="post" action="<?php echo base_url('products/save')?>">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Product Name </label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" i" name="product_name" placeholder="Product Name" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Price </label> <span class="text-danger">*</span>
                    <input type="number" class="form-control" i" name="Price"placeholder="Price / Piece" min="0" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Category </label> <span class="text-danger">*</span>
                    <select class="form-control" name="category"required>
                        <option value=""> Choose Product Category</option>
                        <?php foreach ($category as $key => $row) {?>
                            <option value="<?php echo$row['_id']?>"><?php echo $row['name'] ?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
        </div>
        <p class="text-center"> <button type="submit" class="btn  btn-block btn-outline-success" value="search"><i class="fas fa-save"></i> SAVE</button></p>
    </form>
</div>
</div>