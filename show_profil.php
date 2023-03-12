<?php
session_start();    
require('header.php');  
require('product.php');
require ('config.php');
 

  
  // Prepare the SQL query
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  $sql2 = "SELECT COUNT(id) as counter FROM users;";
  $result2=mysqli_query($conn,$sql2);
  
  // Check if the query returned any rows
  if (mysqli_num_rows($result) > 0) {
    // Output the data for the first row
    while($row = mysqli_fetch_assoc($result)) {
          

        echo " <br>
        <div class='wrapper'>
        <div class='left'>
            <img src='ahmed.png' 
            alt='user' width='100'>
            <h4>$row[username]</h4>
        </div>
        <div class='right'>
            <div class='info'>
                <h3>Information</h3>
                <div class='info_data'>
                     <div class='data'>
                        <h4>Email</h4>
                        <p>$row[email]</p>
                     </div>
                     <div class='data'>
                       <h4>Phone</h4>
                        <p>$row[phone]</p>
                  </div>
                </div>
            </div>
          
          <div class='projects'>
                <h3>Projects</h3>
                <div class='projects_data'>
                     <div class='data'>
                        <h4>Recent</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                     </div>
                     <div class='data'>
                       <h4>Most Viewed</h4>
                        <p>dolor sit amet.</p>
                  </div>
                </div>
            </div>
          
            <div class='social_media'>
                <ul>
                  <li><a href='#'><i class='fab fa-facebook-f'></i></a></li>
                  <li><a href='#'><i class='fab fa-twitter'></i></a></li>
                  <li><a href='#'><i class='fab fa-instagram'></i></a></li>
              </ul>
          </div>
        </div>
    </div>
    ";
 }

} else {
    echo "0 results";
}

?>

