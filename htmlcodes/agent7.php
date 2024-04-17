<?php
session_start();


if(array_key_exists('userid', $_SESSION)){
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('connections.php');
    
$datef = $_POST["date1"];
$datet = $_POST["date2"];
$timef = $_POST["time1"];
$timet = $_POST["time2"];
$address = $_POST["address"];
$agentid = 8;
$username = $_SESSION['userid'];

$sql = "INSERT INTO `book_t` (`user_name`, `agent_id`, `datef`, `datet`, `timef`, `timet`, `address`) 
VALUES ( '$username', '$agentid', '$datef', '$datet', '$timef', '$timet', '$address')";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('Booking Succesful')</script>";
}
}
}
else{
   echo "<script> alert('Login First'); 
        window.open('login.php');
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent7</title>
    <link rel="stylesheet" href="csscodes\agentstyle.css">
</head>
<body>
    <!-- basic stancil i belive is picture on the left with name and avalibility
    on the right in like big font say 44px then below that is more details and pastworks
and schedule and price to take with 2 buttons that will be enquire or request-->
<body>
    <div class="grid-container">
        <div class="grid-item item1">
            <a href="home.php"> <img alt="logo" src="images\logonobg2.png" class="logo"></a>
        </div>
        <div class="grid-item item2">
            <div class="menu">
                <a href="home.php" class="mbuton home">Home</a>
                <a href="sale.php" class="mbuton agent">Agents</a>
                <?php

               
if(!array_key_exists('userid', $_SESSION)){
echo " <a href='login.php' class='mbuton login'>Login</a>";
}
else{
    $checkuser = $_SESSION['userid'];
    echo "<a href='user.php' class='mbuton login'> $checkuser </a>";
}
?>
            </div>
        </div>
        <div class="grid-item item3">
            <div class="apicture">
                <img src="images/agent7.jpg">
            </div>
            <div class="adetails">
                <p class="heading">Shaq, Shaquille O'Neal</p>
                <p class="detals">The retired basketball legend turns to security and bodyguarding to kill time after his retirement.
                     His unnatural and huge build naturally makes opponents scared of him giving him a psychological advantage.
                      When under need of safety you can count on him to dunk on the head of your opps.
                </p>
                <button class="abook">Book</button>
                
            </div>
            <div class="book hidden">
                <form class="inputshit" method="get">
                <lable for="date1">Date : From</lable>
                <input type="date" name="date1">
                <label for="date2">Till</label>
                <input type="date" name="date2">
                <br><br>
                <lable for="time1">Time : </lable>
                <select name="time1" id="t1">
                    <option value="null">select</option>
                    <option value="900">09:00</option>
                    <option value="1000">10:00</option>
                    <option value="1100">11:00</option>
                    <option value="1200">12:00</option>
                    <option value="1300">13:00</option>
                    <option value="1400">14:00</option>
                    <option value="1500">15:00</option>
                    <option value="1600">16:00</option>
                    <option value="1700">17:00</option>
                    <option value="1800">18:00</option>
                </select>
                <lable for="time2">Time : </lable>
                <select name="time2" id="t2">
                    <option value="null">select</option>
                    <option value="1800">18:00</option>
                    <option value="1900">19:00</option>
                    <option value="2000">20:00</option>
                    <option value="2100">21:00</option>
                    <option value="200">22:00</option>
                    <option value="2300">23:00</option>
                    <option value="2400">00:00</option>
                </select><br><br>
                <lable for="address">Address</lable><br>
                    <textarea name="address" rows="3" cols="60"></textarea><br><br>
                <input type="submit" value="submit" id="submit">
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
</div>
<script src="jscodes/script.js"></script>
</body>
</html>