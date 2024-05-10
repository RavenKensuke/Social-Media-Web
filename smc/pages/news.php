<?php 
session_start(); 
$footername = "Infomation News Page";
if(isset($_SESSION['user-id'])){
    $userid = $_SESSION['user-id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information and News</title>
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



<h2 class="info-news">INFORMATION AND LASTEST NEWS</h2>
<hr class="news-hr">

<?php 


include('../database/databaseconnection.php');

if(isset($_POST['signup-btn'])){
    unset($_SESSION['warning']);
    header("location: signup.php");
}

if(isset($_POST['login-btn'])){
    unset($_SESSION['warning-login']);
    header("location:  login.php");
}


$curl = curl_init("https://newsapi.org/v2/everything?q=apple&from=2024-04-25&to=2024-04-25&sortBy=popularity&apiKey=a7637b701dff45a399dae0e51f50ef3d");


curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'Minn Thway Khant'); 

$response = curl_exec($curl);


if (curl_errno($curl)) {
    echo "cURL Error: " . curl_error($curl) . "\n";
} else {
    $data = json_decode($response, true);

    if (isset($data['status']) && $data['status'] === 'error') {
        echo "API Error: {$data['message']}\n";
    } else {
        $row = 1;
        $articles = $data['articles'] ?? [];

          // Pagination
          $page = isset($_GET['page']) ? $_GET['page'] : 1;
          $perPage = 9;
          $totalPages = ceil(count($articles) / $perPage);
          $start = ($page - 1) * $perPage;
          $end = $start + $perPage;
          $articlesToShow = array_slice($articles, $start, $perPage);

//I insert into MySQL MTK;

// foreach ($NewData['articles'] as $News){

//     $author = $conn->real_escape_string($News['author']);
//     $postTitle = $conn->real_escape_string($News['title']);
//     $postDesc = $conn->real_escape_string($News['description']);
//     $postUrl = $conn->real_escape_string($News['url']);
//     $postImage = $conn->real_escape_string($News['urlToImage']);
//     $postDate = $conn->real_escape_string($News['publishedAt']);

//     $conn->query("INSERT INTO post (author,post_title,post_desc,post_url,post_image_name,post_publish_date) VALUES ('$author','$postTitle','$postDesc','$postUrl','$postImage','$postDate')");
// }

?>

<div class="post">

    <?php 
        foreach($articlesToShow as $News){
            strtotime($News['publishedAt']);
    ?>


    <div class="row">
    <a href="<?= $News['url'] ?>">
        <div class="image"><img src="<?php echo $News['urlToImage']; ?>"></div>

        <div class="info">
            <h1><?= mb_strimwidth($News['title'], 0, 68, ". . .");  ?></h1>
            <p class="d-p"><?php $desc =$News['description'] ; echo mb_strimwidth("$desc", 0, 180, ". . ."); ?> </p>
            <div class="author">
            <p>Author : <?= $News['author'];?></p>
            </div><p class="date-time"><?php echo $News['publishedAt']; ?></p>

        </div>
        </a>
    </div>

    <?php }; 
    };
}; ?>
</div><br>
<br>
<br>

<div class="pagination">
    <i class="fa-solid fa-arrow-left"></i>
        <?php
        for($i=1; $i<=$totalPages; $i++){
            echo '<a class="pagination-link" href="?page=' . $i . '">' . $i . '</a>';
        }
        ?> 
        <i class="fa-solid fa-arrow-right"></i>    
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