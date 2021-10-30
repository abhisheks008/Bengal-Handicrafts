<?php
    require_once("../resources/config.php");
?>
<?php
    include(Front_End . DS . "headerguest.php");
?>
<?php
    include(Front_End . DS . "topnavguest.php");
?>

    <!-- Main Section -->
    <main>

        <!--- First Slider -->
        <?php
            include(Front_End . DS . "firstslider.php");
        ?> 
        <!--- /First Slider -->

        
        <!-- Logo Section -->
        <?php
            include(Front_End . DS . "logosection.php");
        ?>        
        <!-- /logo Section -->


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