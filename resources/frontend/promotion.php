<div class="container text-center">
    <div class="features">
        <h1>Now On Promotion</h1>
        <p class="text-secondary">
            We try to give our customers the best deals at the best prices. 
        </p>
    </div>
</div>
<div class="container">
    <div class="newseller">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3 class="text-secondary">New Arrivals</h3>
                <?php
                    newArrivals();
                ?>
            </div> 

            <div class="col-md-4 col-sm-6">
                <h3 class="text-secondary">Bestseller</h3>
                <?php
                    bestSellers();
                ?>
            </div>

            <div class="col-md-4 col-sm-6">
                <h3 class="text-secondary">Featured</h3>
                <?php
                    featured();
                ?>
            </div>

        </div>
    </div>
</div>