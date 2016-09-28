<?php
function multiplication($x, $y){
  $z = $x*$y;
  return $z;
}

for($i = 0; $i<101; $i++){
  if($i == 0){
    for($k = 0; $k<101; $k++){
      if($k == 0){

      }
      else{
        echo $k;
      }
    }
  }
  else{
    for ( $j = 1; $j<101; $j++){
        echo multiplication($i,$j)."  ";
    }

  }
  echo "<br>";
}
?>
