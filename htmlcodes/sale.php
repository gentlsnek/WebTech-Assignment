<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Sale</title>
    <link rel="stylesheet" href="csscodes\salestyle.css">
</head>
<body>
    <div class="grid-container">
        <div class="grid-item item1">
            <a href="home.php"> <img alt="logo" src="images\logonobg2.png" class="logo"></a>
        </div>
        <div class="grid-item item2">
            <div class="menu">
                <a href="home.php" class="mbuton home">Home</a>
                <!--a href="sale.html" class="mbuton agent">Agents</a-->
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
       <a href="agent1.PHP"><div class=sale><img class="agentimg" src="images\agent1.jpg">
        <p>Name: Terminator</p>
        <p>Availability: available</p>
        </div>
        </a>
        <a href="agent2.php"><div class=sale><img class="agentimg" src="images/agent2.jpg">
            <p>Name: Rambo</p>
            <p>Availability: available</p>
            </div>
            </a>
        <a href="agent3.php"><div class=sale><img class="agentimg" src="images/agent3.jpg">
                <p>Name: Chris</p>
                <p>Availability: available</p>
                </div>
        </a>
        <a href="agent4.php"><div class=sale><img class="agentimg" src="images/agent4.jpg">
            <p>Name: Chris </p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent5.php"><div class=sale><img class="agentimg" src="images/agent5.jpg">
            <p>Name: Conor </p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent6.php"><div class="sale"><img class="agentimg" src="images/agent6.jpg">
            <p>Name: Khabib</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent7.php"><div class=sale><img class="agentimg" src="images/agent7.jpg">
            <p>Name: Shaq</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent8.php"><div class=sale><img class="agentimg" src="images/agent8.jpg">
            <p>Name: John</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent9.php"><div class=sale><img class="agentimg" src="images/agent9.jpg">
            <p>Name: James</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent10.php"><div class=sale><img class="agentimg" src="images/agent10.jpg">
            <p>Name: Agent 47</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent11.php"><div class=sale><img class="agentimg" src="images/agent11.jpg">
            <p>Name: Kman</p>
            <p>Availability: available</p>
            </div>
        </a>
        <a href="agent12.php"><div class=sale><img class="agentimg" src="images/agent12.jpg">
            <p>Name: Jeffry</p>
            <p>Availability: available</p>
            </div>
        </a>
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
</body>
</html>