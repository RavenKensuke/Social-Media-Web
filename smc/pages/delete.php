<?php
include('../database/databaseconnection.php');

session_start();
if(!isset($_SESSION['user-id'])){
    echo "<script>alert('Please Login First');
    window.location.assign('http://localhost/smc/pages/login.php');</script>";
    die();
}

if(isset($_POST['delete'])){
$sid = $_GET['id'];
$sql = "DELETE FROM search WHERE search_id = $sid";
$delete = $conn->query($sql);
if($delete){
    echo "<script>
    window.location.assign('http://localhost/smc/pages/browsing.php');</script>";
    die();
  }
 }