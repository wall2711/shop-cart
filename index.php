<?php
    session_start();
    require'products.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Jordan shoe Online Shop | Shopping Cart</title>
</head>
    <body>
        <div class="container">
            <div class="row mt-3">
                    <div class="col-5">
                        <img src="img/download.png" alt="">
                    </div>
                    <div class="col-2 text-right">
                    <a href="cart.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge bg-light text-dark">
                            <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                        </span>
                    </a>
                            
                </div>        
                <div class="col-2 text-right">
                    <a href="login.php" class="btn btn-secondary">
                        <i class="fa-solid fa-right-to-bracket"></i> Login
                    </a>
                            
                </div>          
            </div>
            <hr> 
            <div class="row">
                    <?php
                        if(isset($arrProducts))
                            foreach($arrProducts as $key => $product) {
                    ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid2">
                                        <div class="product-image2">
                                            <a href="details.php?itemkey=<?php echo $key; ?>">
                                                <img class="pic-1" src="img/<?php echo $product['photo1']; ?>">
                                                <img class="pic-2" src="img/<?php echo $product['photo2']; ?>">
                                            </a>
                                            <a class="add-to-cart" href="details.php?itemkey=<?php echo $key; ?>">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                Add to cart
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h3 class="title">
                                                <?php echo $product['name']; ?>
                                                <span class="badge bg-dark">₱<?php echo $product['price']; ?></span>
                                            </h3>
                                            
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }else{
                                echo ('No Product Detected!');
                            }
                        ?>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
</html>