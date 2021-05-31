<?php

class Session {

    public function __construct() {
        session_start();
    }
    public function login($user_found){
        if($user_found){
            $_SESSION['id'] = $user_found->id;
        }
       
        }
        public function logout(){
            if(isset($_SESSION['id'])) {
            unset($_SESSION['id']);
            }
    }
}
$session = new Session;

?>
