<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      try {
        if (!isset(self::$instance)) {
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
          //Note: You may have to change this line to match your database user/password.
          self::$instance = new PDO('mysql:host=localhost;port=1234;dbname=mygig', 'root', 'usbw', $pdo_options);
        }
        return self::$instance;
      } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
      }
    }
  }
?>