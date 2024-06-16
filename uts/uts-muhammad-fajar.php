<?php

class Barang
{
    public $no;
    public $nama;
    public $qty;
    public $harga;

    public function __construct($no, $nama, $qty, $harga)
    {
        $this->no = $no;
        $this->nama = $nama;
        $this->qty = $qty;
        $this->harga = $harga;
    }

    public function hitungTotal()
    {
        return $this->qty * $this->harga;
    }
}

class Pembelian
{
    public $listBarang = [];

    public function tambahBarang(Barang $barang)
    {
        $this->listBarang[] = $barang;
    }

    public function hitungGrandTotal()
    {
        $total = 0;
        foreach ($this->listBarang as $barang) {
            $total += $barang->hitungTotal();
        }
        return $total;
    }

    public function hitungPPN()
    {
        return 0.11 * $this->hitungGrandTotal();
    }

    public function hitungTotalSetelahPPN()
    {
        return $this->hitungGrandTotal() + $this->hitungPPN();
    }
}

// Membuat objek barang
$barang1 = new Barang(1, "Buku", 3, 5000);
$barang2 = new Barang(2, "Pensil", 5, 1000);
$barang3 = new Barang(3, "Pensil Warna", 2, 2000);

// Membuat objek pembelian
$pembelian = new Pembelian();

// Menambahkan barang ke dalam pembelian
$pembelian->tambahBarang($barang1);
$pembelian->tambahBarang($barang2);
$pembelian->tambahBarang($barang3);

?>
<style>
    div.header-main {
        display: flex;
        justify-content: space-between;
    }

    div.header2 {
        margin-right: 100px;
    }

    div.ttd {
        width: 20%;
        margin-left: 80%;
        text-align: center;
    }

    td {
        text-align: center;
    }

    .black {
        background-color: black;
        color: white;
    }
</style>
<div align='center'>
    <h2>INVOICE</h2>
    <p>No:.............</p>
</div>

<div class="header-main">
    <div class="header">
        <p>Nama Pelanggan : Muhammad Fajar Ramadhan<br>Alamat : Kosambi, Klari, Karawang</p>
    </div>
    <div class="header2">
        <p>Tanggal tagihan : 04 - 04 - 2024<br>Tengat waktu :12 - 04 - 2024</p>
    </div>
</div>

</div>



<table border="1" cellpadding='0' cellspacing='0' width="100%" height="200">
    <tr align="center">
        <th>No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Jumlah Total</th>
    </tr>
    <?php foreach ($pembelian->listBarang as $barang) : ?>
        <tr>
            <td><?php echo $barang->no; ?></td>
            <td><?php echo $barang->nama; ?></td>
            <td><?php echo $barang->qty; ?></td>
            <td><?php echo $barang->harga; ?></td>
            <td><?php echo $barang->hitungTotal(); ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="4" class="black">PPN 11%</td>
        <td><?php echo $pembelian->hitungPPN(); ?></td>
    </tr>
    <tr>
        <td colspan="4" class="black">Grand Total</td>
        <td><?php echo $pembelian->hitungTotalSetelahPPN(); ?></td>
    </tr>
</table>


<div class="ttd">
    <br><br>
    <p>ttd</p>
    <br>
    <p>Finance Manager</p>
</div>