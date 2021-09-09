<?php

$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$comentario = $_POST['txtcomentario'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome";
echo "<p>Turma: $turma";
echo "<p>Comentario: $comentario";
echo "<br>";

$sql = "insert into comentarios (nome, turma, comentario) values ('$nome','$turma','$comentario')";

echo $sql;

?>