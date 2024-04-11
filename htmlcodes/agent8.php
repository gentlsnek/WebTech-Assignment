
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include('connections.php');
    /*
$datef = $_POST["date1"];
$datet = $_POST["date2"];
$timef = $_POST["time1"];
$timet = $_POST["time2"];
$address = $_POST["address"];
$agentid = 1;
$userid = $_SESSION['userid'];

$sql = "INSERT INTO book_t (user_id,agent_id,datef,datet,timef,timet,address)
 VALUES ('$userid','$agentid,'$datef','$datet','$timet','$timef','$address');";

$result = mysqli_query($con, $sql);

if($result){
    echo "<script> alert('Booking Succesful')</script>;";
}*/
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent8</title>
    <link rel="stylesheet" href="csscodes\agentstyle.css">
</head>
<body>
    <!-- basic stancil i belive is picture on the left with name and avalibility
    on the right in like big font say 44px then below that is more details and pastworks
and schedule and price to take with 2 buttons that will be enquire or request-->
<body>
    <div class="grid-container">
        <div class="grid-item item1">
            <a href="home.html"> <img alt="logo" src="images\logonobg2.png" class="logo"></a>
        </div>
        <div class="grid-item item2">
            <div class="menu">
                <a href="home.php" class="mbuton home">Home</a>
                <a href="sale.html" class="mbuton agent">Agents</a>
                <a href="login.php" class="mbuton login">Login</a>
            </div>
        </div>
        <div class="grid-item item3">
            <div class="apicture">
                <img src="images/agent8.jpg">
            </div>
            <div class="adetails">
                <p class="heading">John, John Cena</p>
                <p class="detals">If after basketball and mma legends you still feel unsafe we have the wwe heavyweight champ for your aid too. Hustle, 
                    loyalty and respect that’s 
                    what you can expect from him while his service gives attitude adjustment to your opps while “my time is now” plays in the background.
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