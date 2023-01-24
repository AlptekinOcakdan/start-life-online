<?php

function write($ad,$soyad="Soyad girilmemiştir"){
    return $ad." ".$soyad;
}

echo write("Alptekin","Ocakdan");