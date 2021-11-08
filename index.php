<?php require_once('partials-front/menu.php'); ?>


    <!-- Food Search Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?=SITEURL;?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food..">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- Food Search Section Ends Here -->

    <?php
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- Categories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
                //Create SQL query to display categories from database
                $sql="SELECT * FROM tbl_category WHERE active='Yes' and featured='Yes' LIMIT 3";
                $res=mysqli_query($db, $sql);

                $count=mysqli_num_rows($res);
                if($count>0)
                {
                    //Categories available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        ?>
                        <a href="<?=SITEURL;?>category-foods.php?category_id=<?=$id;?>">
                            <div class="box-3 float-container">
                                <?php
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image not available.</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?=SITEURL;?>images/category/<?=$image_name;?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?=$title;?></h3>
                            </div>
                        </a>
                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Category not added.</div>";
                }
                
            ?>

            

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <br>
            <h3 class='error'>You have to be registered user that you can order anything...</h3>

            <?php
            //Getting foods from database that are active and featured
            $sql2="SELECT * FROM tbl_food WHERE active='Yes' and featured='Yes' LIMIT 6";
            $res2=mysqli_query($db, $sql2);
            $count2=mysqli_num_rows($res);
            if($count2>0)
            {
                while($row2=mysqli_fetch_assoc($res2))
                {
                    //Get all values
                    $id=$row2['id'];
                    $title=$row2['title'];
                    $price=$row2['price'];
                    $description=$row2['description'];
                    $image_name=$row2['image_name'];
                    ?>
                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php
                                if($image_name=="")
                                {
                                    //Image not available
                                    echo "<div class='error bg'>Image not available.</div>";
                                    echo "<img src='images/no-image.jpg' width='100px';>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?=SITEURL;?>images/food/<?=$image_name;?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
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

                            <a href="<?=SITEURL;?>order.php?food_id=<?=$id;?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    <?php
                    

                }
            }
            else
            {
                echo "<div class='error'>Food not available.</div>";
            }
            ?>

            

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="<?=SITEURL;?>foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php require_once('partials-front/footer.php'); ?>