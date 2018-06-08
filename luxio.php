<html>
<head>
<title>Koleksi</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="background: #3498db">
<div class="main">
<img src="luxio.jpg">
<div class="isi">
<div align="left" style="margin-left:5px; margin-right:40px; float:left">
Jenis Mobil </div>: <div style="float:right; margin-right:70px">luxio 1.3 M/T Deluxe</div><br>
<div align="left" style="margin-left:5px; margin-right:73px; float:left">
Harga </div>: <div style="float:right; margin-right:93px">Rp. 169.000.000</div><br>

<FORM action="" METHOD="POST" NAME="input">
<div align="left" style="margin-left:5px; margin-right:40px; float:left">
Pilih Warna</div>: <div style="float:right; margin-right:133px; margin-top:5px">
<select name="warna">
<option value="Silver">Silver
<option value="Hitam">Hitam
<option value="Merah">Merah</select></div>

<div align="left" style="margin-left:5px; margin-right:20px; float:left">Sistem Pembayaran</div>
<div align="left" style="margin-left:5px; margin-right:53px; float:left">
Cash<br>
<input type="submit" name="Beli" value="Beli"></div></div>
<?php
if (isset($_POST['Beli'])) {
$warna = $_POST['warna'];
$harga = "150.000.000";
echo "<div class='keluaran'>
<div align='left' style='margin-left:5px;'>Warna Mobil : $warna</div>";
echo "<div align='left' style='margin-left:5px;'>Harga :$harga</div>";
echo "<div align='left' style='margin-left:5px;'>Yang harus anda bayar : $harga</div>
<br>

<form method='post' action='bayar.php'>
<div align='left' style='margin-left:5px;'>
<div style='width:110px; float:left'>Nama</div>:
<input name='nama'></div>

<div align='left' style='margin-left:5px;'>
<div style='width:110px; float:left'>Alamat</div>:
<input name='alamat'></div>

<div align='left' style='margin-left:5px;'>
<div style='width:110px; float:left'>Pekerjaan</div>:
<input name='Pekerjaan'></div><br>
</form>
<a href='profdiler.php'>Kembali Ke Beranda</a>

";

};
if (isset($_POST['INPUT'])){
$uang = $_POST['uang'];
$angsur = $_POST['angsur'];
$harga = "150000000";
$total = ($harga - $uang)/$angsur;
echo "Tanggungan / Bulan: $total</form><br>";
}
?>