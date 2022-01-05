<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>

    <!-- Main Section -->
    <main>

        <!--- First Slider -->
        <?php
            include(Front_End . DS . "firstslider.php");
        ?> 
        <!--- /First Slider -->

        
        <!-- Features Section -->
        <?php
            include(Front_End . DS . "features.php");
        ?> 
        <!-- /Features Section -->

        
        <!-- Hot Products Section -->
        <?php
            include(Front_End . DS . "hotproducts.php");
        ?> 
        <!-- /Hot Products Section -->
        

        <!-- Logo Section -->
        <?php
            include(Front_End . DS . "logosection.php");
        ?>        
        <!-- /logo Section -->


        <!-- Now On Promotion -->
        <?php
            include(Front_End . DS . "promotion.php");
        ?> 
        <!-- /Now On Promotion -->


        <!-- Brand -->
        <?php
            include(Front_End . DS . "brands.php");
        ?>
        <!-- /Brand -->


        <!-- Our Client -->
        <?php
            include(Front_End . DS . "client.php");
        ?>
        <!-- /Our Client -->


        <!-- Facilities -->
        <?php
            include(Front_End . DS . "facilities.php");
        ?>
        <!-- /Facilities -->


    </main>
    <!-- /Main Section -->


<?php
    include(Front_End . DS . "footerheader.php");
?>
<?php
    include(Front_End . DS . "footer.php");
?>