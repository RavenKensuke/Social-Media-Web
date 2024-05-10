<?php session_start();

if(!isset($_SESSION['user-id'])){ 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php 
include('../database/databaseconnection.php');
    if(isset($_SESSION['lockedtime'])){
        $different = time() - $_SESSION['lockedtime'];
        if($different > 10){
            $_SESSION['locked'] = false;
            $_SESSION['loginattempt'] = 0;
            unset($_SESSION['lockedtime']);
            header("location: login.php");
            exit();
    }
    }
    
    if (isset($_POST['login'])){
    
        $email = $_POST['login-email'];
        $password= $_POST['login-pwd'];
        
        if (empty($email) && empty($password)){
            echo "<script>alert('All Field are required.')</script>";
        }
    
        else {
        $email_validate = $conn->query("SELECT * FROM user WHERE email = '$email'");
            if(mysqli_num_rows($email_validate) > 0){
                $password_validate = $conn->query("SELECT * FROM user WHERE password =  '$password' && email = '$email' ");
            if(mysqli_num_rows($password_validate) > 0) {
                $data = mysqli_fetch_assoc($password_validate);
                $_SESSION['user-id'] = $data['user_id'];
                echo "<script>
                    alert('Login Successfully.');
                    window.location.assign('http://localhost/smc/index.php');
                    </script>";
            } 
            else {
                echo "<script>alert('email and password are not match')</script>";
                isset($_SESSION['loginattempt']) ? $_SESSION['loginattempt'] += 1 : $_SESSION['loginattempt'] = 1;
            }
        } 
        else {
            echo "<script>alert('invalid email.')</script>";
            isset($_SESSION['loginattempt']) ? $_SESSION['loginattempt'] += 1 : $_SESSION['loginattempt'] = 1;
        } if($_SESSION['loginattempt'] > 2){
            $_SESSION['locked'] = true;
            }
        }
        
    }
?>



            <div class="login-container">
                    <form action="" method="post">
                        <div class="login-head">
                    <h1>SIGN</h1>
                    <h2>IN</h2>
                    </div>
                <hr>

            <a class="back-tag-login" href="../index.php"><i class="fa-solid fa-xmark"></i></a>
        <div class="us-contact">
            <input type="email" class="us-email" name="login-email" placeholder="Email">
        </div>
        
        
        <div class="us-pwd">
            <i class="fa-solid fa-eye" id="eye1" onclick="pass1()"></i>
            <i class="fa-solid fa-eye-slash" id="eye2" onclick="pass2()"></i>
            <input type="password" name="login-pwd" placeholder="Password" id="pwd" class="passwd">
        </div>
        
        

        <div class="g-recaptcha" id="captcha" name="capcha" value='1' data-sitekey="6LcIDUwpAAAAADoEKvPWhrtyJOWtm1KSqiicxDYC">input</div>

        <div class="us-btn">
        <?php 
                if(isset($_SESSION['locked']) && $_SESSION['locked'] === true){
                    $_SESSION['lockedtime'] = time();
                        echo '<script>';
                        echo 'var locked="'.$_SESSION['locked'].'";';
                        echo 'var loginattempt="'.$_SESSION['loginattempt'].'";';
                        echo '</script>';
                    ?> 
                    <p id="locked"></p>
                    <?php } else { ?>
                <button type="submit" id="login" class="btn1" name="login">Log in</button>
            <?php } ?>
            
        </div>

        <div class="term">
            <p>
                By signing in, creating an account, or checking out as a Guest you are agreeing to our <a href="./terms.php">Terms of Use</a> and our <a href="./terms.php">Privacy Policy</a>.
            </p>
        </div>
        </form>
        </div>

        

        <script src="../script/style.js"></script>

    
<script>
        $(document).ready(function(){
            $('#signup').click(function(){
                var response = grecaptcha.getResponse();
                if(response.length == 0){
                   alert('Please verify you are not robot')
                }
            });
        });

        const passwordInput = document.getElementById('pwd');
        const passwordInput1 = document.getElementById('cpwd');

        function pass1() {
            document.getElementById('eye2').style.display = 'flex';
            document.getElementById('eye1').style.display = 'none';
            passwordInput.type = "password";
        }

        function pass2() {
            document.getElementById('eye1').style.display = 'flex';
            document.getElementById('eye2').style.display = 'none';
            passwordInput.type = "text";
        }

        const lockedElement = document.getElementById("locked");
    
let count = 600;
    if(locked){
    const interval = setInterval(() => {
        if(count >= 0) {
            count !== 0 ? lockedElement.innerHTML = `Please wait for ${Math.floor(count / 60)}:${count % 60} mins. Don't refresh the page` : lockedElement.innerHTML = "Please Wait ...";
            count = count - 1;
        } else {
            clearInterval(interval);
            location.reload();
        }
    }, 1000);  
  }  
    </script>
</body>
</html> 

<?php } else {
    echo  "<script>alert('Please Logout first')</script>";
} 
?>



