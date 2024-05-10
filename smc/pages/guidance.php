<?php 
session_start(); 
$footername = "Guidance Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navigation guidance-color">
<div class="header-logo"><a href="../index.php"><img src="../photo/Klogo.png"></a></div>
    <form action="search_function.php" method="post">
    <input type="search" placeholder="Search" name="search">
    </form>

    <nav id="nav-bar">
    <a href="../index.php"><p>Home</p><i class="fa-solid fa-house nav-icon icon-active"></i></a>
    <a href="contact.php"><p>Contact</p><i class="fa-solid fa-envelope nav-icon"></i></a>
    <a href="guidance.php" class="active"><p>Guidance</p></a>
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
    <?php if(!isset($_SESSION['user-id'])){ ?>
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

<?php 


include('../database/databaseconnection.php');

if(isset($_POST['signup-btn'])){
    unset($_SESSION['warning']);
    header("location: ../pages/signup.php");
}

if(isset($_POST['login-btn'])){
    unset($_SESSION['warning-login']);
    header("location: ../pages/login.php");
}

?>





<div class="guide-intro">
    <img src="../photo/inclusive.png">

    <div class="guide-intro-text">
    <h3>WELCOME TO KROCS SMC GUIDANCE PAGE!</h3>
    <p>Discover everything you need to know with our comprehensive guides curated just for you.Whether you're a beginner or an expert, our easy-to-follow guides cover a wide range of topics to help you navigate through Krocs SMC. Let's get started!</p>
    </div>
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
    </div>
    </a>
</div>
<br>
<br><br>

<div class="guide-begin">
    <div class="table-content">
        <h2>Table of Contents</h2>

            <p><b>Define Your Goals:</b> Determine what you want to achieve through social media.</p>

            <p><b>Your Audience:</b> Understand who your target audience is, including their demographics, interests, and online behavior.</p>

            <p><b>Choose the Right Platforms:</b> Not all social media platforms are created equal. Select the platforms where your target audience is most active.</p>

            <p><b>Optimize Your Profiles:</b> Create compelling profiles on each platform, using consistent branding and messaging.</p>

            <p><b>Create Engaging Content:</b> Develop a content strategy that aligns with your goals and resonates with your audience.</p>
    </div>
    
    <div class="table-contents-line">
    </div>

    <div class="guide-video">
    <h1>Your Complete Guide to Social Media Basics</h1>
    <iframe src="https://www.youtube.com/embed/SbeGk9gToxM?si=plSoskCvOsWKooXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>


<p class="guide-p">If you don't have a presence on social media, you're missing a prime opportunity to reach new prospects for your business. Considering that 74% of people use social media when making purchasing decisions, you don't want to miss an opportunity to help nudge them towards buying your products. But if you're unfamiliar with social media, it may feel like a daunting task to figure it out.</p>
<br>

<hr class="guide-line1">
<br>

<div class="guide-line-container">
    <h1>GUIDE TO HELP YOU</h1>
    <div class="guide-headline"></div>
     <div class="line1">
        <img src="../photo/guide3.jpg">
        <p>Visual content tends to perform better on social media. Use eye-catching images, videos, infographics, and other visual elements to grab attention and convey your message effectively. Foster two-way communication with your audience by responding to comments, messages, and mentions promptly. Ask questions, run polls, and encourage user-generated content to boost engagement.</p>
     </div>
     <div class="line2">
        <p>Track key metrics such as reach, engagement, click-through rates, and conversions to gauge the effectiveness of your social media efforts. Use analytics tools provided by each platform or third-party tools to gain insights and make data-driven decisions.Social media is dynamic, so be prepared to adapt your strategy based on what's working and what's not. Regularly review your performance metrics, gather feedback from your audience, and make adjustments accordingly.</p>
        <img src="../photo/guide4.jpg">
     </div>
     <div class="line3">
     <img src="../photo/guide5.jpg">
        <p>Social media trends and best practices evolve rapidly. Stay informed about the latest developments, algorithm changes, and emerging platforms to stay ahead of the curve and maintain your competitive edge.  Collaborating with influencers in your niche can help you reach new audiences and build credibility. Identify relevant influencers who align with your brand values and establish mutually beneficial partnerships.</p>
     </div>
</div><br><br>

<hr class="guide-line1">
<br><br><br><br>
<br>

<h1 class="MG">MEDIA & GUIDANCE</h1>

<div class="guide-read-container">

    <div class="guide-read-more">
        <h1>SOCIAL MEDIA GUIDE</h1>
        <p>Before diving into social media, define your goals. Are you looking to increase brand awareness, drive website traffic, generate leads, boost sales, or enhance customer engagement? Your objectives will shape your strategy.</p>
        <a href="https://thesocialmediaguide.com.au"><button type="submit">Read More</button></a>
    </div>

    <div class="other-guide">

        <div class="guide-box">
        <a href="https://www.investopedia.com/terms/s/social-media.asp">
            <img src="../photo/guidebox1.jpg">
        <p>About Social Media</p>
        </a>
        </div>

        <div class="guide-box">
        <a href="https://www.fortinet.com/resources/cyberglossary/what-is-hacking">
        <img src="../photo/guidebox2.jpg"><p>About The Hacking</p>
            </a>
        </div>
        <div class="guide-box">
        <a href="https://www.makelots.com/product/business-pro-website/?gad_source=1&gclid=CjwKCAjwoa2xBhACEiwA1sb1BJSY5XqfMkVyHP0yltniNxw19NggId2iCQAWQ_ChRJVzOkOvjTLccxoCMNQQAvD_BwE">
        <img src="../photo/guidebox3.jpg"><p>About Web Developments</p>
            </a>
        </div>
        <div class="guide-box">
        <a href="https://en.wikipedia.org/wiki/Internet">
        <img src="../photo/guidebox4.jpg"><p>About Internet</p>
            </a>
        </div>
    </div>
</div><br>
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