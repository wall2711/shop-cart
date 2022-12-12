<?php
    require_once('opencon.php');
        $strsql = "SELECT * FROM `tbl_user`";

        if($rsUser = mysqli_query($con,$strsql)){
            if(mysqli_num_rows($rsUser)>0){
                while($recUser = mysqli_fetch_array($rsUser)){
                    $username = $recUser['username'];
                    $password = $recUser['password'];
                    $name = $recUser['name'];
                }
                mysqli_free_result($rsUser);
            }
            else
                echo 'No record found!';
        }
        else
            echo 'ERROR: Could not execute your request!';
        


    require_once('closecon.php');

    if(isset($_POST['btnLogin'])){
        if($_POST['username'] === $username  && $_POST['password'] === $password){
            header("location:dashboard.php");
        }else{
            echo "invalid password|!";
        }
        
    }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
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
<div>
    <div class="container col-5 text-center card t-3">
            <div class="login-container">
                <div id="output"></div>
                    <div class="avatar"><img src="img/profile.png" class="img-fluid rounded-circle col-3"></div><br>
                        <div class="form-box">
                        <form method="post">
                            <div class="dialog mt-5">
                                <h1>Jordan Store</h1>
                                <input id="username" name="username" type="text" placeholder="User Name"><br>
                                <input id="password" name="password" type="password" placeholder="Password"><br>
                                <button id="btnLogin" class="btn btn-dark col-12 border mt-1 rounded-pill" name="btnLogin" type="submit">Login</button>
                                <a href="index.php" class="btn btn-dark col-12 border mt-1 rounded-pill">Cancel</a>
                            </div>
                            
                        </form>
                </div>
            </div>
        
	</div>
</div>





	
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>