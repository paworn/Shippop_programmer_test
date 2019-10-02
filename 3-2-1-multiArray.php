<?php
$marks = array(
  "mohammad" => array(
    "physics" => 35,
    "maths" => 30,
    "chemistry" => 39
  ),
  "qadir" => array(
    "physics" => 30,
    "maths" => 32,
    "chemistry" => 29
  ),
  "zara" => array(
    "physics" => 31,
    "maths" => 22,
    "chemistry" => 39
  )
);

  foreach ($marks as $row => $person) {
    foreach ($person as $subject => $value) {
      if ($value == 35) {
        echo $value;
        }
    }
  }
 ?>
