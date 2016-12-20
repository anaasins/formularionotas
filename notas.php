<?php
//variables creadas
$mediaNotas=($_POST["prog"]+$_POST["ed"]+$_POST["llmm"]+$_POST["bbdd"])/4;
$notaALta=max($_POST["prog"], $_POST["ed"], $_POST["llmm"], $_POST["bbdd"]);
$notaBaja=min($_POST["prog"], $_POST["ed"], $_POST["llmm"], $_POST["bbdd"]);

//echos para imprimir la informacion.
echo $_POST["nombre"] ." " . $_POST["apellidos"] .", " .$_POST["curso"] ." " .$_POST["ciclo"] ."<br><br>";
echo "La media de las notas es: " .$mediaNotas ."<br><br>";
echo "La nota mas alta es: " .$notaALta ."<br><br>";
echo "La nota mas baja es: " .$notaBaja ."<br><br>";
 ?>
