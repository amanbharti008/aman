
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
 <title> New Service </title>
      <link rel="stylesheet" href="css/newservicestyle.css">
      <style> 
      
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
      </style>
  

</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr =  $servicereqErr = $CompanyErr = "";
$email = $servicereq = $Company = "";
$name = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["Company"])) {
    $Company = "";
  } else {
    $Company = test_input($_POST["Company"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$Company)) {
      $CompanyErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["servicereq"])) {
    $servicereqErr = "This field should not be empty.";
  } else {
    $servicereq = test_input($_POST["servicereq"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


<h2 style="text-align:center;">New Service Required</h2>

<!-- <form method="post" action="newserviceform.php" align="center">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Company: <input type="text" name="Company" value="<?php echo $Company;?>">
  <span class="error"><?php echo $CompanyErr;?></span>
  <br><br>
  Service Required: <textarea name="servicereq" rows="5" cols="40"><?php echo $servicereq;?></textarea>
  <br><br>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> -->


<div class="container">
  <form method="post" action="newserviceform.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

    
    <label for="lname">Company</label>
    <input type="text" id="lname" name="Company" placeholder="Your company/organisation's name..">

    <label for="subject">Services Required</label>
    <textarea id="subject" name="servicereq" placeholder="Services required.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>





</body>
</html>
