<?php 

    require_once("../../resources/config.php");
    // echo __DIR__;

    if(isset($_GET['deleteUserID'])) {
        $query = query("DELETE FROM users WHERE userID = " . escape_string($_GET['deleteUserID']) . " ");
        confirm($query);
        echo json_encode($query);
        // set_message("The Product has been successfully deleted");
        redirect("../../public/admin/index.php?users");
    } else {
        redirect("../../public/admin/index.php?users");
    }

?>