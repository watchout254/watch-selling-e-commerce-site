<?php include_once 'conheader.php';
 ?>
<html>

<head>
    <link rel="shortcut icon" href="./IMAGES/mziza.jpg" type="image/x-icon">
</head>

</html>
<div class="container">
    <h1>Register to continue</h1>
    <?php 
    include_once 'confeedback.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($password == $confirm_password){
            try{
                $stmt = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
                $_SESSION['success'] = 'User registered successfully';
                header('Location: contact.php');
            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }else{
            $_SESSION['error'] = 'Password and confirm password does not match';
        }
    }
    
    ?>
    <form action="" method="POST">
        <div class="grid">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
        </div>
        <div class="grid">
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div>
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password">
            </div>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <p>Already have an Account? <a href="login.php">Login</a></p>
</div>