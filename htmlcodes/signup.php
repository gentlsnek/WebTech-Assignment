<?php 

$alert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include("connections.php");
include("functions.php");

$username = $_POST["username"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$exists = false;

$check = "SELECT * FROM user_t WHERE username LIKE '$username'";  

//if(mysqli_query($con, $check)){
 //  $exists = true;
//}
//if(!$exists){
if($password == $cpassword){

    $sql = "INSERT INTO user_t (username, password, email, phone) VALUES ('$username','$password','$email','$phone');";

    $result = mysqli_query($con, $sql);

    if($result){
      $alert = true;
      header("location: login.php");
}
else{
    echo "signup failed";
}

}
else{
    echo "<script> alert('Passwords do not match'); </script>";
}
}


//if($exists)
///{
    //echo "<script> alert('Username Taken'); </script>";
//}
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>SignUp</title>
    <link rel="stylesheet" href="csscodes\signupstyle.css">
</head>
<body>
    <div class="grid-container">
        <div class="grid-container">
            <div class="grid-item item1">
                <a href="home.html"> <img alt="logo" src="images\logonobg2.png" class="logo"></a>
            </div>
            <div class="grid-item item2">
                <div class="menu">
                    <a href="home.php" class="mbuton home">Home</a>
                    <a href="sale.php" class="mbuton agent">Agents</a>
                </div>
            </div>
            <div class="grid-item item3">
                <div class="loginrecd" style="height: 1000px;">
                    <form class="login-signup" method="POST">
                        <legend style="text-decoration: underline;">SIGN-UP</legend><br>
                        <lable for="username" class="un">USERNAME</lable><br><br>
                        <input class="uni" type="text"  name="username" min="4" required><br><br>
                        <lable for="password" class="un">PASSWORD</lable><br><br>
                        <input class="uni" type="password" name="password" min="8" required><br><br>
                        <lable for="cpassword" class="un">CONFIRM-PASSWORD</lable><br><br>
                        <input class="uni" type="password" name="cpassword" min="8" required><br><br>
                        <lable for="email" class="un">EMAIL</lable><br><br>
                        <input name="email" type="email" class="uni" required><br><br>
                        <lable for="phone" class="un">PHONE</lable><br><br>
                        <input name="phone" type="phone" class="uni" required min="10"><br><br><br>
                        <input type="submit" value="SUBMIT" style="font-size: 32px;"><br><br>
                        <a href="login.php" class="signup">Already have an account? Sign in</a>
                    </form>
                </div> 
            </div>
            <div class="grid-item item5">
                <div class="c1"><p class="cd">Contact<br>Details.</p></div>
                <div class="c2"><p class="ca">Address<br><a class="ca" href="https://www.google.com/maps/place/Kela+bagan/@25.9619969,86.0213086,16z/data=!4m22!1m15!4m14!1m6!1m2!1s0x396c4850e05bee9b:0x1b8d67402d4eb863!2sManipal+University+Jaipur,+Jaipur-Ajmer+Express+Highway,+Dehmi+Kalan,+Near+GVK+Toll+Plaza,+Jaipur,+Rajasthan+303007!2m2!1d75.5652343!2d26.8438552!1m6!1m2!1s0x39ede9053299141d:0xfaf92151af6de1d5!2sNH+527E,+Baheri,+Bihar+847105!2m2!1d86.0446493!2d25.9289618!3m5!1s0x39ede9204dcd5379:0xf615a731d26f05ce!8m2!3d25.9620031!4d86.0307782!16s%2Fg%2F11nxp9rnx8?entry=ttu">
     TIGER SECURITY,<br>near Kela Began,Village-bakmandal,<br> Post-bakmandal, P. S-baheri,<br> Dist-Dqrbhanga, Bihar 847105<br>
                </a></p></div>
                <div class="c3"><p class="cd" style="font-size: 50px;">Connect<br>With<br>Us.</p></div>
                <div class="c4"><p class="cp"> Phone: +91 7055403961 <br> Email: TigerSecurity@hotmail.com </p></div>
           </div>
          </div> 
          <?php
          if($alert){
              echo "<script> alert(`Signup Succesful redirecting`)</script>";
          
                    } 
                  //  else{
                    //    echo "<script> alert(`Signup Unsuccesfull`)</script>";
                  //  }
             ?>

</body>
</html>