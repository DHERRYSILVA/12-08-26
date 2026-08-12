<?php
echo"sistema de banco de dados";
$hostname = "localhost";
$usarname = "root";
$password = "";
$dbname = "exemplo";

$conexao = mysqli_connect($hostname,$usarname,$password,$dbname);

if(!$conexao) {
    die ("erro na conexao de banco de dados");
}
$sql  = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao,$sql);

foreach ($resultado as $usuario) {
    echo $usuario ['nome'] . "<br>";
}
?>