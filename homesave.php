<?php
 require_once 'homeconnect.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $email = $_POST['email'];
    try {
     $stmt = $db->prepare("INSERT INTO news(email) VALUES (?)");
    $stmt->execute([$email]);
    $_SESSION['success'] = 'SENT SUCCESSFULLY';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('location:index.php');