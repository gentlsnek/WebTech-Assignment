<?php
session_start();
include('connections.php');
$userid = $_SESSION['userid'];
$id = session_id();
$sql ="SELECT * FROM book_t WHERE user_name = '$userid';";

$result = mysqli_query($con, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-profile</title>
    <link rel="stylesheet" href="csscodes/userstyles.css">
</head> 
<body>
    <div class="grid-container">
        <div class="grid-item item1">
             <img alt="logo" src="images\logonobg2.png" class="logo">
        </div>
        <div class="grid-item item2">
            <div class="menu">
                <!-- a href="home.html" class="mbuton home">Home</a -->
                <a href="home.php" class="mbuton agent">Home</a>
                <a href="sale.php" class="mbuton login">Agent</a>
                <!--a href="photos.html" class="mbuton login">Photos</a-->   
            </div>
        </div>
        <div class="grid-item item3">
                 <div class="pfp">
                 <img src="images/userpfp.jpg" alt="dummypfp" position="left">
                 </div>
                 <div class="userinfo">
                 <form>
                    <?php  
                   $usersql = "SELECT * FROM user_t WHERE username = '$userid'";
                   $fetchuser = mysqli_query($con, $usersql);
                   $user = mysqli_fetch_assoc($fetchuser);
                   $username = $user['username'];
                   $useremail = $user['email'];
                   $userphone = $user['phone'];


                    echo "<lable for='user_name'>User Name:  $username  </lable><br>";
                    echo "<lable for='user_name'>Email:  $useremail  </lable><br>";
                    echo "<lable for='user_name'>Phone No:  $userphone  </lable><br>";
                    echo "<lable for='user_session'>Session ID: $id </lable><br>";                 
                    ?>
                 </form>
                 <form action="logout.php">
                    <input class="lobtn" type="submit" value="logout">
                 </form>
                 </div>
                 <div class="userhistory">
                 <center>
                        <h1 style="font-family: Calibri">History</h1>
                    </center>
                 <table class="historytable" style="border-width: 1px;" border="1">
                    <tr>
                        <th>Book id</th>
                        <th>Agent Name</th>
                        <th>Date From</th>
                        <th>Date Till</th>
                        <th>Time From</th>
                        <th>Time Till</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <?php
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                          <td><?php echo $row['book_id'] ?></td>
                          <td><?php
                           $agentid = $row['agent_id'];

                           $agentsql = "SELECT agent_name FROM agents_t WHERE agent_id = '$agentid'";
                           $fetchagent = mysqli_query($con, $agentsql);
                           $agent = mysqli_fetch_assoc($fetchagent);
                           echo $agent['agent_name'];

                          
                          ?></td>
                          <td><?php echo $row['datef'] ?></td>
                          <td><?php echo $row['datet'] ?></td>
                          <td><?php echo $row['timef'] ?></td>
                          <td><?php echo $row['timet'] ?></td>
                          <td><?php echo $row['address'] ?></td>
                         

                        </tr>
                            <?php
                        }
                        ?>
                               
                            </table>
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
</body>
</html>