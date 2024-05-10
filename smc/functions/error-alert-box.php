<?php 

session_start(); 
if(!isset($_SESSION['warning'])){
    header("location: ../index.php");
} else {
    if(isset($_POST['alert-warn'])){
        $closeid = $_GET['id'];
        if($closeid == 1){
            unset($_SESSION['warning']);
            header("location: ../pages/signup.php");
        }
    }
}