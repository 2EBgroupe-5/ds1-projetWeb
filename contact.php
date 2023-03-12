<?php
session_start();
require('header.php');
require('config.php');


$hasError = false;
$isSuccess = false;
$message = '';
if(count($_POST) >= 3){
   
    //verifie la connexion 
    if(!$conn){
           die("Erreur".mysqli_connect_error());
    }
    else{

        // recuperer les donnees
    
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
       $comm=$_POST['comm'];
  
       
 
        //inserer les donnees dans la table 
        $sql="INSERT INTO review  VALUES ('$Name','$Email','$comm')";
 
        //execution de la requete
        if(mysqli_query($conn,$sql)){
            $isSuccess = true;
            $message = "thank you for sharing your opinon";
        }
        else{
            $hasError = true;
            $message = "Insertion échoué";
        }
    }
    // fermer la connexion
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UFT-8">
        <title>mode </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="tp">
        
         <!-----formulaire---->
        <div class="frm">
            <?php
                if($hasError){
                    echo "<div>error: $message</div>";
                } else if($isSuccess){
                    echo "<div>success: $message</div>";
                }
            ?>
            <form name="f" onsubmit="validation()"  method="post" action="contact.php">
               <h1 class="txt">Review</h1>
               <input type="email" required name="Email" placeholder="E-mail@gmail.com" <?php if(isset($_SESSION['Email'])){
                echo("value={$_SESSION['Email']}");}?>
               > <br><br>
               <input type="text" name="Name" placeholder="Name" ><br><br>
               <textarea name="comm" placeholder="Type a comment..."></textarea><br><br>
               <input type="submit" name="sign" value="Send" id="btn-form"><br>
            </form>
        </div>

    </body>

</html>
