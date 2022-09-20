<?php
 require_once 'conconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     
    try {
     $stmt = $db->prepare("INSERT INTO pigia(name,email,subject, message) VALUES (?,?,?,?)");
    $stmt->execute([$name, $email, $subject, $message]);
    $_SESSION['success'] = 'SENT SUCCESSFULLY!!!!!!';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: contact.php');