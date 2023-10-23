<?php
try {
  $db = new PDO("mysql:host=x.x.x.x;dbname=db_name","user_name","pass");
  $db-> exec("set names utf8");
  date_default_timezone_set('Europe/Istanbul');
  setlocale(LC_ALL, 'turkish');
} catch ( PDOException $e ){
     echo "baglanti hatasi :( ".$e;
}
?>
