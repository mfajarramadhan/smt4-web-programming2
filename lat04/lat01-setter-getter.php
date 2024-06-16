<?php

class Customer
{
    public $cusID;
    public $cusNM;
    public $email;

    public function setCus($cusID, $cusNM, $email)
    {
        $this->cusID = $cusID;
        $this->cusNM = $cusNM;
        $this->email = $email;
    }

    public function getCus()
    {
        $customer = [
            $this->cusID,
            $this->cusNM,
            $this->email
        ];
        var_dump($customer);
    }
}

class User extends Customer
{
    public $userID;
    public $userName;

    public function setUser($userID, $userName)
    {
        $this->userID = $userID;
        $this->userName = $userName;
    }

    public function getUser()
    {
        $User = [
            $this->userID,
            $this->userName,
        ];
        var_dump($User);
    }
}



$cus = new Customer();
$cus->setCus(10, "Fajar", "fajar@krw.horizon.ac.id");
$cus->getCus();
echo "<br>";

$user = new User();
$user->setUser(123, "Fajarrama");
$user->getUser();
