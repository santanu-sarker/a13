<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 13</title>
</head>
<body>

 <?php
    print_r($_POST);
 ?>


<form action="" method="post">
    <input type="text" placeholder="Enter Your First Name" name="fName">  <br/> 
    <input type="text" placeholder="Enter Your Last Name" name="lastName"> <br/> 
    <input type="email" placeholder="Enter Your Email" name="email"> <br/> 
    <input type="password" placeholder="Enter Your password" name="password"> <br/> 
    <input type="submit" name="submit">
</form>
    
</body>
</html>