<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>

<main>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
            <span class="navbar">Categories:</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav mr-auto">
                  <?php
                      getCategories();
                  ?> 
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </nav>

        <section class="text-center mb-4">
            <div class="row wow fadeIn">
                <?php
                  getProducts();
                ?>
            </div>
        </section>
    </div>
</main>

<?php
    include(Front_End . DS . "footer.php");
?>