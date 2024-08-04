<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'product');

$sql = "SELECT * from item WHERE features=1";

$features = $con->query($sql);
?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Product Details:</h2> 
                <br> <br>
                <?php

                while($product = mysqli_fetch_assoc($features)):



                ?>
                <div class ="col-md-5">
                    <h4> <?= $product['title'];?></h4>
                    <img src="<?= $product['images'];?>" alt="<?= $product['title'];?>" width="200" height="200"/>
                    <p class="price"> RS <?= $product['price'];?></p>
                    <p class="desc"> <?= $product['description'];?></p>
                    <p class="bname"> <?= $product['brandname'];?></p>
                    </a>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>