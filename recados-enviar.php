<?php

$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$recado = $_POST['txtrecado'];
$data = date("d/m/Y", time());

$sql = "insert into recados
            (nome, turma, recado, data)
        values
            ('$nome', '$turma', '$recado', '$data')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$conexao->exec($sql);

echo "<h2>Recado gravado com sucesso</h2>";
echo "<a href='recados.php'>Voltar</a>";

?>