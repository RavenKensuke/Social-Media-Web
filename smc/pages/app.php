<?php 
session_start(); 
$footername = "App Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apps</title>
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
        <button class="logout" id="sign-up" type="submit" name="logout">Logout</button>
    <?php } ?>
     
    </div>
</div>


<br>
<br>

<div class="app-intro">
    <div class="app-intro-text">
        <h1>Download App, Start Connecting With The World</h1>
        <p>Social media apps offer a variety of benefits that can enhance your personal and professional life.Stay Connected: Social media bridges geographical distances, allowing you to stay in touch with friends and family, reconnect with old acquaintances, and build new relationships.</p>
        <img src="../photo/ios.png">
        <img class="google" src="../photo/google.png"></div>
        <div class="app-intro-img">
    <img class="img1" src="../photo/mobile2.png">
    <img class="img2" src="../photo/mobile2.png">
    <img class="img3" src="../photo/mobile3.png">
    <img class="img4" src="../photo/mobile4.png">
    </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="app-work">
<h1>HOW APP WORKS</h1>
<p>Social media is a solution that allows users to create profiles and share different types of content, such as text, photo, video, audio. The main goal of a social media app is to create a community of users united.</p>
<img src="../photo/guide2.png">


<div class="home-other-social">
    <a href="#" target="_blank">
    <div class="social-container black">
        <i class="fa-solid fa-user"></i>
        <h3>Personalized</h3>
        <p>Users are greeted with a personalized feed tailored to their interests and preferences. </p>
    </div>
    </a>

    <a href="#" target="_blank">
    <div class="social-container soft-b">
        <i class="fa-solid fa-mobile"></i>
        <h3>Exploration</h3>
        <p>Users can explore various communities and groups based on topics.</p>
    </div>
    </a>
    
    <a href="#" target="_blank">
    <div class="social-container grey">
    <i class="fa-regular fa-comments"></i>
        <h3>Messaging</h3>
        <p>ConnectSphere offers a built-in messaging feature that allows users to chat with each others.</p>
    </div>
    </a>
        
    <a href="#" target="_blank">
    <div class="social-container soft-w">
        <i class="fa-solid fa-fingerprint"></i>
        <h3>Privacy</h3>
        <p>The app includes a feature for organizing and discovering events, meetups.</p>
    </div>
    </a>
    
    <a href="#" target="_blank">
    <div class="social-container white">
    <i class="fa-regular fa-handshake"></i>
        <h3>Meetups</h3>
        <p>ConnectSphere prioritizes user privacy and security, offering customizable privacy settings.</p>
    </div>
    </a>
</div>
</div>

<div class="home-connect-social">
<h1>MOST POPULAR SOCIAL MEDIA APPS</h1>
</div>

<div class="home-other-social">
    <a href="http://instagram.com" target="_blank">
    <div class="social-container black">
        <i class="fa-brands fa-instagram"></i>
        <h3>Instagram</h3>
        <p>Instagram features include Stories, IGTV , Reels , and shopping features.</p>
    </div>
    </a>

    <a href="http://facebook.com" target="_blank">
    <div class="social-container soft-b">
        <i class="fa-brands fa-facebook-f"></i>
        <h3>Facebook</h3>
        <p>Facebook also features groups, pages for businesses, organizations, and public figures.</p>
    </div>
    </a>
    
    <a href="http://whatsapp.com" target="_blank">
    <div class="social-container grey">
        <i class="fa-brands fa-whatsapp"></i>
        <h3>Whatsapp</h3>
        <p>WhatsApp is known for its end-to-end encryption, ensuring that only the sender and recipient.</p>
    </div>
    </a>
        
    <a href="http://twitter.com" target="_blank">
    <div class="social-container soft-w">
        <i class="fa-brands fa-x-twitter"></i>
        <h3>X-Twitter</h3>
        <p>Twitter is known for its real-time nature, enabling users to engage in public conversations.</p>
    </div>
    </a>
    
    <a href="http://github.com" target="_blank">
    <div class="social-container white">
        <i class="fa-brands fa-github"></i>
        <h3>Github</h3>
        <p>GitHub features include project management tools, wikis, code review, and integrations.</p>
    </div>
    </a>
</div>

<div class="app-download">
<img src="../photo/mobile1.png">
    <div class="download-text">
        <h2>DOWNLOAD SOCAIL MEDIA APP</h2>
        <p>The internet changed the way people interact with each other as well as work culture, and those changes first arose on social media sites. That is why social networks for apps are so important. Social media helps people establish better relationships with their family and friends, and now the networking sites also show their significance for apps. That is why people spend a lot of their time online browsing social sites, and usage has only gone up with increase in the use of  smartphones and tablets in Mobile devices are gaining more and more space amongst people when compared to other ways of internet access. It is because prices and plans have become increasingly affordable and accessible. Mobile accessibility in turn lures people to always stay online thus encouraging more time spent on social media.</p>
        <a href="https://www.apple.com/app-store/"><button type="submit">Get Started</button></a>
    </div>
    
    
</div>

<br>
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


