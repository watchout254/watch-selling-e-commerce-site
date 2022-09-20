<?php include_once 'conheader.php'; ?>

<div class="container">
    <h1>Login in continue</h1>
    <?php 
    include_once 'confeedback.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        try{
            $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if($stmt->rowCount() == 0){
                $_SESSION['error'] = 'User with this email does not exists';
            }
            else {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if(password_verify($password, $user['password'])){
                    $_SESSION['user'] = $user;
                    $_SESSION['success'] = 'User logged in successfully';
                    header('Location: index.php');
                    exit();
                }else{
                    $_SESSION['error'] = 'Password is incorrect';
                }
            }
        }catch(PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }
        header('Location: login.php');
        
    }
    
    ?>
    <form action="" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <p>Don't have an Account? <a href="register.php">Register</a></p>
</div>