<?php
    require_once("config.php");
?>

<?php
    // add to cart 
    if (isset($_GET['add'])) {
        
        $query = query("SELECT * FROM products WHERE productID =" . escape_string($_GET['add']) . " ");
        confirm($query);

        while ($row = fetch_array($query)) {
            // checking if there is enoguh products in the database for the user to add to the cart
            if ($row['productQuantity'] != $_SESSION['product_' . $_GET['add']]) {
                // clicking on the add to cart and its incrementing by one 
                $_SESSION['product_' . $_GET['add']] ++;
                redirect("../public/checkout.php");
            }else {
                setMessage("We only have " . $row['productQuantity'] . " {$row['productTitle']} " . "available right now");
                redirect("../public/checkout.php");
            }
        }

    }


    // remove from cart
    if (isset($_GET['remove'])) {
        $_SESSION['product_' . $_GET['remove']]--;
        if ($_SESSION['product_' . $_GET['remove']] < 1) {
            redirect("../public/checkout.php");
            unset($_SESSION['itemQuantity']);
            unset($_SESSION['itemTotal']);            
            
        }else {
            redirect("../public/checkout.php");
        }
    }


    // deleting from cart
    if (isset($_GET['delete'])) {
        $_SESSION['product_' . $_GET['delete']] = '0';
        redirect("../public/checkout.php");
        unset($_SESSION['itemQuantity']);
        unset($_SESSION['itemTotal']);
        
    }


    // this function is where we will be displaying the items in the shopping cart
    function cart(){

        $total = 0;      $itemCount = 0;

        // variables for the paypal
        $item_name = 1;
        $item_number = 1;
        $amount = 1;
        $quantity = 1;

        // this foreach is looping and getting the product name and how many quantities are assigned to it in a given session
        foreach ($_SESSION as $name => $value) {

            if ($value > 0) {
                if (substr($name, 0, 8) == "product_") {

                    $length = strlen(is_numeric($name) - 8);
                    $id = substr($name, 8, $length);

                    $query = query("SELECT * FROM products WHERE productID = "  . escape_string($id) . "");
                    confirm($query);

                    while ($row = fetch_array($query)) {

                        $subTotal = $row['productPrice'] * $value;
                        $itemCount += $value;

                        $productDisplay = <<<DELIMETER
                        <tr>
                            <td>{$row['productTitle']}</td>
                            <td>Rs.{$row['productPriceDiscount']}</td>
                            <td>{$value}</td>
                            <td>Rs.{$subTotal}</td>
                            <td>
                                <a class='btn btn-success' href="../resources/cart.php?add={$row['productID']}">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                                <a class='btn btn-warning' href="../resources/cart.php?remove={$row['productID']}">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </a>
                                <a class='btn btn-danger' href="../resources/cart.php?delete={$row['productID']}">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <input type="hidden" name="item_name_{$item_name}" value="{$row['productTitle']}>
                        <input type="hidden" name="item_number_{$item_number}" value="{$row['productID']}">
                        <input type="hidden" name="amount_{$amount}" value="{$row['productPriceDiscount']}">
                        <input type="hidden" name="quantity_{$quantity}" value="{$value}">
                        DELIMETER;
                        echo $productDisplay;

                        $item_name ++;
                        $item_number ++;
                        $amount ++;
                        $quantity ++;
                    }
                    
                    $_SESSION['itemTotal'] = $total += $subTotal;
                    $_SESSION['itemQuantity'] = $itemCount;
                    
                }
            }
        }
    }


    // this function will only show the button when user has products in the cart
    function showPaypalButton(){

        if (isset($_SESSION['itemQuantity']) && $_SESSION['itemQuantity'] >= 1) {
            $paypalButton = <<<DELIMETER
            <input type="image" name="upload"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="PayPal - The safer, easier way to pay online">
            DELIMETER;
            return $paypalButton;
        }

    }

?>

