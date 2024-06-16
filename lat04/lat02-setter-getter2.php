<?php

class Customer
{
    private $cusID;
    private $cusNM;
    private $email;

    public function setCus($cusID, $cusNM, $email)
    {
        $this->cusID = $cusID;
        $this->cusNM = $cusNM;
        $this->email = $email;
    }

    public function getCusID()
    {
        return $this->cusID;
    }

    public function getCusNM()
    {
        return $this->cusNM;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class User
{
    private $userID;
    private $userName;
    private $status;
    private $cusID;

    public function setUser($userID, $userName, $status, $cusID)
    {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->status = $status;
        $this->cusID = $cusID;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function getCusID()
    {
        return $this->cusID;
    }
}

class Transaction extends User
{
    private $userName;
    private $status;
    private $trxID;
    private $trxName;
    private $trxDate;
    private $userID;


    public function __construct($userName, $status, $trxID, $trxName, $trxDate, $userID)
    {
        $this->userName = $userName;
        $this->status = $status;
        $this->trxID = $trxID;
        $this->trxName = $trxName;
        $this->trxDate = $trxDate;
        $this->userID = $userID;
    }

    public function show()
    {
        return "Nama : " . $this->userName . "<br>" . "Status : " . $this->status . "<br>" . "ID Transaksi: " . $this->trxID . "<br>" . "Nama Transaksi: " . $this->trxName . "<br>" . "Tanggal transaksi: " . $this->trxDate . "<br>" . "User ID: " . $this->userID;
    }
}



$customer = new Customer();
$customer->setCus(1, "Muhammad Fajar", "fajar123@gmail.com");
$user = new User();
$user->setUser(1, "Muhammad Fajar", "Single", $customer->getCusID());
$transaction = new Transaction($user->getUserName(), $user->getStatus(), 001, "Flash Sale", "06-Maret-2024", $user->getUserID());
echo $transaction->show();
