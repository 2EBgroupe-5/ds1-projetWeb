


<?php
session_start();    
require('header.php');  
require('product.php');
require ('config.php');
 
  
  // Prepare the SQL query
  $sql = "SELECT * FROM product";
  $result = mysqli_query($conn, $sql);
  $sql2 = "SELECT COUNT(id) as counter FROM product;";
  $result2=mysqli_query($conn,$sql2);
  
  // Check if the query returned any rows
  if (mysqli_num_rows($result) > 0) {
    // Output the data for the first row
    while($row = mysqli_fetch_assoc($result)) {
          

        echo " <br>
        <section 
 class='shop'>
        <br>
        <div class ='box-container'>
       <div class='box'>
                <div class='icons'>
                    <a href='carte.php' class='fas fa-shopping-cart'></a>
                    <a href='#' class='fas fa-heart'></a>
                    <a href='#' class='fas fa-eye'></a>
                </div>
                <div class='image'>
                    <img src='produits/1.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>$row[name]</h3>
                    <div class='amount'>$row[price] </div>
                </div>
            </div>
      </section>
";
 }

} else {
    echo "0 results";
}

?>


