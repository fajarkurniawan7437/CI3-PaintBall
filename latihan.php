<?php
for ($a=1; $a<=6; $a++){
     for ($b=6; $b>=$a; $b--){
    echo $b, " ";
      }
     echo "<br>";
}

echo "<br>";

$lompat = 5;
if($lompat <= 7) {
    echo $lompat = "1 2 3 lompat!", " ", $lompat++;
}
else {
    echo "Apa?";
}

echo "<br>";
echo "<br>";
$direktur = "manager";
if($direktur == "S1")
{
    echo "beberapa sarjana S1 adalah manager";
}
else
{
    echo "tidak ada sarjana S1 yang menjadi direktur";
}

echo "<br>";
echo "<br>";
$menjahit = 35; $mampu = 5; $december = 25;
$hari = $menjahit / $mampu;
$hasil = $hari * $december;
echo "dalam 1 hari Pak Taufik dapat menjahit $hari Baju <br>";
echo "jumlah baju yang dapat dijahit oleh Pak Taufik dari tanggal 1 December sampai 25 December adalah $hasil Baju";

echo "<br>";
echo "<br>";
$hargaJual = 1495000; $bunga = 0.15;
$keuntungan = $hargaJual * $bunga;
$hargaLaptop = $hargaJual - $keuntungan;
echo "Keuntungan yang didapat oleh Fulan dalam menjuak Laptop adalah Rp " . number_format($keuntungan, 2,",","."), "<br>";
echo "Harga beli laptop awal adalah Rp " . number_format($hargaLaptop, 2,",",".");

echo "<br>";
echo "<br>";
$lompat = 5;
if ($lompat <= 1) {
    $hasil = "1 2 3 lompat!";
} elseif($lompat <= 2){
    $hasil = "1 2 3 lompat! 1 2 3 lompat!";
} elseif($lompat <= 3){
    $hasil = "1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat!";
} elseif($lompat <= 4){
    $hasil = "1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat!";
} elseif($lompat <= 5){
    $hasil = "1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat!";
} elseif($lompat <= 6){
    $hasil = "1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat!";
} elseif($lompat <= 7){
    $hasil = "1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat! 1 2 3 lompat!";
} else {
    $hasil = "Apa?";
}

echo "Lompatan anda: $lompat<br>";
echo "Hasil: $hasil";

?>