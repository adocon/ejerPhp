<?php
function bucles($unArray) {
    $resultado = [];
      for($i=0; $i<=count($unArray); $i++){
        if(($unArray[$i] % 2 ) == 0)
          $resultado[]=$unArray[$i];
       
    }
    return $resultado;
}

miArray=[3,4,6,8,9,22,21,43,34,66];
echo bucles($miArray)."<br>";

?>
<?php
   $contador = 1;
   $limite = 10;
   while($contador < $limite){
      echo $contador . '<br />';
      $contador++;
   }
?>