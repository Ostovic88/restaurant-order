<?php require_once('partials-front/menu.php'); ?>

    <!-- Food Search Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
            //Get the search keyword
            //$search=$_POST['search'];
            $search=@mysqli_real_escape_string($db, $_POST['search']);
            ?>
            
            <h2>Foods on Your Search <a href="#" class="text-white">"<?=$search;?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
            
            //Get foods based on search keyword

            $sql="SELECT * FROM tbl_food WHERE title LIKE '%$search%' or description LIKE '%$search%'";
        	$res=mysqli_query($db, $sql);
            $count=mysqli_num_rows($res);
            if($count>0)
            {
                //Food available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get details
                    $id=$row['id'];
                    $title=$row['title'];
                    $price=$row['price'];
                    $description=$row['description'];
                    $image_name=$row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php
                                //Check whether image name is available or not
                                if($image_name=="")
                                {
                                    echo "<div class='error bg'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image available
                                    ?>
                                    <img src="<?=SITEURL;?>images/food/<?=$image_name;?>" alt="" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?=$title;?></h4>
                                <p class="food-price">$<?=$price;?></p>
                                <p class="food-detail">
                                    <?=$description;?>
                                </p>
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                    </div>

                    <?php
                }
            }
            else
            {
               echo "<div class='error text-center bg'><b>Food not found!</b></div>";
            }

            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php require_once('partials-front/footer.php'); ?>