<?php 

class User extends Main{

    public $id;
    public $email;
    public $username;
    public $password;
    public $random;

    public static function verify_user($username, $password){
        $array =self::query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        return array_shift($array);
    }
    
}

?>