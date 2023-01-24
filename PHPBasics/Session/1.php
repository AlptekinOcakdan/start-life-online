<?php
session_start();
$_SESSION['adsoyad']="Alptekin Ocakdan";
echo $_SESSION['adsoyad'];
date_default_timezone_set('Europe/Istanbul');