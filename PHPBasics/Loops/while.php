<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>

<?php
//While döngüsü

/*$say=10;


while ($say <= 10) { $say++;

    echo $say; echo "<br>";

}*/


//for döngüsü ile dizi yazdırma

$dizi = array("elma", "armut", "üzüm", "kavun", "karpuz", "emrah", "udemy", "php", "bootstrap4");

//echo $dizi;

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "<hr>";

echo $dizi[0];
echo " ";
echo $dizi[1];
echo " ";
echo $dizi[2];
echo " ";
echo $dizi[3];
echo " ";
echo $dizi[4];
echo " ";

echo "<hr>";

$say = count($dizi);

for ($i = 0; $i <= $say; $i++) {

    echo $dizi[$i];
    echo " ";

}


echo "<hr>";
//Foreach döngüsü


foreach ($dizi as $meyve) {

    echo $meyve;
    echo " ";

}
?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>