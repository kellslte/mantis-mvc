<?php

/*
* Cleans data used in forms
* Prevents CSRF in form submission
*/
class Sanitize{
    private $status,
    		$error;

    public static function escape($string){
        if (!empty($string)) {
        	return htmlentities($string, ENT_QUOTES, 'UTF-8');
        }
    }

    public static function clean($string){
        return htmlspecialchars_decode($string);
    }

    public static function csrfProtect($string){
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }

    public static function fileName(){
        return self::escape($_SERVER["PHP_SELF"]);
    }
}
