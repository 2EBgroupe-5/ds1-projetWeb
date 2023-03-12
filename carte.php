<?php
session_start();
require('header.php');

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UFT-8">
        <title>mode </title>
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <header>
        <div class="container">
            <a href="#" class="logo">Welcome To Our Shop</a>
            <a href="#" class="bag">
                <i class="fas fa-shopping-bag"></i>
         <span class="quantity">P</span> 
            </a>
        </div>
    </header>
    <body>
    <h1 class="heading"> Glasses  <span> For Sun</span> </h1>
    <div class="cart">
        <a href="#" class="closecart"><i class="fas fa-times"></i></a>
        <div id="minicart">                      
            <table id="lista-carrito" class="u-full-width">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <a href="#" id="vaciar-carrito" class="button u-full-width">
                Clean Cart <i class="far fa-trash-alt"></i>
            </a>
        </div>
    </div>
    <div class="cards container">
   
        <div class="card">
            <img src="produits/1.jpg" alt="">
            <p class="title">Club Master</p>
            <p class="description">Shine in The Club</p>
            <p class="price">$180</p>
            <a href="#" class="button" data-id="1">Add to Card</a>
        </div>

        <div class="card">
            <img src="produits/2.jpg" alt="">
            <p class="title">Butterfly</p>
            <p class="description">Women's Road To Shine</p>
            <p class="price">$150</p>
            <a href="#" class="button" data-id="2">Add to Card</a>
        </div>

        <div class="card">
            <img src="produits/3.jpg" alt="">
            <p class="title">Avero</p>
            <p class="description">Best for eyes</p>
            <p class="price">$160</p>
            <a href="#" class="button" data-id="3">Add to Card</a>
        </div>

    </div>

   
    <section>
    <div class="cards container">
   
   <div class="card">
       <img src=".1.jpg" alt="">
       <p class="title">The Master</p>
       <p class="description">Shine in The Club</p>
       <p class="price">$185</p>
       <a href="#" class="button" data-id="4">Add to Card</a>
   </div>

   <div class="card">
       <img src=".2.jpg" alt="">
       <p class="title">SUNshine</p>
       <p class="description">Be There</p>
       <p class="price">$100</p>
       <a href="#" class="button" data-id="5">Add to Card</a>
   </div>

   <div class="card">
       <img src=".3.jpg" alt="">
       <p class="title">Camo</p>
       <p class="description">Comforat in Your Eyes</p>
       <p class="price">$140</p>
       <a href="#" class="button" data-id="6">Add to Card</a>
   </div>

</div>


    </section>
    <h1 class="heading"> Glasses <span> For Eyes </span> </h1>
<section>
<div class="cards container">
   
   <div class="card">
       <img src="01.jpg" alt="">
       <p class="title">Comforty</p>
       <p class="description">Shine in The Club</p>
       <p class="price">$75</p>
       <a href="#" class="button" data-id="7">Add to Card</a>
   </div>

   <div class="card">
       <img src="00.jpg" alt="">
       <p class="title">Clear View</p>
       <p class="description">Be There</p>
       <p class="price">$80</p>
       <a href="#" class="button" data-id="8">Add to Card</a>
   </div>

   <div class="card">
       <img src="000.jpg" alt="">
       <p class="title">HD Now</p>
       <p class="description">Comforat in Your Eyes</p>
       <p class="price">$40</p>
       <a href="#" class="button" data-id="9">Add to Card</a>
   </div>

</div>

</section>
<section>
<div class="cards container">
   
   <div class="card">
       <img src="0000.jpg" alt="">
       <p class="title">Crestal Clear</p>
       <p class="description">Shine in The Club</p>
       <p class="price">$55</p>
       <a href="#" class="button" data-id="10">Add to Card</a>
   </div>

   <div class="card">
       <img src="00.jpg" alt="">
       <p class="title">Water Clear</p>
       <p class="description">Be There</p>
       <p class="price">$60</p>
       <a href="#" class="button" data-id="11">Add to Card</a>
   </div>

   <div class="card">
       <img src="000.jpg" alt="">
       <p class="title"> Be There</p>
       <p class="description">Comforat in Your Eyes</p>
       <p class="price">$95</p>
       <a href="#" class="button" data-id="12">Add to Card</a>
   </div>

</div>
</section>

    </body>
    <script type="text/javascript" src="cart.js"></script>
   
</html>