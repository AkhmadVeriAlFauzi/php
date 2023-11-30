<html>

<?php

//echo dan print digunakan untuk menampilkan konten

echo "Selamat Datang Pertemuan 8";
echo "<br>";
print "hello";


//membuat variabel PHP
$a = "Selamat datang dihalaman PHP";
$b = 10;
$c = 20;
$d = $b+$c;

echo "<br>";

echo "<br>";
echo $a;
echo "<br>";
echo "nilai variabel b : $b";
echo "<br>";
echo "nilai variabel c : $c";
echo "<br>";
// echo "Jumlah variabel : $b + $c";
// echo "<br";
echo "jumlah variabel adalah $d";
echo "<br>";


//array
$matkul = array("sbd" ,"erp", "web", "jarkom");
echo"<br>";
echo implode(",", $matkul)."<br>";
echo implode(".", $matkul)."<br>";
echo implode("-", $matkul)."<br>";
echo implode("_", $matkul)."<br>";

echo"<br>";


$coba + 3;
$coba += 10;

$tes = "hai";
$tes .= "siappa disana!";

echo"<br>";
print $coba;
echo"<br>";
print $tes;
echo"<br>";

echo"<br>";


//pengondisian
$nilai = 90;
echo "nilai anda :" .$nilai;
echo "<br>";
if($nilai >= 80){
    echo "Anda mendapat A";
}elseif ($nilai == 80){
    echo "Anda mendapat B";
}else {
    echo "Anda Mendapat C";
}


echo"<br>";
//perulangan
while ($c >= 3){
    echo "bilangan adalah $c <br>";
    $c++;
}
?>

</html>