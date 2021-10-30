<div class="container">
    <h3 class="text-muted text-center mb-3"> Add Products</h3>
    <h3 class="text-center bg-success">
        <?php
            displayMessage();
        ?>
    </h3>
    <form method="POST" enctype="multipart/form-data">
        <?php
            addUsers();
        ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="contact">
        </div>

        <div class="form-group">
            <label>Account Type</label>
            <input type="text" class="form-control" name="accountType">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
    <button type="submit" class="btn btn-primary" name="add">Add</button>
    </form>
</div>
