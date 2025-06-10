<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$estado = $_POST['estado'];
$educacion = $_POST['educacion'];
$escuela = $_POST['escuela'];
$colegio = $_POST['colegio'];
$universidad = $_POST['universidad'];
$pasatiempos = $_POST['pasatiempos'];
$otro = $_POST['otro'];
$favcolor = $_POST['favcolor'];
$peso = $_POST['peso'];


echo   "<h2>"."Datos Personales"."</h2>";
echo "Nombres: " . $nombres . "<br>";
echo "Apellidos: " . $apellidos . "<br>";
echo "Cedula: " . $cedula . "<br>";
echo "Celular: " . $celular . "<br>";
echo "Correo: " . $email . "<br>";
echo "Genero; " . $genero . "<br>";
echo "Estado Civil: " . $estado . "<br>";
echo   "<h2>"."Eduación"."</h2>";
echo "Educacion: " . $educacion . "<br>";
echo "Escuela: " . $escuela . "<br>";
echo "Colegio: " . $colegio . "<br>";
echo "Universidad: " . $universidad . "<br>";
echo   "<h2>"."Hobbies"."</h2>";
echo "Pasatiempos: <br>";
foreach ($pasatiempos as $pasatiempo) {
    echo "- " . $pasatiempo . "<br>";
}
if (!empty($otro)) {
    echo "Otro: " . $otro . "<br>";
}
echo "Color favorito: "  . $favcolor . "<br>";
echo "Peso (kg) " . $peso . "<br>";
  




?>


