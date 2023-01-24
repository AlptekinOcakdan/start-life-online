<?php
require_once 'connection.php';
if (isset($_POST['insert'])) {
    $save = $db->prepare("INSERT into myInformation set
                              myInformation_name=:myInformation_name,
                              myInformation_lastName=:myInformation_lastName,
                              myInformation_mail=:myInformation_mail,
                              myInformation_age=:myInformation_age
                          ");
    $insert = $save->execute(array(
        'myInformation_name' => $_POST['myInformation_name'],
        'myInformation_lastName' => $_POST['myInformation_lastName'],
        'myInformation_mail' => $_POST['myInformation_mail'],
        'myInformation_age' => $_POST['myInformation_age'],
    ));

    if ($insert) {
//        echo "Kayıt Başarılı";
        Header("Location:index.php?durum=ok");
        exit;
    } else {
//        echo "Kayıt Başarısız";
        Header("Location:index.php?durum=no");
    }
}