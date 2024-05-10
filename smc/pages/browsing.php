<?php 
session_start(); 
$footername = "Browsing History Page";
if(isset($_SESSION['user-id'])){ $userid = $_SESSION['user-id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browsing History</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navigation">
<div class="header-logo"><a href="../index.php"><img src="../photo/Klogo.png"></a></div>
    <form action="search_function.php" method="post">
    <input type="search" placeholder="Search" name="search">
    </form>

    <nav id="nav-bar">
    <a href="../index.php"><p>Home</p><i class="fa-solid fa-house nav-icon icon-active"></i></a>
    <a href="contact.php"><p>Contact</p><i class="fa-solid fa-envelope nav-icon"></i></a>
    <a href="guidance.php"><p>Guidance</p></a>
    <div id="dropdown">
    <button id="dropbtn">Information <i class="fa-solid fa-caret-down"></i>
        </button>
        <div id="dropdown-content">
            <a href="app.php">Apps</a>
            <a href="news.php">News</a>
            <a href="live.php">Live</a>
            <a href="help.php">Parents can help</a>
            <a href="term.php">Privacy & Policy</a>
            <?php 
            if(isset($_SESSION['user-id'])){ ?>
            <a href="browsing.php">Browsing History</a> 
            <?php } else { } ?>
        </div>
    </div>

    <i id="mobile" class="fa-solid fa-bars bar-icon"></i>

    <div id="rsp">
    <i id="close" class="fa-solid fa-xmark"></i>
    <a href="profile.php" class="mobile-show mobile-active">Profile</a>
    <a class="guidance.php">Guidance</a>
    <a href="app.php">Apps</a>
    <a href="help.php">Help</a>
    <a href="live.php">Live</a>
    <a href="term.php">Privacy & Policy</a> 
    <a href="signup.php">Sign Up</a>
    <a href="login.php">Log In</a>
    <a href="logout.php?id=1">Log Out</a>
    
    </div>
    
    

</nav>

<div class="nav-right">
    <?php


    include('../database/databaseconnection.php');
    
    if(isset($_POST['signup-btn'])){
        unset($_SESSION['warning']);
        header("location: signup.php");
    }
    
    if(isset($_POST['login-btn'])){
        unset($_SESSION['warning-login']);
        header("location:  login.php");
    }if(!isset($_SESSION['user-id'])){ ?>
    <form method="post">
    <button class="btn" id="sign-up" type="submit" name="signup-btn">Sign Up</button>
    <button id="logo" class="btn" type="submit" name="login-btn">Log in</button>
    </form>
    <?php } else { $userid = $_SESSION['user-id']; ?>
        <button class="logout" id="sign-up" type="submit" name="logout">Logout</button>
    <?php } ?>
     
    </div>
</div>

<br>

<br>


<br>


<br>

<center><h2>BROWSING HISTORY</h2></center>
<br>
<br>

<?php

$results_per_page = 4;
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$start_from = ($page - 1) * $results_per_page;
$sql = "SELECT * FROM search LIMIT $start_from, $results_per_page";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<center>
    <div class="sh-table">
    <table>
    <tr>
        <th class="sh-th">Search History</th>
        <th class="sh-th1"><p>Delete</p></th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
    <td class="sh-td"><?php echo "<center>". $row['search_msg']. "</center>"?></td>
    <td class="sh-td1"><form action="delete.php?id=<?= $row['search_id'] ?>" method="post"><button type="submit" value="delete" name="delete">Delete</button></form></td>
  </tr>
 <?php  } ?> </table>
</div><br>
<br>
</center> <?php
} else {
    echo "<center><p>No Browsing Data Found</p></center> ";
}

$sql = "SELECT COUNT(search_id) AS total FROM search";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page);

echo "<center>";
for ($i=1; $i<=$total_pages; $i++) {
    echo '<a class="browsing" href="?page=' . $i . '">' . $i . '</a>';
}
echo "</center>";
?>





<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script src="../script/style.js"></script>
</body>
</html>







<?php } else { 
    echo "<script>alert('Please Login First');
    window.location.assign('http://localhost/smc/login.php');</script>";
    die(); 
 } ?> 

<br><br>

<?php 

if(!isset($_SESSION['user-id'])){
?>
<div class="above-container">
	<div class="sign-text"><h5>TEXT-TO-SUBSCRIBE, SOMETIMES TEXT-TO-JOIN OR TEXT-TO-SIGN-UP</h5>
		<h6>IS AN EASY WAY FOR YOUR AUDIENCE TO OPT IN TO <b>YOUR SMS MESSAGES OR EMAILS</b></h6></div>

	<div class="sign-btn">
		<input type="text" placeholder="Enter Your Email Address" required>
		<button class="sbtn"><span>Sign Up</span></button>
	</div>
</div>
<?php } else { } ?> 

<footer>
    <div class="footer-logo">
        <img src="../photo/WKlogo.png">
        <h5>KROCS SMC.</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,dignissim sit amet, adipiscing nec.</p>
    </div>

    <div class="footer-contact">
        <h3>CONTACT US</h3>
        <p>minthwaykhant04@gmail.com</p>
        <p>24 Atlantic Ave, Brooklyn, NY 11201 Dreamy Inc</p>
        <p>+95 9758699984</p>
    </div>

    <div class="footer-follow-us">
        <h3>FOLLOW US</h3>
        <p>Yes, we are social!</p>
        <div class="footer-folow-logo">
            <a href="http://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="http://facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="http://whatsapp.com" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="http://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="http://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
</footer>

<div class="footer-copy">
<p>Copyright <?= date("Y") ?> &copy; Now You are in <?= $footername ?>. All rights reserved.</p>
</div>

<script src="../script/style.js"></script>
</body>
</html>

<?php 
if(isset($_POST['logout'])){
    unset($_SESSION['user-id']);
}
?>

