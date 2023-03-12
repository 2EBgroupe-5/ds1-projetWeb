<?php
require('header.php');
require('config.php');
   //verifie la connexion
        // recuperer les donnees
        $User=$_POST['User'];
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $phone=$_POST['Phone'];
        $password=$_POST['Password'];
        $role = 'normal';
        //inserer les donnees dans la table 
     $sql="INSERT INTO user (username,name,email,phone_number,password,role) VALUES (? , ? , ? , ? , ? , ?)";
     $stmt=$conn->prepare($sql);
     $stmt->bind_param('ssssss',$User,$Name,$Email,$phone,$password,$role);
     $stmt->execute();
    mysqli_close($conn);
    header("Location: index.php");

?>
