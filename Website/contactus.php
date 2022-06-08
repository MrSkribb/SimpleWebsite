<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <title>Australian Photographers</title>
</head>

<body>

  <header>
    <h1>Australian Animal Catalogue</h1>
    <nav>
      <ul>
        <li><a href="index.html"> Return to Home</a></li>
        <li><a href="creators.php"> View Creators</a></li>
        <li><a href="keymedia.html"> View Key Media</a></li>
        <li><a href="aboutus.html"> About Us</a></li>  
      </ul>
    </nav>
  </header>


    <form id="contact" action="insert.php" method="POST"> <!-- Form for user input, handled by insert.php -->

      <h3>Contact Form</h3>

      <!-- Names collection -->
      <hr> 
      <div class="input">
        <label for="firstname">First Name</label>
        <div class="firstname">   
          <input type="text" name="firstname" id="firstname" placeholder="John">
        </div> 
      </div>
      
      <div class="input">
        <label for="lastname">Last Name</label>
        <div class="lastname">
          <input type="text" name="lastname" id="lastname" placeholder="Doe">
        </div>
      </div>
      <hr>

      <!-- Location collection -->
      <div class="state">
        <label for="state">State</label>
        <br>
        <select name="state" id="state" type="text">
        <option value=""></option> <!-- For testing purposes -->
          <option value="QLD">QLD</option>
          <option value="NSW">NSW</option>
          <option value="VIC">VIC</option>
          <option value="NT">NT</option>
          <option value="WA">WA</option>
          <option value="SA">SA</option>
          <option value="ACT">ACT</option>
          <option value="TAS">TAS</option>
        </select>
      </div>
      <hr>

      <!-- Message collection -->
      <label for="message">Please type your message below:</label>
      <div class="message">
        <textarea id="message" name="message" rows="4" cols="40" placeholder="Message ..."></textarea>
      </div>

      <input type="submit" name="buttonSubmit" onClick="validateForm(event)" value="submit">
   
    </form>

    <footer>
        <p> © 2022 - n/a | 
        <a href="contactus.php">Contact Us </a> | </p>
    </footer>

</body>
</html>