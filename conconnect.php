<?php
  $hostname = 'localhost';
  $username = 'root';  
  $password = '';
  $dbname = 'clock';

  try {
      $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!isset($_SESSION)) {
            session_start();
        }
  } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
  }