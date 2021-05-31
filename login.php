<?php include 'includes/init.php';
ob_start();
?>

<?php
if(isset($_SESSION['id']) ){
  header("location: users/index.php ");
}else if(isset($_SESSION['admin'])){
    header("location: admin/index.php ");
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #F2F2F2;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>
        <?php 
                   
                   if(isset($_POST['submit'])){

                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $remember_me =$_POST['checkbox'];
                    $user_found = User::verify_user($username, $password);
                    if($username=="admin" && $password=="admin"){
                        $_SESSION['admin'] = "admin";
                        header("location: admin/index.php");
                    }

                    if($user_found){ 
                        if(!empty($remember_me)){
                            setcookie("username",$username);
                            setcookie("password",$password);
                            $session->login($user_found);
                            header("location: users/index.php");
                        }else{
                            $session->login($user_found);
                            header("location: users/index.php");
                        }
                      

                    }else{
                        echo 'User not found';
                    }
                  
                  
                  }
                   
                   ?>

        <form action="login.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off" name="username">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off" name="password">
            </div>

            <div class="remember-me">
                <input type="checkbox" name="checkbox">
                <span style="color: #757575">Remember Me</span>
            </div>

            <input type="submit" value="Log In" name="submit" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            <span style="color: #657575">Don't have an account yet?</span>
            <a href="register.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
</body>

</html>