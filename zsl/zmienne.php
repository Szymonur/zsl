<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10,'<br>';


  $x=10;
  $y=100;
  echo $x<=>$y;

  //równe, identyuczne

  $x=1;
  $y=1.0;

  echo gettype($x); //intiger
  echo gettype($y); //doubleval

  if ($x==$y) {
    echo "równe";
  } else {
    echo "różne";
  }

  if ($x==$y) {
    echo "identyczne";
  } else {
    echo "różne";
  }

  /*
    postintermentacja $x++
    preinkrementacja ++$x
    postintermentacja $x--
    predekrementacja --$x
*/

$x=1;

echo $x; //1
echo ++$x; //2
echo $x++; //2
echo ++$x; //4

$x=$x++;
echo $x; //4
$y=$x++;
echo $y; //4
echo $x; //5

//zadanie

$x=1;
echo $x;  //1
$x=$x++;
echo $x;  //2
$x=++$x;
echo $x;  //2
$y=++$x; 
echo $x;  // 3
echo $y;  // 3
$y=$x++;
echo $x;  //4
echo "$y<br>"; //4



?>
