<?php

$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$recado = $_POST['txtrecado'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome </p>";
echo "<p>Turma: $turma </p>";
echo "<p>Recado: $recado </p>";

$sql = "insert into recados
            (nome, turma, recado)
        values
            ('$nome', '$turma', '$recado')";

echo $sql;

$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$conexao->exec($sql);

echo "<h2>Recado gravado com sucesso</h2>";

?>