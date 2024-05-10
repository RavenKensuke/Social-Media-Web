<?php session_start(); 
if(is_null($_POST['search'])){
    header("location: ../index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
    <a href="support.php">Support</a>
    <a href="live.php">Live</a>
    <a href="term.php">Privacy & Policy</a> 
    <a href="register.php">Sign Up</a>
    <a href="login.php">Log In</a>
    <a href="logout.php">Log Out</a>
    
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

<?php 

include('../database/databaseconnection.php');

if(!isset($_SESSION['user-id'])){
    if(isset($_POST['search'])) {
    $searchPost = $_POST['search'];
    $searchSQL = "SELECT * FROM post WHERE post_title LIKE '%$searchPost%' OR author LIKE '%$searchPost%'";
    $searchResult = $conn->query($searchSQL); 
    }
} else {
    $userid = $_SESSION['user-id'];
    if(isset($_POST['search'])) {
        $searchPost = $_POST['search'];
        $searchsql = "INSERT INTO search (search_msg, user_id) VALUES ('$searchPost', $userid) ";
        $searchH = $conn->query($searchsql); 
        $searchSQL = "SELECT * FROM post WHERE post_title LIKE '%$searchPost%' OR author LIKE '%$searchPost%'";
        $searchResult = $conn->query($searchSQL);
    }
}
?>

<div class="post">

    <?php 

    if(mysqli_num_rows($searchResult) > 0){
        while($searchShow = mysqli_fetch_assoc($searchResult)){
            strtotime($searchShow['post_publish_date']);
    ?>

<a href="<?= $searchShow['post_url'] ?>">
    <div class="row">
        <div class="image"><img src="<?php echo $searchShow['post_image_name']; ?>"></div>

        <div class="info">
            <h1><?= mb_strimwidth($searchShow['post_title'], 0, 68, ". . ."); ?></h1>
            <p class="d-p"><?php $sdesc =$searchShow['post_desc'] ; echo mb_strimwidth("$sdesc", 0, 180, ". . ."); ?> </p>
            <div class="author">
            <p>Author : <?= $searchShow['author'];?></p>
            </div><p class="date-time"><?php echo $searchShow['post_publish_date']; ?></p>

        </div>
    </div>
</a>
    <?php } 
    } else {
        ?></div>
        <center><p class="NRF">No result found!</p></center>
    <?php }
    ?>

<br>
<br>
<br>
<script src="../script/style.js"></script>
</body>
</html>

<?php 
if(isset($_POST['logout'])){
    unset($_SESSION['user-id']);
}
?>