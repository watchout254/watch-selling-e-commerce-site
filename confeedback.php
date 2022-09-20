<?php
require_once 'conconnect.php';

if(isset($_SESSION['success'])){
    echo '<p style="color: #388e3c">'.$_SESSION['success'].'</p>';
    unset($_SESSION['success']);
}

if(isset($_SESSION['error'])){
    echo '<p style="color: #c62828">'.$_SESSION['error'].'</p>';
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