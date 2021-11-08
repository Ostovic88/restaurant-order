<?php require_once('partials-front/menu.php'); ?>

<?php
//Check whether id is passed or not
if(isset($_GET['category_id']))
{
    //Category id is set and get id
    $category_id=$_GET['category_id'];
    //Get the category title based on category id
    $sql="SELECT title FROM tbl_category WHERE id=$category_id";
    $res=mysqli_query($db, $sql);
    $row=mysqli_fetch_assoc($res);
    $category_title=$row['title'];

}
else
{
    //category not passed
    header('location:'.SITEURL);
}
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on <a href="#" class="text-white">"<?=$category_title;?>"</a></h2>

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
                $sql2="SELECT * FROM tbl_food WHERE category_id=$category_id";
                $res2=mysqli_query($db, $sql2);
                $count2=mysqli_num_rows($res2);
                if($count2>0)
                {
                    while($row2=mysqli_fetch_assoc($res2))
                    {
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
                    echo "<div class='error'>Food not available!</div>";
                }

            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php require_once('partials-front/footer.php'); ?>