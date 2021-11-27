<?php

class SuperUser extends User {

    public static $superUserCounter = 0;

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
        ++self::$superUserCounter;
        --parent::$userCounter;
    }

    //this method adds to the total number of objects, including cloned objects
    public function __clone() {
        ++self::$superUserCounter;

    }

    public function showInfo() {
        echo 'User role' . ' ' . '-' . ' ' . $this->role . "<br>";
    }


}