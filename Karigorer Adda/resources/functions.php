<?php
    // helper functions for database
    function setMessage($message){
        if (!empty($message)) {
            $_SESSION['message'] = $message;
        } else {
            $message = "";
        }
    }
    


    function displayMessage(){
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }
    


    function redirect($location){
        header("Location: $location");
    }
    


    function query($sql){
        // bringing the same connection from config
        global $connection;
        return mysqli_query($connection, $sql);
    }



    function confirm($result){
        global $connection;
        if (!$result) {
            die("There is a problem with the query -> " . mysqli_error($connection));
        }
    }



    function escape_string($string){
        global $connection;
        // this is to prevent any sql injections
        return mysqli_real_escape_string($connection, $string);
    }
    


    function fetch_array($result){
        return mysqli_fetch_array($result);
    }



    // checking login details for user if they are in the database
    function loginUser(){
        if (isset($_POST['submit'])) {
            $username = escape_string($_POST['username']);
            $password = escape_string($_POST['password']);

            $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
            confirm($query);

            if (mysqli_num_rows($query) == 0) {
                setMessage("Login Failed!!! Please Check Password or Username");
                redirect("login.php");
            }else {
                while($row = mysqli_fetch_assoc($query)){
                    if ($row['accountType'] == "admin") {                                        
                        $_SESSION['username'] = $username;
                        redirect("admin"); 
                    } else {
                        $_SESSION['username'] = $username;
                        redirect("home.php");
                    }
                }   

            }

        }
    }



    // checking login details for user if they are in the database
    function registerUser(){
        if (isset($_POST['submit'])) {
            $username = escape_string($_POST['name']);
            $password = escape_string($_POST['password']);
            $contact = escape_string($_POST['number']);
            $email = escape_string($_POST['email']);


            // $query1 = query("SELECT * FROM users WHERE username = '{$username}' OR email = '{$email}' LIMIT 1");
            // confirm($query);
            // $result = fetch_array($query);

            // if ($result) { 
            //     if ($result['username'] === $username) {
            //       setMessage("Username already exists");
            //     }
            
            //     if ($result['email'] === $email) {
            //         setMessage("email already exists");
            //     }
            // }

            $query2 = query("INSERT INTO users (username, contact, email, password) VALUES ('{$username}', '{$contact}', '{$email}', '{$password}')");
            confirm($query2);

            $_SESSION['username'] = $username;
  	        $_SESSION['success'] = "You are now logged in";

        }
    }



    // function for the first slider changing the pictures
    function sliderOne(){
        $query = query("SELECT * FROM sliderone");
        confirm($query);

        while ($row = fetch_array($query)) {
            $sliderOne  = <<<DELIMETER
                <div>
                    <img src="{$row['sliderurl']}" class="img-fluid" alt="{$row['slidername']}" />
                </div>
            DELIMETER;
            echo $sliderOne;
        }
    }



    // functions for retriving featured products on home page slider
    function sliderFeatures(){
        $query = query("SELECT * FROM products WHERE productSection = 'featured'");
        confirm($query);

        while ($row = fetch_array($query)) {
            $sliderFeatures = <<<DELIMETER
                <div class="col-md-2 product pt-md-5">
                    <a href="item.php?id={$row['productID']}"><img src="{$row['productImage']}" class="img-fluid" alt="Image 1" /></a>
                    <div class="cart-details">
                        <h6 class="pro-title p-0"><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="pro-price py-2">
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span>Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                        <div class="cart mt-4">
                            <a class="border site-btn btn-span" href="../resources/cart.php?add={$row['productID']}">
                                <i class="fas fa-shopping-cart p-2"></i>
                                <span>Add to cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $sliderFeatures;
        }
    }



    // functions for retriving featured products on home page slider
    function sliderPictures(){
        $query = query("SELECT * FROM products WHERE productCategoryID = '2'");
        confirm($query);

        while ($row = fetch_array($query)) {
            $sliderPictures = <<<DELIMETER
                <div class="col-md-2 product pt-md-5">
                    <a href="item.php?id={$row['productID']}">
                        <img src="{$row['productImage']}" class="border img-fluid" alt="Product 1">
                    </a>
                </div>
            DELIMETER;
            echo $sliderPictures;
        }
    }



    // functions for retriving getting the new products
    function newArrivals(){
        $query = query("SELECT * FROM products WHERE productSection = 'new'");
        confirm($query);

        while ($row = fetch_array($query)) {
            $newArrivals = <<<DELIMETER
                <div class="row py-3">
                    <div class="col-md-3 p-0">
                        <div class="items border">
                            <a href="item.php?id={$row['productID']}">
                                <img src="{$row['productImage']}" alt="Image 1" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 p-0 py-4 py-md-0">
                        <div class="px-4">
                            <h6><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                            <div class="rating pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span class="text-color">Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $newArrivals;
        }
    }



    // functions for retriving getting the best sold products
    function bestSellers(){
        $query = query("SELECT * FROM products WHERE productSection = 'bestseller'");
        confirm($query);

        while ($row = fetch_array($query)) {
            $bestSellers = <<<DELIMETER
                <div class="row py-3">
                    <div class="col-md-3 p-0">
                        <div class="items border">
                            <a href="item.php?id={$row['productID']}">
                                <img src="{$row['productImage']}" alt="Image 1" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 p-0 py-4 py-md-0">
                        <div class="px-4">
                            <h6><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                            <div class="rating pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span class="text-color">Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $bestSellers;
        }
    }



    // functions for retriving getting the featured products
    function featured(){
        $query = query("SELECT * FROM products WHERE productSection = 'featured3'");
        confirm($query);

        while ($row = fetch_array($query)) {
            $featured = <<<DELIMETER
                <div class="row py-3">
                    <div class="col-md-3 p-0">
                        <div class="items border">
                            <a href="item.php?id={$row['productID']}">
                                <img src="{$row['productImage']}" alt="Image 1" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 p-0 py-4 py-md-0">
                        <div class="px-4">
                            <h6><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                            <div class="rating pb-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span class="text-color">Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $featured;
        }
    }



    // functions for retriving getting the types of brands
    function brands(){
        $query = query("SELECT * FROM brands");
        confirm($query);

        while ($row = fetch_array($query)) {
            $brands = <<<DELIMETER
                <div>
                    <img src="{$row['brandImage']}" alt="{$row['brandName']}" class="img-fluid">
                </div>
            DELIMETER;
            echo $brands;
        }
    }



    // functions for retriving what clients have been saying about havnly beds
    function clients(){
        $query = query("SELECT * FROM clients");
        confirm($query);

        while ($row = fetch_array($query)) {
            $brands = <<<DELIMETER
                <div>
                    <p>
                        {$row['clientMessage']}
                    </p>
                    <h5 class="m-0">{$row['clientName']}</h5>
                    <small class="pb-1">{$row['clientJob']}</small>
                </div>
            DELIMETER;
            echo $brands;
        }
    }



    // functions for the products and retrieving them using helper functions
    function getProducts(){
        $query = query("SELECT * FROM products");
        confirm($query);

        while ($row = fetch_array($query)) {
            $product = <<<DELIMETER
                <div class="col-md-2 product pt-md-5">
                    <a href="item.php?id={$row['productID']}"><img src="{$row['productImage']}" class="img-fluid" alt="Image 1" /></a>
                    <div class="cart-details">
                        <h6 class="pro-title p-0"><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="pro-price py-2">
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span>Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                        <div class="cart mt-4">
                            <a class="border site-btn btn-span" href="../resources/cart.php?add={$row['productID']}">
                                <i class="fas fa-shopping-cart p-2"></i>
                                <span>Add to cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $product;
        }
    }



    // function for getting categories
    function getCategories(){
        $query = query("SELECT * FROM categories");
        confirm($query);

        // looping through the list of categories in the database
        while ($row = fetch_array($query)) {
            $category = <<<DELIMETER
                <li class="nav-item">
                    <a href='category.php?id={$row['catID']}' class='nav-link'>{$row['catTitle']}</a>
                </li>
            DELIMETER;
            echo $category;
        }
    }


    // getting products from a specific category
    function getProductsCategory(){
        $query = query("SELECT * FROM products WHERE productCategoryID =" . escape_string($_GET['id']) . " ");
        confirm($query);

        while ($row = fetch_array($query)) {
            $productCategory = <<<DELIMETER
                <div class="col-md-2 product pt-md-5">
                    <a href="item.php?id={$row['productID']}"><img src="{$row['productImage']}" class="img-fluid" alt="Image 1" /></a>
                    <div class="cart-details">
                        <h6 class="pro-title p-0"><a href="item.php?id={$row['productID']}">{$row['productTitle']}</a></h6>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="pro-price py-2">
                            <h5>
                                <small><s class="text-secondary">Rs.{$row['productPrice']}</s></small>
                                <span>Rs.{$row['productPriceDiscount']}</span>
                            </h5>
                        </div>
                        <div class="cart mt-4">
                            <a class="border site-btn btn-span" href="../resources/cart.php?add={$row['productID']}">
                                <i class="fas fa-shopping-cart p-2"></i>
                                <span>Add to cart</span>
                            </a>
                        </div>
                    </div>
                </div>
            DELIMETER;
            echo $productCategory;
        }
    }


    
    // for the contact form
    function sendMessage(){
        if (isset($_POST['submit'])) {
            $to = "karigoreradd@gmail.com";
            $_name = $_POST['name'];
            $_email = $_POST['email'];
            $_subject = $_POST['subject'];
            $_message = $_POST['message'];
            
            $headers = "From: {$_name} {$_email}";
            setMessage("Your message has been sent Thank You");
            redirect("contact.php");
            
            // the reason this is highlighted is because for sending email you need to download a thrid party to help send emails

            // $result = mail($to, $_subject, $_message, $headers);
            // var_dump($result);

            // if (!$result) {
            //     echo "ERROR";
            // }else {
            //     echo "SENT";
            // }

            
            // change the smtp port

            // if(isset( $_POST['name']))
            //     $name = $_POST['name'];
            // if(isset( $_POST['email']))
            //     $email = $_POST['email'];
            // if(isset( $_POST['message']))
            //     $message = $_POST['message'];
            // if(isset( $_POST['subject']))
            //     $subject = $_POST['subject'];

            // $content="From: $name \n Email: $email \n Message: $message";
            // $recipient = "chiko.mutandwa100@gmail.com";
            // $mailheader = "From: $email \r\n";
            // mail($recipient, $subject, $content, $mailheader) or die("Error!");
            // echo "Email sent!";
            // redirect("contact.php");
        }
    }


    // ******************************************************
    // ADMIN FUNCTIONS **************************************
    // ******************************************************



    // this function will get the name from the category table in the database and will return its name
    function getCategoryTitle($productCategoryID){
        $query = query("SELECT * FROM categories WHERE catID = '{$productCategoryID}'");
        confirm($query);
        
        while($row = fetch_array($query)) {
            return $row['catTitle'];
        }
    }



    // this function will get the name from the brand table in the database and will return its name
    function getBrandTitle($productBrandID){
        $query = query("SELECT * FROM brands WHERE brandID = '{$productBrandID}'");
        confirm($query);
        
        while($row = fetch_array($query)) {
            return $row['brandName'];
        }
    }

    

    // this function will show all the categories in a dropdown list 
    function categoryDropdownList(){
        $query = query("SELECT * FROM categories");
        confirm($query);
        
        while($row = fetch_array($query)) {
            $categories = <<<DELIMETER
                <option value="{$row['catID']}">{$row['catTitle']}</option>
            DELIMETER;
            echo $categories;
        }  
    }



    // this function will show all the brands in a dropdown list 
    function brandDropdownList(){
        $query = query("SELECT * FROM brands");
        confirm($query);
        
        while($row = fetch_array($query)) {
            $brands = <<<DELIMETER
                <option value="{$row['brandID']}">{$row['brandName']}</option>
            DELIMETER;
            echo $brands;
        }  
    }



    // this function will the nuber of items in a table
    function countTotalRecords($table){
        return mysqli_num_rows(query('SELECT * FROM '.$table));
    }



    // this function will show the admin products in the database
    function getAdminProducts(){
        $query = query("SELECT * FROM products");
        confirm($query);

        while ($row = fetch_array($query)) {
            $categoryName = getCategoryTitle($row['productCategoryID']);
            $brandName = getBrandTitle($row['brandID']);

            $product = <<<DELIMETER
                <tr id="product-{$row['productID']}" >
                    <th>{$row['productID']}</th>
                    <td>{$row['productTitle']}</td>
                    <td>{$categoryName}</td>
                    <td>{$brandName}</td>
                    <td>{$row['productPrice']}</td>
                    <td>{$row['productPriceDiscount']}</td>
                    <td>{$row['productQuantity']}</td>
                    <td>{$row['productAvailability']}</td>
                    <td>{$row['productDelivery']}</td>
                    <td><button class="btn btn-danger" onclick="deleteProduct('{$row['productID']}')"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                </tr>
            DELIMETER;
            echo $product;
        }
    }



    // this function will show the admin categories in the database
    function getAdminCategories(){
        $query = query("SELECT * FROM categories");
        confirm($query);

        while ($row = fetch_array($query)) {
            $category = <<<DELIMETER
                <tr>
                    <th>{$row['catID']}</th>
                    <td>{$row['catTitle']}</td>
                    <td><a class="btn btn-danger" href="index.php?deleteCategoryID={$row['catID']}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                </tr>
            DELIMETER;
            echo $category;
        }

    }



    // this function will show the admin categories in the database
    function getAdminOrders(){
        $query = query("SELECT * FROM orders");
        confirm($query);

        while ($row = fetch_array($query)) {
            $order = <<<DELIMETER
                <tr>
                    <th>{$row['orderID']}</th>
                    <td>{$row['productID']}</td>
                    <td>{$row['orderAmount']}</td>
                    <td>{$row['orderDate']}</td>
                    <td>{$row['orderStatus']}</td>
                    <td><a class="btn btn-danger" href="index.php?deleteOrderID={$row['orderID']}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                </tr>
            DELIMETER;
            echo $order;
        }
    }



    // this function will show the admin the types of user in the database and their details in the database
    function getAdminUsers(){
        $query = query("SELECT * FROM users");
        confirm($query);

        while ($row = fetch_array($query)) {
            $order = <<<DELIMETER
                <tr>
                    <td>{$row['userId']}</td>
                    <th>{$row['username']}</th>
                    <td>{$row['contact']}</td>
                    <td>{$row['accountType']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    <td><a class="btn btn-danger" href="index.php?deleteUserID={$row['userId']}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                </tr>
            DELIMETER;
            echo $order;
        }
    }



    function addProducts(){
        if (isset($_POST['add'])) {
            $productTitle = escape_string($_POST['productTitle']); 
            $productCategoryID = escape_string($_POST['productCategoryID']);
            $brandID = escape_string($_POST['brandID']);
            $productPrice = escape_string($_POST['productPrice']);
            $productPriceDiscount = escape_string($_POST['productPriceDiscount']);
            $productImage = escape_string($_FILES['image']['name']);
            $productImageTemporary = escape_string($_FILES['image']['tempName']); 
            $rand = rand(1,100);
            $description = escape_string($_POST['description']);
            $short_desc = escape_string($_POST['short_desc']);
            $productQuantity = escape_string($_POST['productQuantity']);
            $productSection = escape_string($_POST['productSection']);
            $productAvailability = escape_string($_POST['productAvailability']);
            $productDelivery = escape_string($_POST['productDelivery']);


            $query = query("INSERT INTO products(productTitle, productCategoryID, brandID, productPrice, productPriceDiscount, productImage, productDescription, 
                            productShortDescription, productQuantity, productSection, productAvailability, productDelivery) 
                            VALUES 
                            ('{$productTitle}', '{$productCategoryID}', '{$brandID}', '{$productPrice}', '{$productPriceDiscount}', '{$productImage}', '{$description}', 
                            '{$short_desc}', '{$productQuantity}', '{$productSection}', '{$productAvailability}', '{$productDelivery}')");
            if($query){
                move_uploaded_file($_FILES['image']['name'], "images/$productImage");
                $msg = "Product has successfully being added";
            }else {
                $productImagemsg = "Sorry product has not being added";
            }
            
            setMessage($msg);
            redirect("index.php?products");
        }
    }
    

    function addCategories(){
        if (isset($_POST['add'])) {
            $catTitle = escape_string($_POST['catTitle']); 

            $query = query("INSERT INTO categories (catTitle) VALUES ('{$catTitle}')");
            confirm($query);

            setMessage("New category added");
        }
    }
    

    function addUsers(){
        if (isset($_POST['add'])) {
            $username = escape_string($_POST['username']); 
            $contact = escape_string($_POST['contact']); 
            $accountType = escape_string($_POST['accountType']); 
            $email = escape_string($_POST['email']); 
            $password = escape_string($_POST['password']); 

            $query = query("INSERT INTO users (username, contact, accountType, email, password) VALUES ('{$username}', '{$contact}', '{$accountType}', '{$email}', '{$password}')");
            confirm($query);

            setMessage("New user was added added");
        }
    }
    


    function updateProducts(){
        if (isset($_POST['update'])) {
            $productTitle = escape_string($_POST['productTitle']); 
            $productCategoryID = escape_string($_POST['productCategoryID']);
            $brandID = escape_string($_POST['brandID']);
            $productPrice = escape_string($_POST['productPrice']);
            $productPriceDiscount = escape_string($_POST['productPriceDiscount']);
            $productImage = escape_string($_FILES['image']['name']);
            $productImageTemporary = escape_string($_FILES['image']['tempName']); 
            $rand = rand(1,100);
            $description = escape_string($_POST['description']);
            $short_desc = escape_string($_POST['short_desc']);
            $productQuantity = escape_string($_POST['productQuantity']);
            $productSection = escape_string($_POST['productSection']);
            $productAvailability = escape_string($_POST['productAvailability']);
            $productDelivery = escape_string($_POST['productDelivery']);
            
            move_uploaded_file($_FILES['image']['name'], "images/$productImage");
            
            

            $query = "UPDATE products SET "; $query .="productTitle = '{$productTitle}', ";  $query .="productCategoryID = '{$productCategoryID}',";  $query .="brandID = '{$brandID}',";  
                                             $query .="productPrice = '{$productPrice}', ";  $query .="productPriceDiscount = '{$productPriceDiscount}',";  $query .="productImage = '{$productImage}',";  
                                             $query .="productDescription = '{$description}',";  $query .="productShortDescription = '{$short_desc}',"; $query .="productQuantity = '{$productQuantity}',";  
                                             $query .="productSection = '{$productSection}',";  $query .="productAvailability = '{$productAvailability}',";  $query .="productDelivery =  '{$productDelivery}'";
                                             $query .="WHERE productID".escape_string($_GET['id']);

            setMessage($msg);
            redirect("index.php?products");
        }
    }




?>
