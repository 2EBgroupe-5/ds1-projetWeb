<?php
    session_start();
    session_unset(); // supprimer les variables de session 
    session_destroy(); // supprimer la session 

    header('location:index.php'); // redirection vers la page index
    
?>