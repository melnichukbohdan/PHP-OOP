<?php

class Users {

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

class SuperUser extends Users {

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



$user1 = new Users('Jom', 'admin', 'Bos12345');
$user2 = new Users('Mike', 'dodik', 'pas12345');
$user3 = new Users('Bob', 'Bob123', 'bob3214');
$user4 = clone $user3;
$user5 = clone $user1;

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$sUser1 = new SuperUser('Jim', 'userGod12', 'goD123098', 'admin');
$sUser2 = clone $sUser1;


$sUser1->showInfo();


echo Users::$userCounter . "<br>";
echo SuperUser::$superUserCounter . "<br>";