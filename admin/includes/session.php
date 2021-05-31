<?php 

class Session {

    public function __construct() {
        session_start();
    }
    public function login($user_found){
        if($user_found){
            $_SESSION['user_id'] = $user_found->id;
        }
       
        }
        public function logout(){
            if(isset($_SESSION['user_id'])) {
            unset($_SESSION['user_id']);
            }
    }
}
$session = new Session;
?>