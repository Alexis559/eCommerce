<?php
class Conf {
   
  static private $databases = array(
    'hostname' => 'secret',
    'database' => 'secret',
    'login' => 'secret',
    'password' => 'secret'
  );
   
  static public function getLogin() {
    //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
    return self::$databases['login'];
  }
  
  static public function getHostname(){
      return self::$databases['hostname'];
  }
  
  static public function getDatabase(){
      return self::$databases['database'];
  }   
  
  static public function getPassword(){
      return self::$databases['password'];
  }
  
  static private $debug = True; 
    
  static public function getDebug() {
      return self::$debug;
  }
  
}
?>
