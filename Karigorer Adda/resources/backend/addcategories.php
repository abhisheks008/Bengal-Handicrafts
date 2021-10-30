<div class="container">
    <h3 class="text-muted text-center mb-3"> Add categories</h3>
    <h3 class="text-center bg-success">
        <?php
            displayMessage();
        ?>
    </h3>
    <form method="POST" enctype="multipart/form-data">
        <?php
            addCategories();
        ?>
        <div class="form-group">
            <label>Category Title</label>
            <input type="text" class="form-control" name="catTitle">
        </div>
        <button type="submit" class="btn btn-primary" name="add">Add</button>
    </form>
</div>
