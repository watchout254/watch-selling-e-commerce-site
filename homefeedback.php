<?php
require_once 'homeconnect.php';

if(isset($_SESSION['success'])){
    echo '<p style="color: yelow">'.$_SESSION['success'].'</p>';
    unset($_SESSION['success']);
}

if(isset($_SESSION['error'])){
    echo '<p style="color: red">'.$_SESSION['error'].'</p>';
    unset($_SESSION['error']);
}
if(isset($_SESSION['errors'])):
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
    $old_data = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
else:
    $errors = [];
    $old_data = [];
endif;
?>