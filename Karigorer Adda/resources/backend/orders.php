<div class="container">
    <h3 class="text-muted text-center mb-3">Orders</h3>
    <table class="table table-striped bg-light text-center">
        <thead>
            <tr class="text-muted">
                <th>#</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Order Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                getAdminOrders();
            ?>
        </tbody>
    </table>
</div>