<?php 

session_start(); 
if(!isset($_SESSION['success-login'])){
    header("location: ./index.php");
} else {
    if(isset($_POST['alert-success'])){
        $okayid = $_GET['id'];
        if($okayid == 1){
            unset($_SESSION['success-login']);
            header("location: ../index.php");
        }
    }
}