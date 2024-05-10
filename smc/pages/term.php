<?php 
session_start(); 
$footername = "Privacy Policy Page";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy & terms</title>
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

<div class="Psection">
        <div class="terms-box">
            <div class="terms-text">
                <h2>Privacy and Policy</h2>
                <p>Last Edit: 16/01/2024</p>
                <p>Greeting Users,</p>

                <p>
                    Thank you for visiting our Website. Your privacy is important to us. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.

                    By accessing or using our website, you consent to the terms of this Privacy Policy.
                </p>

                <p>
                    <strong>Information We Collect</strong> <br>

                    We may collect personal information that you voluntarily provide to us when you interact with our website. This may include, but is not limited to, your name, email address, and any other information you choose to share. <br>

                    We also automatically collect certain information when you visit our website, such as your IP address, browser type, referring/exiting pages, and operating system. This information is used for analytical purposes to improve our website's performance and user experience.
                </p>

                <p>
                    <strong>How We Use Your Information</strong> <br>

                    We may use the information we collect for various purposes, including but not limited to: <br>

                    Providing, maintaining, and improving our website. <br>
                    Responding to your inquiries or requests. <br>
                    Sending periodic emails regarding updates, promotions, or other relevant information. You can opt-out of receiving these emails by following the unsubscribe instructions included in each email.
                </p>

                <p>
                    <strong>Cookies</strong> <br>

                    Our website may use cookies to enhance your experience. You can choose to disable cookies through your browser settings, but please note that some features of the website may not function properly if cookies are disabled.
                </p>

                <p>
                    <strong>Security</strong> <br>

                    We implement reasonable security measures to protect the confidentiality and integrity of your information. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
                </p>

                <p>
                    <strong>Changes to This Privacy Policy</strong> <br>

                    We reserve the right to update this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated Privacy Policy on our website.
                </p>

                <p>
                    <strong>Contact Us</strong> <br>

                    If you have any questions or concerns about this Privacy Policy, please contact us at kOtInMaUnG@gmail.com.
                </p>
            </div>
            <h4>I Agree to the <span>Privacy and Policy</span> and I read the Privacy Notice.</h4>
            <div class="Pbuttons">
                <button class="Pbtn red-btn"><a href="../index.php">Accept</a></button>
                <button class="Pbtn gray-btn">Decline</button>
            </div>
        </div>
    </div>




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