<?php
for ($a=0; $a < 5; $a++){

  for ($i=0; $i < 5; $i++){
    $number = ($i + 1);
    echo str_repeat ("*", $number). PHP_EOL;
  }
}
