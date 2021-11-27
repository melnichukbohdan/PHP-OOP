<?php

function my_autoload () {
    include(__DIR__ . "/" . "classes" . "/" . "User.php");
    include(__DIR__ . "/" . "classes" . "/" . "SuperUser.php");

}
spl_autoload_register("my_autoload");

$user1 = new User('Jom', 'admin', 'Bos12345');
$user2 = new User('Mike', 'dodik', 'pas12345');
$user3 = new User('Bob', 'Bob123', 'bob3214');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$sUser1 = new SuperUser('Jim', 'userGod12', 'goD123098', 'admin');



$sUser1->showInfo();


echo User::$userCounter . "<br>";
echo SuperUser::$superUserCounter . "<br>";