<?php
    session_start();    
    require'products.php';

    if(isset($_POST['Process'])){
        if(isset($_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']]))
            $_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']] += $_POST['qty']; 
        else
            $_SESSION['cartItems'][$_POST['cartkey']][$_POST['radColor']] = $_POST['qty']; 

        $_SESSION['totalQuantity'] += $_POST['qty'];
        header("location: confirm.php");
    }
   


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
        <form method="post">
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
                <hr>
                <div class="row">
                    <?php   if(isset($_GET['itemkey']) && isset($arrProducts[$_GET['itemkey']])):  ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-grid2">
                                        <div class="product-image2 h-100">
                                            <img class="pic-1 h-100" src="img/<?php echo $arrProducts[$_GET['itemkey']]['photo1']; ?>">
                                            <img class="pic-2 h-100" src="img/<?php echo $arrProducts[$_GET['itemkey']]['photo2']; ?>">
                                        </div>            
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="col-12">
                                        <h1>
                                            <?php 
                                                echo $arrProducts[$_GET['itemkey']]['name']; 
                                            ?>
                                            <span class="badge bg-light">₱ <?php echo $arrProducts[$_GET['itemkey']]['price']; ?></span>
                                        </h1>
                                        <p>
                                            <?php echo $arrProducts[$_GET['itemkey']]['description']; ?>
                                        </p>
                                        <hr>
                                        <input type="hidden" name="cartkey" value="<?php echo $_GET['itemkey']; ?>">
                                        <label ><h4>Select size:</h4></label><br>
                                        <input type="radio" name="size8" id="size8" value="Black" checked>
                                        <label for="radBlack">8.5</label>
                                        <input type="radio" name="size9" id="9size" value="Red">
                                        <label for="radRed">9</label>
                                        <input type="radio" name="size9.5" id="size9.5" value="Green">
                                        <label for="radGreen">9.5</label>
                                        <input type="radio" name="size10" id="size10" value="BLue">
                                        <label for="radBlue">10</label>
                                        <hr>
                                        <label for=""><h4>Enter Quantity:</h4></label><br>
                                        <input type="number" name="qty" id="qty" placeholder="0" min="1" max="100" class="form-control" required><br>
                                        <button class="btn btn-dark btn-lg" type="submit" name="Process">Confirm Product Purchase</button>
                                        <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-arrow-left"></i> Cancel / Go Back</a>
                                    </div>
                                </div>
                    <?php  
                        else:
                            echo "No Product Found!";
                        endif;
                    ?>
                </div>
            </div>  
        </form>
        
        

    </body>
</html>