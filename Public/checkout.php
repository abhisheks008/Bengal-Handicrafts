<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>


<div class="container">

    <!-- Items in the cart -->
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <div class="pt-4 wish-list">
                    <p class="text-center bg-danger">
                        <?php
                            displayMessage();
                        ?>
                    </p>

                    <h1>Shopping Cart</h1>

                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="ChikoMutandwaBeds@business.com">
                        <input type="hidden" name="upload" value="1">      
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-total</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    cart();
                                ?>
                            </tbody>
                        </table>
                        <?php
                            echo showPaypalButton();
                        ?>
                    </form>
                    <div class="alert alert-success mt-3">
                        <p>
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            Free Delivery within 1-2 weeks
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Items in the cart -->


    <!-- Order Summary -->
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <div class="pt-4 wish-list">        
                    <div class="col-xs-4 pull-right ">

                        <h2>Order Summary</h2>

                        <table class="table" cellspacing="0">

                            <tr class="cart-subtotal">
                                <th>Items:</th>
                                <td>
                                    <span class="amount">
                                        <?php
                                            echo isset($_SESSION['itemQuantity']) ? $_SESSION['itemQuantity'] : $_SESSION['itemQuantity'] = "0";
                                        ?>
                                    </span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td>Free Shipping</td>
                            </tr>

                            <tr class="order-total">
                                <th> 
                                    <div>
                                        <strong>
                                            The Total Amount
                                        </strong>
                                        <strong>
                                            <p class="mb-0">(Including Taxes)</p>
                                        </strong>
                                    </div></th>
                                <td>
                                    <strong>
                                        <span class="amount">
                                            Rs.<?php
                                                echo isset($_SESSION['itemTotal']) ? $_SESSION['itemTotal'] : $_SESSION['itemTotal'] = "0";
                                            ?>
                                        </span>
                                    </strong> 
                                </td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Order Summary -->


</div>
<?php
    include(Front_End . DS . "footerheader.php");
?>
<?php
    include(Front_End . DS . "footer.php");
?>
  