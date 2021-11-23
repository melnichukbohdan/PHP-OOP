<?php

class Users {

    public $name;
    public $login;
    public $password;

    public function showInfo () {
        echo 'User name' . ' ' . '-' . ' ' . $this->name . "<br>";
        echo 'User login' . ' ' . '-' . ' ' . $this->login . "<br>";
        echo 'User password' . ' ' . '-' . ' ' . $this->password . "<br>" . "<br>";
    }
}

$user1 = new Users();
$user1->name = 'Jom';
$user1->login = 'admin';
$user1->password = 'Bos12345';

$user2 = new Users();
$user2->name = 'Mike';
$user2->login = 'dodik';
$user2->password = 'pas12345';

$user3 = new Users();
$user3->name = 'Bob';
$user3->login = 'Bob123';
$user3->password = 'bob3214';

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
