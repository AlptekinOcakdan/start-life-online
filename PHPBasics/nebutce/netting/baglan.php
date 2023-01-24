<?php 
try {
	$db=new PDO("mysql:host=localhost;dbname=nebutce;charset=utf8",'root','12345678');
	// echo "bağlantı başarılı";
} catch(PDOExpception $e)
{
	echo $e->getMessage();
}
