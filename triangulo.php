<?php
for ($i=0; $i < 5; $i++){
  $number = ($i + 1);
  echo str_repeat ("*", $number). PHP_EOL;
}
echo "solucao1\n";
for ($i=1; $i <= 5; $i++){
  $k = $i;
  for($j=0; $j < $k; $j++){
    echo "*";
  }
  echo "\n";
}
echo "solucao2\n";

$asterisco = "*";
for ($i=0; $i < 5; $i++){
  echo $asterisco . PHP_EOL;
  $asterisco .= "*";
}
