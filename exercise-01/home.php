<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Start the session
session_start();
?>
<?php
?>
<h2>Registration Form</h2>
<form method="post" action="<?php ($_SERVER["PHP_SELF"]);?>">  
  <label>Full Name </label><input type="text" name="name" value="<?php echo $fullname;?>" required>
  <br><br>
  <label>Username </label>  <input type="text" name="username" value="<?php echo $username;?>" required>
  <br><br>
  <label>Password </label><input type="password" name="password" value="<?php echo $password;?>" required>
  <br><br>
  <label>Confirm Password </label>  <input type="password" name="confpassword" value="<?php echo $confpassword;?>" required>
  <br><br>
  <label>Email </label><input type="email" name="email" value="<?php echo $email;?>" required>
  <br><br>
  <label>Phone </label>  <input type="number" name="phoneNb" value="<?php echo $phoneNb;?>" required>
  <br><br>
    <label>Date of Birth </label><input type="date" name="bdate" value="<?php echo $bdate;?>" required>
  <br><br>
  <label>Social Security Number </label>  <input type="number" name="ssn" value="<?php echo $ssn;?>" >
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
if (isset($_POST['submit'])) {
    $fullname =$_POST["name"];
    $username =$_POST["username"];
    $password =$_POST["password"];
    $confpassword =$_POST["confpassword"];
    $email =$_POST["email"];
    $phoneNb =$_POST["phoneNb"];
    $bdate =$_POST["bdate"];
    $ssn =$_POST["ssn"];
    $conn=  mysqli_connect("localhost","root","","user");
     $sql="INSERT INTO `user`.`user` (`fullname`, `username`, `password`, `email`, `phoneNb`, `bdate`, `ssn`) VALUES ( '$fullname', '$username','$password', '$email','$phoneNb', '$bdate','$ssn');";
     $result=mysqli_query($conn,$sql);
     echo '<script>alert("Register Successfuly")</script>'; 
    if($password === $confpassword){


        echo "<h2>Your Input:</h2>";
        echo $fullname;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phoneNb;
        echo "<br>";
        echo $bdate;
        echo "<br>";
        echo $ssn;
    }else{
        echo '<script>alert("Password Not Correct")</script>';
    }
}

?>
  <form class="modal-content animate" action="<?php ($_SERVER["PHP_SELF"]);?>"method="post">
    <div class="imgcontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>   
      <button type="submit" name="btn">Login</button>
    </div>
  </form>
  <?php
  if (isset($_POST['btn'])) {
    $uname =$_POST["uname"];
      $pss = $_POST["psw"];
      if (!empty($uname) && !empty($pss)){
        $con= mysqli_connect("localhost", "root","", "user");
        $sql="select * from user where password='$pss' AND username='$uname'";    
            $result=mysqli_query($con,$sql);
            $nbrows=mysqli_num_rows($result);
            if ($nbrows == 1) {
       
                echo '<script>alert("Welcome Hussein")</script>';
            }
else{
    echo '<script>alert("Invalid Username")</script>';

}
    
              }        mysqli_close($con);
    
         }
        
    
    

  ?>

</body>
</html>