<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db="mydb";
$conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password);


if (isset($_POST['username'])) {
$uname=$_POST["username"];
    $pw=$_POST["password"];

    $result=mysqli_query($conn,"select * from mydb.login where username='".$uname."'and password='".$pw."' limit 1");
   if (mysqli_num_rows($result) == 1)
    {
       header('Location: http://localhost:8012/phpcourse/home.php');
        
    }
    else
        $msg="<p style='color:red'>"." Username or Password wrong </p>";
    
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 300px ;height: 380px;display: inline-block;text-align: left;padding-bottom: 10px}
    #xxx{
        
        display: block;
        text-align: center;
    }
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:cornflowerblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    #par{
       
        font-size: 20px
    }
</style>
</head>
<body>

<br><br><br><br><br><br>
   
<div id="xxx">
<form method="post">
   

  <div class="container">
      <div style="text-align:center ;display:block;height=200px ;color:cornflowerblue;"><p id="par">Sign in form</p></div>
        <?php 
            if(isset($msg)){ 
                echo '<div class="statusmsg">'.$msg.'</div>';
            } ?>
      <hr>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
      
      
  </div>

 
</form>
</div>
  <?php
    mysqli_close($conn);
    ?>
</body>
</html>
