<?php

$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome </p>";
echo "<p>Turma: $turma </p>";
echo "<p>Comentário: $comentario </p>";

$sql = "insert into comentarios
            (nome, turma, comentario)
        values
            ('$nome', '$turma', '$comentario')";

echo $sql;

$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$conexao->exec($sql);

echo "<h2>Comentário gravado com sucesso</h2>";

?>