<?php
   // define variables and set to empty values
   $name = $email = $telephone = $message = "";
   $nameErr = $emailErr = $telephoneErr = $messageErr = ""; 

     if (isset($_POST['submit'])) {
        if (empty($_POST["name"])) {
           $nameErr = "Please Enetr Your Name";
        }else {
           // $name = test_input($_POST["name"]);
          $name = $_POST["name"];
        }
        
        if (empty($_POST["email"])) {
           $emailErr = "Please Enetr Your E-mail";
        }else {
           // $email = test_input($_POST["email"]);
          $email = $_POST["email"];
           
           // check if e-mail address is well-formed
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid e-mail forma, please enetr a correct e-mail"; 
           }
        }
        if (empty($_POST["telephone"])) {
           $telephone = "";
        }else {
           // $telephone = test_input($_POST["telephone"]);
         $telephone = $_POST["telephone"];
        }
        
        if (empty($_POST["message"])) {
           $message = "";
        }
        else {
           // $message = test_input($_POST["message"]);
          $message = $_POST["message"];
         
        }
     }
    

   // function test_input($data) {
   //   $data = trim($data);
   //   $data = stripslashes($data);
   //   $data = htmlspecialchars($data);
   //   return $data;
   // }
   

?>



<?php
   echo "<h2>Your given values are as:</h2>";
   echo $name;
   echo "<br>";
   
   echo $email;
   echo "<br>";
   
   echo $message;
?>