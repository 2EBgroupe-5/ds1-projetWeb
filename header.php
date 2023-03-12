
<html lang="fr">
<head>
        <meta charset="UFT-8">
        <title>mode </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="profile.css">

            <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

    </head>
<div class="menu">
            <center><div class="logo"><img src="logo.png" width="300px"  height="170px" ></div></center>
<nav>
    <ul>
   <button class="btn"><a href="index.php">Home</button>';
   <button class="btn"><a href="carte.php">Shop</button>';
   <button class="btn"><a href="contact.php">Review</button>';
        
       
        
      <?php
      if(!isset($_SESSION['Email'])){
        echo'<li><a href="login.php">login</a></li>';
       echo' <button class="btn"><a href="sign-up2.php">Sign up</a></button>';
      }else{
    
     echo ' <button class="btn"><a href="show_profil.php">Profil</a></button>';
     echo' <button class="btn"><a href="log_out.php">log out</a></button>';
     if ($_SESSION['types'] == 1) {

      echo' <button class="btn"><a href="add_product.html">ADD</a></button>';

}
      }
     

    

      
        ?>
    </ul>
</nav>

</div>
