<div class="container">
    <h3 class="text-muted text-center mb-3"> Add Products</h3>
    <h3 class="text-center bg-success">
        <?php
            displayMessage();
        ?>
    </h3>
    <form method="POST" enctype="multipart/form-data">
        <?php
            addProducts();
        ?>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" class="form-control" name="productTitle">
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="productCategoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <?php categoryDropdownList(); ?>
            </select>
        </div>

        <div class="form-group">
            <label>Brand</label>
            <select name="brandID" id="" class="form-control">
                <option value="">Select Brand</option>
                <?php brandDropdownList(); ?>
            </select>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="productPrice">
        </div>

        <div class="form-group">
            <label>Price Discount</label>
            <input type="text" class="form-control" name="productPriceDiscount">
        </div>

        <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
           <label>Product Description</label>
            <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
        </div>

        <div class="form-group">
           <label>Product Short Description</label>
            <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="product-title">Product Quantity</label>
            <input type="number" name="productQuantity" class="form-control">
        </div>

        <div class="form-group">
            <label for="product-section">Product Section</label>
            <input type="text" class="form-control" name="productSection">
        </div>

        <div class="form-group">
            <label for="product-section">Availability</label>
            <input type="text" class="form-control" name="productAvailability">
        </div>

        <div class="form-group">
            <label for="inputState">Delivery</label>
            <input type="text" class="form-control" name="productDelivery">
        </div>
    <button type="submit" class="btn btn-primary" name="add">Add</button>
    </form>
</div>
