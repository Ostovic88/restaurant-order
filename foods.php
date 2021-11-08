<?php require_once('partials-front/menu.php'); 
if(!isset($_SESSION['user_id']) and !isset($_SESSION['user_full_name']) and !isset($_SESSION['user_email'])) header("location:".SITEURL.'userlogin.php');
else echo "";
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?=SITEURL;?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <br>
            <h3 class='error'>You have to be registered user that you can order anything...</h3>

            <?php
                //Display foods that are active
                $sql="SELECT * FROM tbl_food WHERE active='Yes'";
                $res=mysqli_query($db, $sql);
                $count=mysqli_num_rows($res);

                if($count>0)
                {
                    //foods available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $description=$row['description'];
                        $price=$row['price'];
                        $image_name=$row['image_name'];
                        ?>
                         <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php
                                    //Check whether image available or not
                                    if($image_name=="")
                                    {
                                        echo "<div class='error bg'>Image not available!</div>";
                                        echo "<img src='images/no-image.jpg' width='100px';>";

                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?=SITEURL;?>images/food/<?=$image_name;?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve";>
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?=$title;?></h4>
                                <p class="food-price"><?=$price;?></p>
                                <p class="food-detail">
                                    <?=$description;?>
                                </p>
                                <br>

                                <a href="<?=SITEURL;?>order.php?food_id=<?=$id;?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Food not found.</div>";
                }
            ?>
           

            


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php require_once('partials-front/footer.php'); ?>