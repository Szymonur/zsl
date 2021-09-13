<?php
  echo "zsl<br>";
  echo "zsl<hr>";
  $name="janusz";
  echo 'Imię: $name<br>';
  echo "Imię: $name<br>";

  //typy danych
  // całkowity

  $całkowita=10; // tak nie robić pl=źle
  $bin=1011; // binarka
  $dziesiętną=0b1011; // 0b konwertuje na dziesiętną
  $oct=01011; // 0 konwertuje na ósemkowo
  $hex=0x1011; // 0 konwertuje hex


  echo $bin;
  echo $dziesiętną;
  echo $oct;
  echo $hex;

  // konkatenacja .  interpolacja ,
  echo $hex,'<br>';

  // zmiennpoprzecinkowy
  $x=10.5;
  echo $x;

  //logiczny

  $prawda=true;
  $falsz=false;

  echo $prawda,'<br>';
  echo $falsz;

  //składnia herdoc

  echo <<< ETYKIETA
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>

  ETYKIETA;

  $text = <<< ETYKIETA1
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
  ETYKIETA1;
  echo $text;

  echo <<< 'ETYKIETA2'
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>

  ETYKIETA2;







?>
