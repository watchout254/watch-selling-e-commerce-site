<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }
 if(isset($_SESSION['user'])){
     unset($_SESSION['user']);
     $_SESSION['success'] = 'You have been logged out successfully';
     header('Location: contact.php');
 }