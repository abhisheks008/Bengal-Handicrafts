<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>

<div class="container">

    <?php
        $query = query("SELECT * FROM products WHERE productID = " . escape_string($_GET['id']) . " ");
        confirm($query);

        while ($row = fetch_array($query)):
            
    ?>

    <div>

        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo $row['productImage']; ?>" alt="">
            </div>

            <div class="col-md-6">
                
                <div class="caption-full">
                    <h4><?php echo $row['productTitle']; ?></h4>
                    <hr>
                    <h5><s class="text-secondary"><?php echo "Rs.". $row['productPrice']?></s></h5>
                    <h4 class=""><?php echo "Rs." . $row['productPriceDiscount']; ?></h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div>
                    <p>
                        <?php echo $row['productShortDescription']; ?>
                    </p>
                </div>

                <dl class="row">
                    <dt class="col-sm-3">Brand:</dt>
                    <!-- <dd class="col-sm-9"><?php  ?></dd> -->
                    <dd class="col-sm-9"><?php echo $brandName = getBrandTitle($row['brandID']); ?></dd>
                    <dt class="col-sm-3">Delivery Time:</dt>
                    <dd class="col-sm-9"><?php echo $row['productDelivery']; ?></dd>
                    <dt class="col-sm-3">Availability:</dt>
                    <dd class="col-sm-9"><?php echo $row['productAvailability']; ?></dd>
                </dl>

                <form action="">
                    <div class="form-group">
                        <a href="../resources/cart.php?add=<?php echo $row['productID'];?>" class="btn border site-btn btn-span">
                            <i class="fas fa-shopping-cart p-2"></i>
                            <span>Add to cart</span>
                        </a>
                    </div>
                </form>
                
                <p class="text-primary mb-0">
                    <i class="fas fa-info-circle mr-1"></i>
                    <small>Delivery is subject to stock availability 5 - 10 working days</small>
                </p>
            </div>
        
        </div>
       

        </div>

            <div class="row">
                <hr>    
                <div role="tabpanel">
                    <h4>Product Summary</h4> 
                    <hr>
                    <div class="tab-content">       
                        <div role="tabpanel" class="tab-pane active" id="home"> 
                            <p><?php echo $row['productDescription']; ?></p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>

    </div>

<!-- ending the while loop from the top php "while():" -->
<?php
    endwhile;
?>

</div>
    <!-- /.container --> 

<?php
    include(Front_End . DS . "footer.php");
?>