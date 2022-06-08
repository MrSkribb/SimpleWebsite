
<?php
	

	if(ISSET($_POST['buttonSubmit']) && $_POST['buttonSubmit'] == "submit"){

        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['state']) && !empty($_POST['message'])){


            $db = new SQLite3("auphotos.db");

            $firstname=$_POST['firstname'];
            $lastname=$_POST['lastname'];
            $state=$_POST['state'];
            $message=$_POST['message'];
        
            $query="INSERT INTO contacts(firstname, lastname, state, message) VALUES('$firstname', '$lastname', '$state', '$message')";
        
            $db->exec($query);
            $db->close();
            echo "<h1>Thank you <span>{$firstname}</span>!</h1>";
            echo "<p>Your form has been recieved.</p>";
            header("Refresh: 5;URL=index.html");

            

        } else {
            
            echo '<script type="text/javascript">
                   window.onload = function () {
                       alert("All fields are required.");
                       location.replace("./contactus.php"); } 
                </script>'; 
           
             
        }
    }

    ?>
    

