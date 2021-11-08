<?php require_once('partials-front/menu.php'); 
if(!isset($_SESSION['user_id']) and !isset($_SESSION['user_full_name']) and !isset($_SESSION['user_email'])) header("location:".SITEURL.'userlogin.php');
else echo "";
?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
                //Display all categories that are active
                $sql="SELECT * FROM tbl_category WHERE active='Yes'";
                $res=mysqli_query($db, $sql);
                $count=mysqli_num_rows($res);

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the values
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        ?>
                        <a href="<?=SITEURL;?>category-foods.php?category_id=<?=$id;?>">
                            <div class="box-3 float-container">
                                <?php
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        //Image available
                                        ?>
                                        <img src="<?=SITEURL;?>images/category/<?=$image_name;?>" alt="<?=$title;?>" class="img-responsive img-curve">
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
                    //Categories not available
                    echo "<div class='error'>Category not found.</div>";
                }
            ?>

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <?php require_once('partials-front/footer.php'); ?>