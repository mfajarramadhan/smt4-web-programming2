<?php
class User
{
    protected $id_user;
    protected $nm_user;
    protected $transactionId;
    protected $transactionDate;
    protected $productName;

    public function __construct($id_user, $nm_user, $transactionId, $transactionDate, $productName)
    {
        $this->id_user = $id_user;
        $this->nm_user = $nm_user;
        $this->transactionId = $transactionId;
        $this->transactionDate = $transactionDate;
        $this->productName = $productName;
    }

    // get
    public function getIdUser()
    {
        return $this->id_user;
    }
    public function getNmUser()
    {
        return $this->nm_user;
    }
    public function getTrxId()
    {
        return $this->transactionId;
    }
    public function getTrxDate()
    {
        return $this->transactionDate;
    }
    public function getProductName()
    {
        return $this->productName;
    }

    // set
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
    public function setNmUser($nm_user)
    {
        $this->nm_user = $nm_user;
    }
    public function setTrxId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    public function setTrxDate($transactionDate)
    {
        $this->$transactionDate = $transactionDate;
    }
    public function setproductName($productName)
    {
        $this->productName = $productName;
    }
}

class Transaksi extends User
{
    public $id_user;
    public $nm_user;
    public $transactionId;
    public $transactionDate;
    public $productName;
}

$Person = new Transaksi(111, "Fajar", 1, "28 Februari 2024", "Kacang");
echo "Id User : " . $Person->getIdUser() . "<br>";
echo "User : " . $Person->getNmUser() . "<br>";
echo "Transaction Id : " . $Person->getTrxId() . "<br>";
echo "Transaction Date : " . $Person->getTrxDate() . "<br>";
echo "Product Name : " . $Person->getProductName() . "<br>";
