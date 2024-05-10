<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    

    <?php if(isset($_SESSION['warning'])){ ?>
        <div class="alert-pop">
            <div class="alert-form">
                <h1>Oops...!</h1>
                <p> <?php echo $_SESSION['warning']; ?> </p>
                <form action="../functions/error-alert-box.php?id=1" method="post"><button type="submit" name="alert-warn">Try again!</button></form>
            </div>
        </div>
    <?php } ?>

    <?php if(isset($_SESSION['success'])){ ?>
        <div class="alert-success">
            <div class="alert-form">
                <h1>Success!</h1>
                <p> <?php echo $_SESSION['success']; ?> </p>
                <form action="../functions/successful-alert-box.php?id=1" method="post"><button type="submit" name="alert-success">Continue</button></form>
            </div>
        </div>
    <?php } ?>

            <div class="form-container" id="form-c">
                    <form action="" method="post">
                        <div class="signup-head">
                    <h1>CREATE</h1>
                    <h2> ACCOUNT</h2>
                    </div>
                <hr>

                <a class="back-tag-signup" href="../index.php"><i class="fa-solid fa-xmark"></i></a>
        <div class="us-name">
            <input type="text" name="fname" placeholder="First name">
            <input type="text" name="lname" placeholder="Last name">
        </div>

        <div class="us-contact">
            <input type="text" class="us-email" name="email" placeholder="Email">
            <input type="text" class="us-ph" name="phno" placeholder="Phone number">
        </div>
        
        
        <div class="us-pwd">
            <i class="fa-solid fa-eye" id="eye1" onclick="pass1()"></i>
            <i class="fa-solid fa-eye-slash" id="eye2" onclick="pass2()"></i>
            <input type="password" name="pwd" placeholder="Password" id="pwd" class="passwd">
            <input type="password" name="cpwd" placeholder="Confirm password" id="cpwd">
            <i class="fa-solid fa-eye eye3" id="eye3" onclick="pass3()"></i>
            <i class="fa-solid fa-eye-slash eye4" id="eye4" onclick="pass4()"></i>
        </div>

        <div id="password-check">
            <p>Password must contain:</p>
            <ul class="list">

                <li class="checked lowercase">
                <span></span>
                At least 1 lowercase character (a...z)
                </li>

                <li class="checked uppercase">
                <span></span>
                At least 1 uppercase character (A...Z)
                </li>

                <li class="checked digit">
                <span></span>
                At least 1 digit (0...9)
                </li>

                <li class="checked special">
                <span></span>
                At least 1 special character (!...$)
                </li>

                <li class="checked eightlg">
                <span></span>
                At least 8 characters length!
                </li>
        </div>
        
        

        <div class="g-recaptcha" id="captcha" name="capcha" value='1' data-sitekey="6LcIDUwpAAAAADoEKvPWhrtyJOWtm1KSqiicxDYC">input</div>

        <div class="us-btn">
                <button type="submit" id="signup" class="btn1" name="create">Sign Up</button>
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
                    alert('Please verify you are not robot!');
                }
            });
        });

        $(document).ready(function(){
            $('#pwd').on('keyup', function(){
                passValue = $(this).val();

                    if(passValue.match(/[a-z]/g)){
                        $('.lowercase').addClass('active');
                    } else {
                        $('.lowercase').removeClass('active');
                    }

                    if(passValue.match(/[A-Z]/g)){
                        $('.uppercase').addClass('active');
                    } else {
                        $('.uppercase').removeClass('active');
                    }

                    if(passValue.match(/[0-9]/g)){
                        $('.digit').addClass('active');
                    } else {
                        $('.digit').removeClass('active');
                    }

                    if(passValue.match(/[^A-Za-z0-9]/g)){
                        $('.special').addClass('active');
                    } else {
                        $('.special').removeClass('active');
                    }

                    if(passValue.length == 8 || passValue.length > 8){
                        $('.eightlg').addClass('active');
                    } else {
                        $('.eightlg').removeClass('active');
                    }
            })
        })

    const passwordInput = document.getElementById('pwd');
    const passwordInput1 = document.getElementById('cpwd');


        function pass2() {
            document.getElementById('eye1').style.display = 'flex';
            document.getElementById('eye2').style.display = 'none';
            passwordInput.type = "text";
        }

        function pass1() {
            document.getElementById('eye2').style.display = 'flex';
            document.getElementById('eye1').style.display = 'none';
            passwordInput.type = "password";
        }

        function pass4() {
            document.getElementById('eye3').style.display = 'flex';
            document.getElementById('eye4').style.display = 'none';
            passwordInput1.type = "text";
        }

        function pass3() {
            document.getElementById('eye4').style.display = 'flex';
            document.getElementById('eye3').style.display = 'none';
            passwordInput1.type = "password";
        } 
    </script>

        
</body>
</html>


<?php

include('../database/databaseconnection.php');
if(isset($_POST['create'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phno'];
    $password = $_POST['pwd'];
    $confirmpassword = $_POST['cpwd'];
    $email_check = $conn->query("SELECT * FROM user WHERE email = '$email' LIMIT 1");
    
    if(preg_match("/[0-9]/", $fname) && preg_match("/[0-9]/", $lname)) {
        $_SESSION['warning'] = "Something wrong! Name shouldn't contain numbers.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if(preg_match("/[^A-Za-z0-9]/", $fname) && preg_match("/[^A-Za-z0-9]/", $lname)) {
        $_SESSION['warning'] = "Something wrong! Name shouldn't contain special characters.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if(mysqli_num_rows($email_check) > 0){
        $_SESSION['warning'] = "This email already exist!";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (empty($fname)) {
        $_SESSION['warning'] = "Something wrong! Please enter your first name.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if(empty($lname)) {
        $_SESSION['success'] = "Something wrong...! Please enter your last name.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";
        
    } else if (empty($email)) {
        $_SESSION['warning'] = "Something wrong...! Please enter your email.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['warning'] = "This email is not a valid email address!";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (empty($phone)) {
        $_SESSION['warning'] = "Something wrong...! Please enter your phone number.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (empty($password)) {
        $_SESSION['warning'] = "Something wrong...! Please enter password.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (empty($confirmpassword)) {
        $_SESSION['warning'] = "Something wrong...! Please enter confirmpassword. ";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if ($password !== $confirmpassword) {
        $_SESSION['warning'] = "Something wrong...! Password does not match.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (strlen($password) < 7) {
        $_SESSION['warning'] = "Something wrong...! password must be at least 8 characters long.";echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (!preg_match("/\d/", $password)) {
        $_SESSION['warning'] = "Something wrong...! password must contain at least 1 digit.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (!preg_match("/[A-Z]/", $password)) {
        $_SESSION['warning'] = "Something wrong...! password must contain at least 1 uppercase character.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (!preg_match("/[a-z]/", $password)) {
        $_SESSION['warning'] = "Something wrong...! password must contain at least 1 lowercase character.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if (!preg_match("/[^A-Za-z0-9]/i", $password)) {
        $_SESSION['warning'] = "Something wrong...! password must contain at least 1 special character.";
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else if(isset($_SESSION['warning'])){
        echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

    } else {
        $fname = ucfirst($fname);
        $lname = ucfirst($lname);
        $sql = "INSERT INTO user (first_name,last_name,email,phone_no,password) VALUES ('$fname','$lname','$email',$phone,'$password')";
        $insert = $conn->query($sql);
        if($insert){
            $_SESSION['success'] = "You had created successfully";
            echo "<script>window.location.assign('http://localhost/smc/pages/signup.php')</script>";

        }
    }
}
?>
