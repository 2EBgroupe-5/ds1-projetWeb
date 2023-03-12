<?php
require('header.php');
require('config.php');
$hasError = false;
$isSuccess = false;
$message = '';
if(count($_POST) >= 5){

    


    //verifie la connexion 
    if(!$conn){
           die("Erreur".mysqli_connect_error());
    }
    else{

        // recuperer les donnees
        $User=$_POST['User'];
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $phone=$_POST['phone'];
        $password=$_POST['Password'];
 
        //inserer les donnees dans la table 
        $sql="INSERT INTO users (username, name, email, phone, password) VALUES ('$User','$Name','$Email','$phone','$password')";
 
        //execution de la requete
        if(mysqli_query($conn,$sql)){
            $isSuccess = true;
            $message = "User creat please visit our <a href='login.php'> login</a> page to connect";
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
    <body>

         <!-----formulaire---->
        <div class="frm">
            <?php
                if($hasError){
                    echo "<div>error: $message</div>";
                } else if($isSuccess){
                    echo "<div>success: $message</div>";
                }
            ?>
            <form name="f" onsubmit="validation(event)"  method="post" action="sign-up2.php">
               <h1 class="txt">Sign Up</h1>
               <input type="text" required name="User" placeholder="User-Name" ><br><br>
               <input type="text" required name="Name" placeholder="Name" ><br><br>
               <input type="email" required name="Email" placeholder="E-mail@gmail.com"><br><br>
               <input type="text" required name="phone" placeholder="Phone-number" ><br><br>
               <input type="password" required name="Password" placeholder="Password"><br><br>
               <input type="submit" name="sign" value="Sign Up" id="btn-form"><br>
            </form>
        </div>
    </body>

    <script type="text/javascript" src="sign-up.js"></script>
</html>