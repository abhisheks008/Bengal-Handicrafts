<?php 

    require_once("../../resources/config.php");
    // echo __DIR__;

    if(isset($_GET['deleteProductID'])) {
        $query = query("DELETE FROM products WHERE productID = " . escape_string($_GET['deleteProductID']) . " ");
        confirm($query);
        echo json_encode($query);
        // set_message("The Product has been successfully deleted");
        redirect("../../public/admin/index.php?products");
    } else {
        redirect("../../public/admin/index.php?products");
    }

?>