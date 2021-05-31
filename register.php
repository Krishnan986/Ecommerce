<?php 
include 'includes/init.php';
ob_start(); ?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

        <?php
        if(isset($_POST['submit'])){
            $user = new User;
            $user->email =$_POST['email']; 
            $user->username =$_POST['username']; 
            $user->password =$_POST['password'];
            $user->random =rand();
            $table = 'user';

            $fields = 'email, username, password, randomnumber';

            $values = "'$user->email', '$user->username', '$user->password', '$user->random'";

            $created = $user->create($table, $fields, $values);
               
            if($created){
                header("location: admin/index.php");
            }else{
                echo "FAILED";
            }


        }
        
        
        ?>

        <form action ="register.php" method ="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" required class="validate" autocomplete="off" name="email">
            </div>

            <div class="clearfix"></div>

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
                <input type="checkbox" required class="validate">
                <span style="color: #757575">I accept Terms of Service</span>
            </div>

            <input type="submit" value="Register" name ="submit" />
        </form>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            <span style="color: #657575">Do you already have an account?</span>
            <a href="login.php"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>