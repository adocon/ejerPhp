<?php
echo "<h2> 
 Definir dos variable con números y compararlos con un if para decidir cuál número
 es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que 
 resultó ser mayor, y un else para cubrir el caso inverso.</h2><br>";
 $num1 = 23;
 $num2 = 55;
echo "var1: ".$num1."   var2: ".$num2."<br>";
 if($num1 > $num2)
    echo $num1." es mayor que ".$num2;
 else
 echo $num2." es mayor que ".$num1;

echo "<h2> array asoc modificacion</h2><br>";
$persona=[
    "nombre" => "jhon",
    "apellido" => "Snow",
    "edad" => 27,
    "hobbies" => [
       "netflix" ,
        "futbol",
        "programar"
    ]
    ];
    echo "<pre>";
    var_dump($persona);
    echo "</pre>";
    $persona["edad"]=25;
    $persona["direccion"]="Winterfield";
    $persona["hobbies"][]="perreo";
    echo "<pre>";
    var_dump($persona);
    echo "</pre>";


echo "<h2> array busca pares</h2><br>";
function bucles($unArray) {
    $resultado = [];
      for($i=0; $i<count($unArray); $i++){
        if(($unArray[$i] % 2 ) == 0)
          $resultado[]=$unArray[$i];
       
    }
    return $resultado;
}

$miArray=[3,4,6,8,9,22,21,43,34,66];
var_dump(bucles($miArray));


echo "<h2> while standart</h2><br>";

   $contador = 1;
   $limite = 10;
   while($contador < $limite){
      echo $contador . '<br />';
      $contador++;
   }
?>