<?php //require_once("user/config/constants.php"); ?>
<?php require_once('partials-front/menu.php'); ?>
<?php 
    $message=""; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration User</title>
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/style.css"> 
    </head>
    <body>
        <div class="container">
            <div class="wrapper">
                <div class="login" text-center>
                    <form class='text-center' action="" method="post">
                        <a href="<?=SITEURL;?>">Back to Main Home Page</a>
                        <br><br>
                        <h1>Registration User</h1><br>

                        User Name:
                        <br>
                        <input type="text" name="nam" placeholder="Enter your name" > <br><br>
                        User Email:
                        <br>
                        <input type="email" name="email" placeholder="Enter your email" > <br><br>
                        User Password:
                        <br>
                        <input type="password" name="password" placeholder="Enter your password" > <br><br>
                        User Contact:
                        <br>
                        <input type="number" name="contact" placeholder="Enter your phone contact" > <br><br>
                        User Address:
                        <br>
                        <input type="text" name="address" placeholder="Enter your address" > <br><br>

                        <button><b>Confirm</b></button><br>
                        <br>
                    </form>

                    <?php
                        if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['nam']) and isset($_POST['contact']) and isset($_POST['address'])){
                            //$email=$_POST['email'];
                            //$password=md5($_POST['password']);
                            $user_email=mysqli_real_escape_string($db, $_POST['email']);
                            $user_password=mysqli_real_escape_string($db, md5($_POST['password']));
                            $user_name=filter_input(INPUT_POST,'nam', FILTER_SANITIZE_STRING);
                            $user_contact=filter_input(INPUT_POST,'contact', FILTER_SANITIZE_NUMBER_INT);
                            $user_address=filter_input(INPUT_POST,'address', FILTER_SANITIZE_STRING);
                            if($user_email!="" and $user_password!=""){
                                if(validString($user_email) and validString($user_password)){
                                    $sql="INSERT INTO tbl_user SET
                                        user_nam='$user_name',
                                        user_email='$user_email',
                                        user_contact='$user_contact',
                                        user_password='$user_password',
                                        user_address='$user_address'
                                    ";
                                
                                    $res=mysqli_query($db, $sql);
                                    
                                    if($res==true){
                                        $_SESSION['add']="<div class='text-center'>User registred successfully. Please login now...</div>";
                                        statistics($db, $text='User registred successfully.');
                                        //$message="You are registred.";
                                        header('location:'.SITEURL.'userlogin.php');
                                        
                                    }
                                    else{     
                                        $message="<div class='bg text-center'>User did not register!</div>";
                                    }
                                }   
                                else{
                                    $message="Email or password contain illegal characters!";
                                }
                            }
                            else
                                $message="All data are required!";
                            }
                        else{
                            $message="<p class='text-center'>Welcome to register page!</p>";
                        }
                        
                            
                    ?>
                    <p><?= $message?></p>
                </div>
            </div>
        </div>
    </body>
</html>



<?php require_once('partials-front/footer.php'); ?>