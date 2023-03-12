<?php
session_start();
require('header.php');

?>
<!DOCTYPE html>

<html lang="fr">
    


    <body>


        <section class="text-and-video">




            <div class="text">
                <h3>A <span>PROPOS</span> DE NOUS</h3>
                <h1>Donnez à votre quotidien un nouveau style !</h1>
                <p>Vous pouvez maintenant acheter vos lunetees à la mode de la manière la plus simple et la plus rapide <br>
                  Nous sommes toujours à votre service</p>
               
                <a href="#"> <a href="carte.php" class="btn">Découvrir nos produits</a>
            </div>
        
            <div class="video">
                <video  autoplay muted loop   width="560" height="315" >" >
                    <source src="video.mp4">
                </video>
            </div>
          </section>


   
<section 
 class="shop   ">
 <h1 class="heading"> Nos <span> produits les plus vendus </span> </h1>
   <div class ="box-container">
   <div class="box">
            <div class="icons">
                <a href="carte.php" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="produits/1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Clubmaster</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="carte.php" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="produits/2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Aviator</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="carte.php" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="produits/3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Wayfarer</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="carte.php" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="produits/4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cat Eye </h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="carte.php" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="produits/5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Round</h3>
                <div class="amount"> $15.00 - $30.00 </div>
            </div>
        </div>


        

</section>

<!-- services section ends -->
<section class="services" id="services">

    <h1 class="heading"> Nos <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/icon-1.png" alt="">
            <h3>Free Delivery</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/icon-2.png" alt="">
            <h3>10 days returns</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/icon-3.png" alt="">
            <h3>offer & gifts</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/icon-4.png" alt="">
            <h3>secure payments</h3>
            <a href="#" class="btn">read more</a>
        </div>


        <div class="box">
            <img src="image/icon-4.png" alt="">
            <h3>Shopping Discounts</h3>
            <a href="#" class="btn">read more</a>
        </div>

    </div>
</section>
<!-- plan section starts  -->



 <section class="footer">

<img src="produits/top_wave.png" alt="">

<div class="share">
    <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
</div>

<div class="credit"> <span> </span> | 2022 All rights reserved </div>

</section>        
   

 </body>
</html>
