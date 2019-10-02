<?php
  function space($number) {
      for($i = 1; $i <= $number; $i++){
        echo " ";
      }
  }
  function node($number) {
    for($i = 1; $i <= $number; $i++) {
      echo "O";
    }
  }
  function printNode($number) {
    for($i = 1; $i <= $number; $i++) {
      space($number - $i);
      node($i);
      echo "\n";
    }
  }
  printNode(5);
 ?>
