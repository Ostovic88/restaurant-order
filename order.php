<?php require_once('partials-front/menu.php'); ?>

    <?php
    if(!isset($_SESSION['user_id']) and !isset($_SESSION['user_full_name']) and !isset($_SESSION['user_email'])) header("location:".SITEURL.'userlogin.php');
    else echo "";
    $message="";
        //Check whether food id is set or not
        if(isset($_GET['food_id']))
        {
            //Get food id and details of the selected food
            $food_id=$_GET['food_id'];
            $sql="SELECT * FROM tbl_food WHERE id=$food_id";
            $res=mysqli_query($db, $sql);
            $count=mysqli_num_rows($res);
            //Check whether the data is available or not
            if($count==1)
            {
                $row=mysqli_fetch_assoc($res);
                $title=$row['title'];
                $price=$row['price'];
                $image_name=$row['image_name'];
                $category_id=$row['category_id'];
            }
            else
            {
                //food not available
                header('location:'.SITEURL);
            }
        }
        else
        {
            //Redirect to home page
            header('location:'.SITEURL);

        }
    ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="post" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <?php
                            //Check whether the image is available or not
                            if($image_name=="")
                            {
                                //Image not available
                                //echo "<div class='error bg'>Image not available.</div>";
                                echo "<img src='images/no-image.jpg' width='100px';>";
                            }
                            else
                            {   
                                ?>
                                <img src="<?=SITEURL;?>images/food/<?=$image_name;?>" alt="" class="img-responsive img-curve">
                                <?php

                            }
                        ?>
                        
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?=$title;?></h3>
                        <input type="hidden" name="food" value="<?=$title;?>">
                        
                        <p class="food-price">$<?=$price;?></p>
                        <input type="hidden" name="price" value="<?=$price;?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                <!--ovde treba popuniti formu sa ulogovanim korisnikom-->
                <?php
                    $sql3="SELECT * FROM tbl_user WHERE id_user = {$_SESSION['user_id']}";

                    $res3=mysqli_query($db, $sql3);
                    
                    while($row3=mysqli_fetch_assoc($res3))
                    {
                        $user_nam=$row3['user_nam'];
                        $user_email=$row3['user_email'];
                        $user_address=$row3['user_address'];
                        $user_contact=$row3['user_contact'];
                    }
                ?>
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" value="<?=$user_nam;?>" class="input-responsive" required>

                    <div class="order-label">Contact</div>
                    <input type="tel" name="contact" value="<?=$user_contact?>" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" value="<?=$user_email;?>" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <input type="text" name="address" value="<?=$user_address;?>" class="input-responsive" required>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
                //Check whether button is clicked or not
                if(isset($_POST['submit']))
                {
                    $food=$_POST['food'];
                    $price=$_POST['price'];
                    $qty=$_POST['qty'];

                    $total=$price*$qty;
                    
                    $order_date=date("Y-m-d h:i:s"); //order date

                    $status="Ordered";

                    $customer_name=$_POST['full-name'];

                    $customer_contact=$_POST['contact'];

                    $customer_email=$_POST['email'];
                        
                        if(!validEmail($customer_email)){
                            echo "<div class='error text-center'><b>This is not an email!</b></div>";
                            return false;
                        }

                   $customer_address=$_POST['address'];

                    //Save the order in database
                    $sql2="INSERT INTO tbl_order SET 
                    food='$food',
                    price=$price,
                    qty=$qty,
                    total=$total,
                    order_date='$order_date',
                    status='$status',
                    id_user = {$_SESSION['user_id']},
                    
                    customer_name='$customer_name',
                    customer_contact='$customer_contact',
                    customer_email='$customer_email',
                    customer_address='$customer_address'
                    ";

                    $res2=mysqli_query($db, $sql2);
                    if($res2==true)
                    {
                        $_SESSION['order']="<div class='text-center'>Food ordered successfully!</div>";
                        statistics($db, $text='Food ordered successfully!');
                        //header('location:'.SITEURL.'user-order.php');
                    }
                    else
                    {
                        //failed to save order
                        $_SESSION['order']="<div class='error text-center'>Failed to order food!</div>";
                        header('location:'.SITEURL.'index.php');
                    }

                }
            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <?php require_once('partials-front/footer.php'); ?>