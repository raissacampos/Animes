<?php
$servidor = '127.0.0.1';
$banco = 'bd_animes'; //nome do meu banco
$usuariobd = 'root';
$senha = '';
$conexao = mysqli_connect($servidor, $usuariobd, $senha, $banco);

$titulo = $_POST['titulo']; //campos que vc está cadastrando
$categoria = $_POST['categoria'];
$qtd = $_POST['qtd'];
$descricao = $_POST['descricao'];

$sqlGravar = "insert into tb_cadanimes(titulo, categoria, qtd, descricao) values ('$titulo', '$categoria', $qtd, '$descricao') "; //inserção no banco
mysqli_query($conexao, $sqlGravar);

mysqli_close($conexao);

header("location: index.php");

?>