<?php

namespace guest\library\storage\session;

class SessionProvider{
    private static $object;

    private function __construct(){

    }
    public static function getInstance(){
        if(is_null(self::$object)){
             self::$object = new self;
        }
    }
    public  function get($key){
        return $_SESSION[$key];
    }
    public function set($key, $value){
        return $_SESSION[$key] = $value;
    }
}