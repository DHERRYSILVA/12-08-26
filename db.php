<?php 
echo "Sistema de Banco de Dados<br>"; 
$hostname = "localhost"; 
$username = "root";
$password = "";
$dbname = "exemplo";

$conexao = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conexao) {
    die("Erro na conexão como banco de dados");
}

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) == 0) {
    echo "A tabela usuários não possui nenhuma linha";
}

foreach($resultado as $usuario) {
    echo $usuario['nome']; "<br>";
}
?>