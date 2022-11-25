<?php
    session_start();
    require_once('dataset.php');    

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
    <title>Online clothing Shop</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-10">
                <h1><i class="fa fa-store"></i> Online clothing Shop</h1>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">                        
                        <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                </a>
            </div>            
        </div>
        <hr>

        <div class="row">
            <?php if(isset($arrProducts)): ?>
                <?php foreach($arrProducts as $key => $product): ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="product-grid2 card">
                            <div class="product-image2">
                                <a href="details.php?k=<?php echo $key; ?>">
                                    <img class="pic-1" src="img/<?php echo $product['photo1']; ?>">
                                    <img class="pic-2" src="img/<?php echo $product['photo2']; ?>">
                                </a>                        
                                <a class="add-to-cart" href="details.php?k=<?php echo $key; ?>"><i class="fa fa-cart-plus"></i> Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title">
                                    <?php echo $product['name']; ?>
                                    <span class="badge badge-dark">₱ <?php echo $product['price']; ?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 card p-5">
                    <h3 class="text-center text-danger">No Product Found!</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php 
        
    
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>