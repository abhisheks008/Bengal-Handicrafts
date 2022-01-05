<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Products</h3>
            </div>
        </div>
        <!-- /Title -->


        <hr>

        
        <!-- Page Features -->
        <div class="row text-center">
            <?php
                 getProductsCategory();
            ?>
        </div>
        <!-- /Page Features -->
       
    </div>
    <!-- /Page Content -->

<?php
    include(Front_End . DS . "footer.php");
?>