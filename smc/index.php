<?php 
session_start();
$footername = "Home Page";
if(isset($_SESSION['user-id'])){
 $userid = $_SESSION['user-id'];
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navigation">
<div class="header-logo"><a href="index.php"><img src="./photo/Klogo.png"></a></div>
    <form action="./pages/search_function.php" method="post">
    <input type="search" placeholder="Search" name="search">
    </form>

    <nav id="nav-bar">
    <a href="index.php" class="active"><p>Home</p><i class="fa-solid fa-house nav-icon icon-active"></i></a>
    <a href="./pages/contact.php"><p>Contact</p><i class="fa-solid fa-envelope nav-icon"></i></a>
    <a href="./pages/guidance.php"><p>Guidance</p></a>
    <div id="dropdown">
        <button id="dropbtn">Information <i class="fa-solid fa-caret-down"></i>
        </button>
        <div id="dropdown-content">
            <a href="./pages/app.php">Apps</a>
            <a href="./pages/news.php">News</a> 
            <a href="./pages/live.php">Live</a>
            <a href="./pages/help.php">Parents can help</a>
            <a href="./pages/term.php">Privacy & Policy</a> 
            <?php 
            if(isset($_SESSION['user-id'])){ ?>
            <a href="./pages/browsing.php">Browsing History</a> 
            <?php } else { }
            ?>
        </div>
    </div>

    <i id="mobile" class="fa-solid fa-bars bar-icon"></i>

    <div id="rsp">
    <i id="close" class="fa-solid fa-xmark"></i>
    <a href="./pages/profile.php" class="mobile-show mobile-active">Profile</a>
    <a class="./pages/guidance.php">Guidance</a>
    <a href="./pages/app.php">Apps</a>
    <a href="./pages/help.php">Help</a>
    <a href="./pages/live.php">Live</a>
    <a href="./pages/term.php">Privacy & Policy</a> 
    <a href="./pages/signup.php">Sign Up</a>
    <a href="./pages/login.php">Log In</a>
    <a href="./pages/logout.php?id=1">Log Out</a>
    
    </div>
    
    

</nav>

<div class="nav-right">
    <?php
    include('./database/databaseconnection.php');

    if(isset($_POST['signup-btn'])){
    unset($_SESSION['warning']);
    header("location: ./pages/signup.php");
    }

    if(isset($_POST['login-btn'])){
    unset($_SESSION['warning-login']);
    header("location: ./pages/login.php");
    }
     if(!isset($_SESSION['user-id'])){ ?>
    <form method="post">
    <button class="btn" id="sign-up" type="submit" name="signup-btn">Sign Up</button>
    <button id="logo" class="btn" type="submit" name="login-btn">Log in</button>
    </form>
    <?php } else { $userid = $_SESSION['user-id']; ?>
        <form method="post">
        <button class="logout" id="sign-up" type="submit" name="logout">Logout</button>
        <?php 
    if(isset($_POST['logout'])){
    unset($_SESSION['user-id']);
    }
    ?>
        </form>
    <?php } ?>
     
    </div>
</div>



<div class="home-intro-container">
    <div class="home-intro-text">
    <p class="head">Your Digital Social Hub Awaits! 🌟</p>
    <p>Every connection fuels inspiration, and every moment is a chance to grow. Welcome to Social Media Website!</p>
</div>
    <img src="./photo/home-social.jpg">
</div>

<div class="home-logo-container">

    <a href="http://instagram.com">
    <div class="home-logo">
    <i class="fa-brands fa-instagram"></i>
    <p class="ig">Instagram</p>
    </div>
    </a>


    <a href="http://facebook.com">
    <div class="home-logo">
    <i class="fa-brands fa-facebook-f"></i>
    <p>Facebook</p>
    </div>
    </a>

    <a href="http://whatsapp.com">
    <div class="home-logo">
    <i class="fa-brands fa-whatsapp"></i>
    <p>Whatsapp</p></div></a>
    
    <a href="http://twitter.com">
    <div class="home-logo">
    <i class="fa-brands fa-x-twitter"></i>
    <p>X-Twitter</p></div></a>
    

    
    <a href="http://github.com">
    <div class="home-logo">
    <i class="fa-brands fa-github"></i>
    <p>Github</p>
    </div></a>
    
</div>



<div class="home-connect-social">
<h1>Join a vibrant community </h1>
<h2>where every post sparks conversations</h2>
<p> From thought-provoking discussions to creative collaborations, our community is a place where your voice matters and where connections flourish. Join us today and be part of the conversation!</p>
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

<br>
<br><br>

<div class="home-connect-social">
<h1>HOW TO STAY SAFE ONLINE</h1>
<br>
<p> From thought-provoking discussions to creative collaborations, our community is a place where your voice matters and where connections flourish. Join us today and be part of the conversation!</p><br><br>

<li><b>Strong Passwords:</b> Create unique and strong passwords for every account.expand_more Avoid using easily guessable information like birthdays or pet names.expand_more
Consider using a password manager to generate and store your passwords securely.expand_more.</li>

<li><b>Software Updates:</b> Keep your devices' operating systems, web browsers, and other software updated with the latest security patches.expand_more These updates often address vulnerabilities that hackers can exploit.expand_more.</li>

<li><b>Secure Connections:</b> Be cautious about using public Wi-Fi networks.expand_more Avoid accessing sensitive information like bank accounts on public Wi-Fi.expand_more
Look for websites that use HTTPS encryption, indicated by a padlock symbol in the address bar.expand_more This encrypts communication between your device and the website.expand_more.</li>

<li><b>Phishing Awareness:</b> Be wary of suspicious emails, texts, or messages that try to trick you into clicking on malicious links or downloading attachments.expand_more Don't click on links or attachments from unknown senders.expand_more. Verify the legitimacy of a sender by checking their email address and contacting the organization directly if unsure.expand_more.</li> 

<li><b>Social Media Savvy:</b> Be mindful of what you share online, especially on social media platforms.expand_more Avoid sharing personal information that could be used for identity theft.expand_more
Review your privacy settings on social media and other online accounts to control who can see your information.</li>
</div>

<br>
<br><br>
<center><h1>3D Illustration</h1></center>
<br>
<br>
<center><div class="three-d">
<iframe src='https://my.spline.design/rocket-4bd237bb7ea2e6a5d94570a7b092e724/'></iframe>
</div></center>
<br><br>
<br>




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
        <img src="./photo/WKlogo.png">
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









<script src="./script/style.js"></script>

</body>
</html>







            


            




