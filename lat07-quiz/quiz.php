<?php

class TokoBangunan
{
    private $invoiceNumber;
    private $invoiceDate;
    private $dueDate;
    private $cashier;
    private $customer;
    private $items = [];
    private $subTotal;
    private $discount;
    private $total;
    private $paymentDetails;

    public function __construct($invoiceNumber, $invoiceDate, $dueDate, $cashier, $customer)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->invoiceDate = $invoiceDate;
        $this->dueDate = $dueDate;
        $this->cashier = $cashier;
        $this->customer = $customer;
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function calculateSubTotal()
    {
        $subTotal = 0;
        foreach ($this->items as $item) {
            $subTotal += $item->calculateItemTotal();
        }
        $this->subTotal = $subTotal;
        return $subTotal;
    }

    public function calculateTotal()
    {
        $this->total = $this->subTotal * (1 - $this->discount / 100);
        return $this->total;
    }

    public function applyDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function generatePaymentDetails($bankName, $accountNumber, $accountHolder)
    {
        $this->paymentDetails = new PaymentDetails($bankName, $accountNumber, $accountHolder);
    }

    public function printInvoice()
    {
        // Cetak Customer
        echo "Invoice Details: <br>";
        echo "Invoice Number: " . $this->invoiceNumber . "<br>";
        echo "Invoice Date: " . $this->invoiceDate . "<br>";
        echo "Due Date: " . $this->dueDate . "<br>";
        echo "<br>";


        echo "Customer: <br>";
        $this->customer->printCustomer();
        echo "<br>";

        // Cetak item yang dibeli
        echo "Items: <br>";
        foreach ($this->items as $item) {
            $item->printItem();
        }
        echo "<br>";

        // Cetak detail pembayaran
        echo "Payment Total: <br>";
        echo "Sub Total: " . $this->subTotal . "<br>";
        echo "Discount: " . $this->discount . "%<br>";
        echo "Total: " . $this->total . "<br>";
        echo "<br>";

        echo "Payment Details: <br>";
        $this->paymentDetails->printPaymentDetails();
    }
}
class Item
{
    private $description;
    private $price;
    private $quantity;

    public function __construct($description, $price, $quantity)
    {
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function calculateItemTotal()
    {
        return $this->price * $this->quantity;
    }

    public function printItem()
    {
        echo "Order Description: " . $this->description . ", Price: " . $this->price . ", Quantity: " . $this->quantity . "<br>";
    }
}

class Customer
{
    private $name;
    private $phoneNumber;
    private $address;

    public function __construct($name, $phoneNumber, $address)
    {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    public function printCustomer()
    {
        echo "Name: " . $this->name . "<br>" . "Phone Number: " . $this->phoneNumber . "<br>" . "Address: " . $this->address . "<br>";
    }
}

class PaymentDetails
{
    private $bankName;
    private $accountNumber;
    private $accountHolder;

    public function __construct($bankName, $accountNumber, $accountHolder)
    {
        $this->bankName = $bankName;
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
    }

    public function printPaymentDetails()
    {
        echo "Bank Name: " . $this->bankName . "<br>" . "Account Number: " . $this->accountNumber . "<br>" . "Account Holder: " . $this->accountHolder . "<br>";
    }
}

// Contoh penggunaan:
$customer = new Customer("Muhammad Fajar", "+123-456-7890", "123 Anywhere St., Any City");

$invoice = new TokoBangunan("0001", "10/07/2024", "15/07/2024", "Juliana Silva", $customer);

$item1 = new Item("Keramik rumah", 100000, 3);
$item2 = new Item("Batu kerikil", 60000, 2);
$item3 = new Item("Kertas amplas halus", 5000, 1);
$item4 = new Item("Semen", 50000, 5);
$item5 = new Item("Pasir putih", 30000, 2);

$invoice->addItem($item1);
$invoice->addItem($item2);
$invoice->addItem($item3);
$invoice->addItem($item4);
$invoice->addItem($item5);

$invoice->calculateSubTotal();
$invoice->applyDiscount(10); // Diskon 10%
$invoice->calculateTotal();
$invoice->generatePaymentDetails("Bank Shodwe", "0123 456 7890", "Samira Hadid");

$invoice->printInvoice();
