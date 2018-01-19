<?php
$nota = 5;
var_dump (10 === "10");

echo "<br>";

if($nota >= 5){
  echo "Você foi aprovado" . PHP_EOL;
} elseif ($nota >= 3) {
  echo "Recuperação" . PHP_EOL;
} else{
  echo "Reprovado" . PHP_EOL;
}

echo "<br>";

$a = true && false;
$b = (true and false);

echo "<br>";
var_dump($a);
var_dump($b);


echo "<br>";
var_dump(2 <=> 1);
var_dump(1 <=> 1);
var_dump(1 <=> 2);


echo "<br><br>";

for ($i=0; $i < 10; $i++){
  echo ($i + 1) . PHP_EOL;
}
