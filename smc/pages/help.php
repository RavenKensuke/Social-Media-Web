<?php 
session_start(); 
$footername = "Parent Can Help Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents can help</title>
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
        <form method="post">
        <button class="logout" id="sign-up" type="submit" name="logout">Logout</button>
        </form>
    <?php } ?>
     
    </div>
</div>





<br>
<br>
<div class="parent-intro">
    <div class="parent-intro-text">

    <h1>Keeping teens safe on social media: What parents should know to protect their kids</h1>

    <p>Social media can help teenagers with healthy development but it can also create risks. Psychological research shows it is critically important to focus on how teens use social media and the type of content they see.</p>

    <p>As a parent or caregiver, you are the expert on your child. You know what experiences will fit with their strengths and areas of vulnerability. These recommendations are based on research and will help you and your teens be smart users of social media, avoiding the harms, and gaining maximum benefits.</p>
    </div>

    <img src="../photo/parent1.jpg">

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="parent-help">
<div class="help-video">
    <h2>TIPS FOR PARENTS ON KIDS' SOCIAL MEDIA USE</h2>
    <iframe src="https://www.youtube.com/embed/M7zmz0tZ1Xk?si=kYxXk-TgH89xtAU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <p>Social media can help teenagers with healthy development but it can also create risks. Psychological research shows it is critically important to focus on how teens use social media and the type of content they see.
        <br>
        <br>
        As a parent or caregiver, you are the expert on your child. You know what experiences will fit with their strengths and areas of vulnerability. These recommendations are based on research and will help you and your teens be smart users of social media, avoiding the harms, and gaining maximum benefits.
    </p>
    </div>
    <div class="help-line">
    </div>
    <div class="help-text">
    <h1>Helping teenagers navigate social media in a healthy</h1>
    <p><b>Open Communication: </b>Foster an environment of open communication where teens feel comfortable discussing their online experiences, concerns, and questions. Encourage them to come to you if they encounter any problems or need guidance.</p>
    <br>

    <p><b>Set Clear Boundaries: </b>Establish clear guidelines and boundaries for social media use, such as time limits, appropriate content, and privacy settings. Collaborate with your teen to set these rules together, taking into account their input and preferences.</p><br>

    <p><b>Lead by Example: </b>Be a positive role model by demonstrating healthy and responsible social media habits yourself. Show your teen how to use social media mindfully, respectfully, and in moderation.</p><br>

    <p><b>Educate About Risks: </b>Teach your teen about the potential risks and dangers of social media, such as cyberbullying, online predators, and privacy concerns. Help them understand how to recognize and respond to these threats effectively.</p><br>

    <p><b>Promote Critical Thinking: </b>Encourage your teen to think critically about the content they encounter online, including advertisements, news articles, and social media posts. Teach them how to evaluate information for accuracy, credibility, and bias.</p><br>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="pn-social">
    <h1>POSITIVE AND NEGATIVE EFFECTS FOR TEENS WHO ARE USING SOCIAL MEDIA</h1>
    <p>There are many positive aspects of social media, but there's also a darker side to the endless scroll that keeps coming back for more. Social media can often harm one's mental health. It can cause depression and anxiety and can lower self-esteem.</p>
    <div class="effects">
        <div class="p-effect">
            <h3>ADVATAGES OF USING SOCIAL MEDIA FOR TEENS</h3>
                <li><b>Social Connection:</b> Social media allows teens to connect with friends, family members, and peers from around the world, fostering a sense of belonging and community.</li>

                <li><b>Creative Expression: </b>Social media platforms provide teens with a creative outlet to express themselves through photos, videos, artwork, writing, and other forms of content creation.</li>

                <li><b>Educational Opportunities: </b>Social media can be a valuable source of educational resources, news, and information for teens.</li>

                <li><b>Networking and Collaboration: </b>Social media enables teens to network with peers, mentors, and professionals in their fields of interest.</li>

                <li><b>Empowerment and Activism: </b>Social media empowers teens to raise awareness, advocate for causes they care about, and participate in social and political movements.</li>

                <li><b>Cultural Exchange: </b>Social media exposes teens to diverse cultures, perspectives, and viewpoints from around the world.</li>

                <li><b>Support and Community Building:</b> Social media can be a source of support and encouragement for teens going through difficult times or facing challenges such as mental health issues, bullying, or peer pressure.</li>
        </div>
        <div class="n-effect">
        <h3>DISADVATAGES OF USING SOCIAL MEDIA FOR TEENS</h3>
        <ul>
            <li><b>Cyberbullying: </b>Social media platforms can provide a platform for cyberbullying, where teens may be subjected to harassment, threats, or exclusion by their peers.</li>

            <li><b>Negative Body Image: </b>Exposure to idealized and unrealistic body images on social media can contribute to body dissatisfaction and poor self-image among teens, especially for those who compare themselves unfavorably to others.</li>

            <li><b>Disturbances: </b>Excessive use of social media, particularly before bedtime, can interfere with teens' sleep patterns and quality of sleep.</li>

            <li><b>Fear of Missing Out (FOMO): </b>Social media can exacerbate feelings of FOMO, where teens feel anxious or left out when they see their peers posting about social events, experiences, or achievements that they were not a part of.</li>

            <li><b>Addiction and Distraction: </b>Teens may become addicted to social media, spending excessive amounts of time scrolling through their feeds, liking posts, and seeking validation from others.</li>

            <li><b>Privacy Concerns: </b>Teens may inadvertently share personal information or sensitive content on social media, putting their privacy and safety at risk.
            </li>
            <li><b>Impact on Mental Health: </b>Excessive use of social media has been linked to poor mental health outcomes among teens, including increased rates of anxiety, depression, loneliness, and social isolation.</li>
        </ul>
        </div>
    </div>
</div>

<br>
<br>
<br>
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