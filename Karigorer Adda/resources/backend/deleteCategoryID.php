<?php 

    require_once("../../resources/config.php");

    if(isset($_GET['deleteCategoryID'])) {
        $query = query("DELETE FROM categories WHERE catID = " . escape_string($_GET['deleteCategoryID']) . " ");
        confirm($query);
        // set_message("The category has been successfully deleted");
        redirect("../../public/admin/index.php?categories");
    } else {
        redirect("../../public/admin/index.php?categories");
    }

?>