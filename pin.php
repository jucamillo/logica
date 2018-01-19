<?php
for ($i=0; $i < 100; $i++){
  $number = ($i + 1);
  //echo $number;
  if($number %  4 == 0){
    echo "PIN";
  }else{
    echo $number;

  }
  echo "<br>";
}
