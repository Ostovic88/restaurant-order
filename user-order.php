<?php //require_once('config1/constants1.php'); ?>
<?php require_once('partials-front/menu.php'); ?>
<?php 
/* session_start(); */
if(!isset($_SESSION['user_id']) and !isset($_SESSION['user_full_name']) and !isset($_SESSION['user_email'])) header("location:".SITEURL.'userlogin.php');
else echo "";
$sql="SELECT * FROM tbl_order WHERE id_user = {$_SESSION['user_id']} and status='Ordered'";

$res=mysqli_query($db, $sql);

while($row=mysqli_fetch_assoc($res))
{
     $food=$row["food"]."<br>";
     $price=$row["price"]."<br>";
     $qty=$row["qty"]."<br>";
     $total=$row["total"]."<br>";
     $order_date=$row["order_date"]."<br>";
     $status=$row["status"]."<br>";
     

    ?>
        <section class="food-menu">
            <div class="container">
                <h2 class="text-center">Your order on <?=$order_date;?></h2>
                <p>Food:<?=$food;?></p>
                <p>Price:<?=$price;?></p>
                <p>Qty:<?=$qty;?></p>
                <p>Total:<?=$total;?></p>
                <p>Order date:<?=$order_date;?></p>
                <p>Status:<?=$status;?></p>
            </div>
        </section>
    <?php
}
?>

