<?php 
session_start(); 
$footername = "Livestreaming Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestreaming</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navigation live-streaming">
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
            <?php } else { }
            ?>
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
        <form method="post">
        <button class="logout" id="sign-up" type="submit" name="logout">Logout</button>
        </form>
    <?php } ?>
     
    </div>
</div>





<div class="live-intro">
    <div class="live-text">
    <h2>GET IN TOUCH WITH US</h2>
    <p>We make it easy to livestream engaging virtual events, reach your remote workforce, and launch a subscription channel.</p>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="SE">SHARE EVERYWHERE</h1><br>
<br>
<br>
<div class="home-logo-container live-logo-container">
    

    <a href="http://periscope.com">
    <div class="home-logo">
    <i class="fa-brands fa-periscope"></i>
    <p class="ig">Periscope</p>
    </div>
    </a>


    <a href="http://facebook.com">
    <div class="home-logo">
    <i class="fa-brands fa-facebook-f"></i>
    <p>Facebook</p>
    </div>
    </a>

    <a href="http://youtube.com">
    <div class="home-logo">
    <i class="fa-brands fa-youtube"></i>
    <p>Youtube</p></div></a>
    
    <a href="http://twitch.com">
    <div class="home-logo">
    <i class="fa-brands fa-twitch"></i>
    <p>Twitch</p></div></a>
    

    
    <a href="http://linkedin.com">
    <div class="home-logo">
    <i class="fa-brands fa-linkedin"></i>
    <p>LinkedIn</p>
    </div></a>
    
</div>

<div class="live-container">
        <div class="live-block">
            <div class="image">
                <img src="../photo/advertise.jpg" alt="">
            </div>
            <div class="content">
                <h5>1. Advertise:</h5>
                <p>Choose a platform that aligns with your campaign goals and target audience. Popular livestreaming platforms include Facebook Live, Instagram Live, YouTube Live, and Twitch.</p>
            </div>
        </div>

        <div class="live-block">
            <div class="image">
                <img src="../photo/dm.jpg" alt="">
            </div>
            <div class="content">
                <h5>2. Digital Marketing:</h5>
                <p>Plan interactive content that encourages audience participation, such as Q&A sessions, polls, and real-time comments.<br>
                Respond to audience questions and comments during the livestream.</p>
            </div>
        </div>

        <div class="live-block">
            <div class="image">
                <img src="../photo/live1.jpg" alt="">
            </div>
            <div class="content">
                <h5>3. Engaging Host:</h5>
                <p>Select a host or hosts who are dynamic, engaging, and knowledgeable about the campaign and its goals.<br>
                Ensure the host is comfortable with the livestreaming format.</p>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="home-connect-social">
<h1>EVERYTHING YOU NEED TO LIVESTREAM</h1>
</div>

<div class="home-other-social">
    <a href="#" target="_blank">
    <div class="social-container black">
        <i class="fa-solid fa-chart-line"></i>
        <h3>Adaptive Stream</h3>
        <p>Give your viewers the best quality across devices, even with limited bandwidth.</p>
    </div>
    </a>

    <a href="#" target="_blank">
    <div class="social-container soft-b">
        <i class="fa-regular fa-circle-play"></i>
        <h3>Management</h3>
        <p>Centralize your organization's live and on-demand video.</p>
    </div>
    </a>
    
    <a href="#" target="_blank">
    <div class="social-container grey">
    <i class="fa-solid fa-photo-film"></i>
        <h3>Graphics & Tools</h3>
        <p>Create custom registration forms for your events.</p>
    </div>
    </a>
        
    <a href="#" target="_blank">
    <div class="social-container soft-w">
    <i class="fa-solid fa-headset"></i>
        <h3>Priority Support</h3>
        <p>Live support when you set up and stream during business hours.</p>
    </div>
    </a>
</div>






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