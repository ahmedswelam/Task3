<!--    
    Create a form with the following inputs (name, email, password, address, linkedin url)
     Validate inputs then return message to user . 
    * validation rules ... 
    name  = [required ]
    email = [required,email]
    password = [required,min length = 6]
    address = [required,length = 10 chars]
    linkedin url = [required | url]
-->

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<h2>Register</h2>
    
<p><span class="error" style="color: red">* required field</span></p>
    
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
        Name: <input type="text" name="name" value="">
        <span class="error" style="color: red">* </span>
        <br><br>
        E-mail: <input type="text" name="email" value="">
        <span class="error" style="color: red">* </span>
        <br><br>
        Password: <input type="password" name="password" value="">
        <span class="error" style="color: red">* </span>
        <br><br>
        Address: <input type="text" name="address" value="">
        <span class="error" style="color: red">* </span>
        <br><br>
        linkedin URL: <input type="text" name="linkedin" value="">
        <span class="error" style="color: red">* </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

<h2>Your Input:</h2>
</body>
</html>






<?php


$result = '';
$result_str = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $linkedin = $_POST['linkedin'];

  if (empty($_POST["name"])) {
       # code...
       echo $errors = "Name is required" .'<br>';
      } else {
       echo $result_str = $name .'<br>';

      }

    
      if (empty($_POST["email"])) {
        # code...
        echo $errors = "Email is required" .'<br>';
    }else{
        echo $result_str = $email .'<br>';
    }

    if (empty($_POST["password"])) {
        # code...
        echo $errors = "password is required" .'<br>';
    }elseif ($_POST["password"] <= "6" ) {
        # code...
        echo $errors = "password less than 6" .'<br>';
    }else{
    echo $result_str = $password .'<br>';  
    }

    if (empty($_POST["address"])) {
        # code...
        echo $errors = "adsress is required" .'<br>';
    }elseif ($_POST["address"] <= "10" ) {
        # code...
        echo $result_str = $address .'<br>';  
    }else{
        echo $errors = "address less than 10" .'<br>'; 
    }

    if (empty($_POST["linkedin"])) {
        # code...
        echo $errors = "linkedin is required" .'<br>';
    }else{
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedin)) {
        echo $result_str = $linkedin .'<br>';  
    }
    }
}

?>

