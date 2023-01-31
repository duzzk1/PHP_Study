<?php 

  echo "Hello, World! but with array manipulation!";

  $arr = ["h"," ","e"," ","l"," ","l"," ","o"];
  echo "<br>";
  echo "<hr>";
  foreach ($arr as $key => $value) {
    
    if ($value != " "){
   
    echo "$arr[$key]";
   
    }
  }
echo " < this part is a foreach example!"
?>