<?php //require_once("../admin/config/constants.php"); ?>
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
        <title>Login User</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
    <br><br>
        <?php
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            
        ?>
        <div class="container">
            <div class="wrapper">
                <div class="login" text-center>
                    <form class='text-center' action="<?=SITEURL;?>userlogin.php" method="POST">
                        <a href="<?=SITEURL;?>">Back to Main Home Page</a>
                        <br><br>
                        <h1>Login User</h1><br>
                        
                        <br>
                        Email:
                        <br>
                        <input type="email" name="email" placeholder="Enter your email" required> <br><br>
                        Password:
                        <br>
                        <input type="password" name="password" placeholder="Enter your password" required> <br><br>
                        <button><b>Confirm</b></button><br>
                        <br>
                    </form>


                    <?php
                        if(isset($_POST['email']) and isset($_POST['password']))
                        {
                            //$email=$_POST['email'];
                            //$password=md5($_POST['password']);
                            $email=mysqli_real_escape_string($db, $_POST['email']);
                            $password=mysqli_real_escape_string($db, md5($_POST['password']));
                            if($email!="" and $password!="")
                            {
                                if(validString($email) and validString($password))
                                {
                                    $sql="SELECT * FROM tbl_user WHERE user_email='{$email}' and user_password='{$password}'";
                                    $res=mysqli_query($db, $sql);
                                    $count=mysqli_num_rows($res);
                                    if($count==1)
                                    {  
                                        while($row=mysqli_fetch_assoc($res))
                                        {
                                        //$user_id=$row['id_user'];
                                        
                                        //$message="You are logged in successfully like" ." ". $row['full_name'];
                                        $_SESSION['user_id']=$row['id_user'];
                                        $_SESSION['user_full_name']=$row['user_nam'];
                                        $_SESSION['user_email']=$row['user_email'];
                                        header("location:".SITEURL.'index.php');
                                        }

                                    }
                                    else
                                        $message="<div class='bg text-center'>User or password doesn't exist!</div>";
                                }
                                else
                                    $message="Email or password contain illegal characters!";
                            }
                            else
                                $message="All data are required!";
                        }
                        else
                            $message="<p class='text-center '>Welcome to login page!</p>";
                    
                    ?>

                    <p><?= $message?></p>
                </div>
            </div>
        </div>
    </body>
</html>

<?php require_once('partials-front/footer.php'); ?>

