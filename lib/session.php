<?php

    class Session{

        public function init(){
            session_start();
        }

        public static function set($key, $value){
            $_SESSION[$key] = $value;
        }

        public static function get($key){
           if(isset($_SESSION[$key])){
            return $_SESSION[$key] ;
           }else{
            return false;
           }
        }

        // login value and session value cheack
        public static function loginCheck(){
            self::init();
            if(self::get('login') == true){
                header('Location:index.php');
            }
        }

        // session cheack
        public static function sessionCheck(){
            self::init();
            if (self::get('login') == false) {
               self::destroy();
               header('Location: login.php');
            }
            
        }

        public static function destroy(){
           session_destroy();
           header('Location:login.php');           
        }


    }



?>