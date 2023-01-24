<?php require_once 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD İşlemleri</title>
</head>
<body>
<h1>Veritabanı PDO kayıt işlemleri</h1>
<hr>
<?php
if ($_GET['durum'] == "ok") {
    echo "işlem başarılı";
} elseif ($_GET['durum'] == "no") {
    echo "işlem başarısız";
}
?>
<form action="islem.php" method="POST">
    <input type="text" required name="myInformation_name" placeholder="Adınızı Giriniz...">
    <input type="text" required name="myInformation_lastName" placeholder="Soyadınız Giriniz...">
    <input type="email" required name="myInformation_mail" placeholder="Mail Giriniz...">
    <input type="text" required name="myInformation_age" placeholder="Yaş Giriniz...">
    <button type="submit" name="insert">Formu Gönder</button>
</form>

<br>
<h4>Kayıtların Listelenmesi</h4>
<hr>
<?php
$askinformation = $db->prepare("SELECT * from myInformation");
$askinformation->execute();

//$bringinformation = $askinformation->fetch(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r($bringinformation);
//echo "</pre>";

while ($bringinformation = $askinformation->fetch(PDO::FETCH_ASSOC)){
    echo $bringinformation['myInformation_name'];
    echo "<br>";
}
?>
</body>
</html>