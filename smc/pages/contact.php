<?php 
session_start(); 
$footername = "Contact Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navigation contact-nav">
<div class="header-logo"><a href="../index.php"><img src="../photo/Klogo.png"></a></div>
    <form action="search_function.php" method="post">
    <input type="search" placeholder="Search" name="search">
    </form>

    <nav id="nav-bar">
    <a href="../index.php"><p>Home</p><i class="fa-solid fa-house nav-icon icon-active"></i></a>
    <a href="contact.php" class="active"><p>Contact</p><i class="fa-solid fa-envelope nav-icon"></i></a>
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



<div class="contact-container">
<img class="contact-arrow" src="../photo/arrow.png" alt="">
<img class="contact-arrow1" src="../photo/arrow.png" alt="">
    <div class="contact-text">
        <h2>CONTACT US</h2>
        <hr>
        <center><p>We'd love to hear from you! Whether you have a question, a suggestion, or just want to say hello, feel free to reach out to us.</p></center>
    </div>
</div>

<div class="contact-logo-container">
    <div class="contact-logo">
    <i class="fa-solid fa-phone-volume"></i>
        <p>Mobile</p>
    </div>
    <div class="contact-logo">
        <i class="fa-brands fa-square-facebook"></i>
        <p>Facebook</p>
    </div>
    <div class="contact-logo">
        <i class="fa-brands fa-square-twitter"></i>
        <p>Twitter</p>
    </div>
    <div class="contact-logo">
    <i class="fa-brands fa-telegram"></i>
        <p>Telegram</p>
    </div>
</div>


<div class="contact-form-container">
<form method="post">
    <div class="contact-form">
        
        <input type="text" class="contact-email" name="contactEmail" placeholder="Email">
        <input type="text" class="phone" name="contactPhone" placeholder="Phone">
        <input type="text" class="contact-email" name="name" placeholder="Username">
        <textarea placeholder="Message" name="sendmsg"></textarea>
        <button type="submit" class="contact-btn" name="contactButton">Send <i class="fa-solid fa-paper-plane"></i></button>

        <?php
        include('../database/databaseconnection.php');
        if(isset($_POST['contactButton'])){
            if(isset($_SESSION['user-id'])){
            $userid = $_SESSION['user-id'];
            $email = $_POST['contactEmail'];
            $phone = $_POST['contactPhone'];
            $username = $_POST['name'];
            $msg = $_POST['sendmsg'];

            if(empty($email) && empty($phone) && empty($username) && empty($msg)){
                echo "<script>alert('Please enter fields completely');</script>";
            } else {
                $sql = "INSERT INTO contact (email, phone, username, contact_msg, user_id) VALUES ('$email', $phone, '$username', '$msg', $userid) ";
                $send = $conn->query($sql);
                if($send){
                    echo  "<script>alert('Your message has been send. Thank you!')</script>";
                } else {
                    echo "<script>alert('Something wrong');<script>";
                }
            }
        } else {
            echo "<script>alert('Please Login First');
            window.location.assign('http://localhost/smc/pages/login.php');</script>";
            die();
        }
    }

?>
        
    </div>
    </form>
    <div class="contact-template">
        <h2>Our Newsletters</h2>
        <p>Offers a roundup of the latest news, campaigns, and trends in the social media landscape.</p>
    <img src="../photo/contact-photo.jpg">
    <input type="text" class="contact-tem-email" name="contactTemEmail" placeholder="Email">
    <button type="submit" class="contact-news" name="contactNews">Send<i class="fa-solid fa-paper-plane"></i></button>
    </div>
</div>

<div class="contact-box">
    <div class="c-box box-1">
        <div class="box-header">
            <i class="fa-solid fa-phone"></i>
            <p>+959 758-699-84</p>
        </div>
        <p class="contact-info">Phone calls allow for real-time communication, making it easier to have quick conversations or resolve issues promptly.</p>
    </div>

    <div class="c-box box-2">
        <div class="box-header">
            <i class="fa-solid fa-envelopes-bulk"></i>
            <p>krocssmp@gmail.com</p>
        </div>
        <p class="contact-info">Once you have reported the problem and you have taken interest, you are ready to give it the solution.</p>
    </div>

    <div class="c-box box-3">
        <div class="box-header">
            <i class="fa-brands fa-facebook"></i>
            <p>Krocs SMC</p>
        </div>
        <p class="contact-info">Once you have reported the problem and you have taken interest, you can contact us from our facebook.</p>
    </div>
</div>

<div class="contact-map">
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d34687.66171925391!2d151.11419021546962!3d-33.903898993463805!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1711844936785!5m2!1sen!2smm" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
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

<footer class="footer-contact-color">
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

<div class="footer-contact-copy">
<p>Copyright <?= date("Y") ?> &copy; Now You are in <?= $footername ?>. All rights reserved.</p>
</div>



<script src="../script/style.js"></script>

</body>
</html>
<?php 

include('../database/databaseconnection.php');

if(isset($_POST['logout'])){
    unset($_SESSION['user-id']);
}
?>
