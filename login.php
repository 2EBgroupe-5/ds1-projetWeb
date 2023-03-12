<?php
require('header.php');
require('config.php');
session_start();


        // recuperer les donnees
       
       
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // username and password sent from form 
            
            $myusername = $_POST['Email'];
            $mypassword = $_POST['Password']; 



            $sql = "SELECT id , types FROM users WHERE email = '$myusername' and password = '$mypassword'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          
            

            $count = mysqli_num_rows($result);
            
            // If result matched $myusername and $mypassword, table row must be 1 row
              
            if($count == 1) {

               $_SESSION['Email'] = $myusername;
               $_SESSION['types'] = $row['types'];
               header("location: index.php");
               
            }else {
               $error = "Your Login Name or Password is invalid";
            }
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
      
            <form name="f"   method="post" action="login.php">
               <h1 class="txt">Login</h1>
            
  
               <input type="email" required name="Email" placeholder="E-mail@gmail.com"><br><br>
            
               <input type="password" required name="Password" placeholder="Password"><br><br>
               <input type="submit" name="login" value="login" id="btn-form"><br>
            </form>
        </div>
    </body>

   
</html>