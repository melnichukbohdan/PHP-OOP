<?php

class User {

    public static $userCounter = 0;

    public function __construct($name, $login,$password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
        ++self::$userCounter;
    }

    //this method adds to the total number of objects, including cloned objects
    public function __clone() {
        ++self::$userCounter;
    }

    public function showInfo () {
        echo 'User name' . ' ' . '-' . ' ' . $this->name . "<br>";
        echo 'User login' . ' ' . '-' . ' ' . $this->login . "<br>";
        echo 'User password' . ' ' . '-' . ' ' . $this->password . "<br>" . "<br>";
    }

    public function __destruct() {
        echo 'User - ' . $this->login . ' ' . 'removed' . "<br>";
    }
}