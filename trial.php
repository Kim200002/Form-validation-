<html>
<head>
</head>
<body>
<style type = "text/css">
span{
    color:red;
}
body{
    background-image:stall.jpg;
}
</style>
<?php 
//set the variables to be empty
$errorweb = $errorname = $erroremail = "";
$name = $email = $website = $comment = $gender = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])){
        $errorname = "Please enter your name!!!";
    }else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-z A-Z-']*&/",$name)){
            $errorname = "Please enter a valid name!!";
        }
    }
   if(empty($_POST["email"])){
       $erroremail = "Please enter your email!!";
   }else{
       $email = test_input($_POST["email"]);
       if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $erroremail = "Enter valid email!!";
       }
   }
   if(empty($_POST["website"])){
       $errorweb = "Please identify the web page!!";
   }else{
       $website = test_input($_POST["website"]);
   }
    $comment = test_input($_POST["comments"]);
    $gender = test_input($_POST["gender"]);
}
function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>
<span class="error">*require field</span>
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"> <span class="error">*<?php echo $errorname; ?></span></br></br>
Email: <input type="email" name="email">*<?php echo $erroremail; ?></span></br></br>
Website: <input type = "website" name= "website">*<?php echo $errorweb; ?></span></br></br>
Comment: <textarea name = "comments" rows="5"cols="40"></textarea></br></br>
Gender:<input type="radio" name="gender" value = "male">Male 
<input type="radio"name="gender" value = "female">Female
<input type= "radio" name = "gender" value = "other">Other</br></br>
<input type="submit" value="submit">
</form> 
<?php
echo "<h2> Your input is:</h2>";
echo "$name </br>";
echo "$email </br>";
echo "$website </br>";
echo "$comment </br>";
echo "$gender </br>";
?>
</body>
</html>