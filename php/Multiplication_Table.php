<?php
function multiplication($x, $y){
  $z = $x*$y;
  return $z;
}

for($i = 0; $i<101; $i++){
  echo '<tr>';
  if($i == 0){
    for($k = 0; $k<101; $k++){
      if($k == 0){
        echo '<td></td>';
      }
      else{
        echo '<th>'.$k.'</th>';
      }
    }
  }
  else{
    for ( $j = 0; $j<101; $j++){
      if($j == 0){
        echo '<th>'.$i.'</th>';
      }
      else{
        echo '<td>'.multiplication($i,$j)."</td>";
      }
    }


  }
  echo '</tr>';
}
?>
