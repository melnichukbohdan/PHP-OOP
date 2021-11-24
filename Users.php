<?php

class Users {

    public function __construct($name, $login,$password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
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


$user1 = new Users('Jom', 'admin', 'Bos12345');
$user2 = new Users('Mike', 'dodik', 'pas12345');
$user3 = new Users('Bob', 'Bob123', 'bob3214');


$user1->showInfo();
$user2->showInfo();
$user3->showInfo();


class SuperUser extends Users {

    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    public function showInfo() {
        echo 'User role' . ' ' . '-' . ' ' . $this->role . "<br>";
    }
}

$user = new SuperUser('Jim', 'userGod12', 'goD123098', 'admin');

$user->showInfo();