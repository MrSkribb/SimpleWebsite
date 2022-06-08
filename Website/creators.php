<?php 

require_once "connection.php"; 

// Handles search term user input 
if (isset($_GET["creatorname"])) {
    $searchTerm = $_GET["creatorname"];
  } else {
    $searchTerm = "";
  }
  
  $creators = getCreators($searchTerm); // Forms search query with user input and code from getCreators function 
?>


<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <title>Australian Photographers</title>
</head>

<body>
    <header> 
        <h1>Our Creators</h1>

        <nav>
          <ul>
            <li><a href="index.html"> Return to Home</a></li>
            <li><a href="creators.php"> View Creators</a></li>
            <li><a href="keymedia.html"> View Key Media</a></li>
            <li><a href="aboutus.html"> About Us</a></li>  
          </ul>
        </nav>
    </header>

    <div id="page">
     
      <div class="creatormenu">
        <div class="item">
          <a href="creator1.html"> 
          <img src="images/creator1.jpg" alt="Creator 1 with camera">
          </a>
          <h3>Creator 1 - Romain</h3>
          <p>Romain is an established creator, view his page here.</p>
        </div>

        <div class="item">
          <a href="creator2.html">
          <img src="images/creator2.jpg" alt="Creator 2 with camera">
          </a>
          <h3>Creator 2 - Dylan</h3>
          <p>Dylan is an established creator, view his page here.</p>
        </div>

        <div class="item">
          <a href="creators.php">
          <img src="images/creator3.jpg" alt="Creator 3 with camera">
          </a>
          <h3>Creator 3 - Roxanne</h3>
          <p>Roxanne is an upcoming creator! Page coming soon.</p>
        </div> 
      </div>
      <!-- *Free* Image 3 taken from: https://pixabay.com/photos/night-camera-photographer-photo-1927265/-->

    </div>

    <div class='container'>

      <div class='creatordata'>
        <h3>Creator roster</h3>

        <table>

          <thead> 
            <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Experience</th>
              <th>Location</th>
            </tr>
          </thead>

          <tbody> <!-- Displays data from creators table in the SQL DB-->
          <?php foreach ($creators as $creator) { ?>
            <tr>
              <td><?= $creator["name"]?></td>
              <td><?= $creator["age"]?></td>
              <td><?= $creator["experience"]?></td>
              <td><?= $creator["location"]?></td>
            </tr>
    <?php } ?> 
          </tbody>

      </table>

      <!-- Form handles user search query -->
      <form action="creators.php" method="GET">
          <input type="text" name="creatorname" placeholder='Search creator name'>
          <input type="submit" value="Search" > 
      </form>
   
      </div>
    </div>

    <footer>
        <p> © 2022 - n/a | 
        <a href="contactus.php">Contact Us </a> | </p>
    </footer>





</body>

</html>