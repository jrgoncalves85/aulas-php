<?php
$sql = "SELECT * FROM recados";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$resultado = $conexao->query($sql);
$lista = $resultado->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Pessoal</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="recados-estilo.css">

	<script type="text/javascript">
		function validaCampo()
		{
			if(document.recado.txtnome.value=="")
			{
				alert("O campo nome é obrigatório!");
				return false;
			}
			if(document.recado.txtrecado.value=="")
			{
				alert("O campo menssagem é obrigatório!");
				return false;
			}
			else
			return true;
		}
	</script>
</head>
<body>
<div id="tudo">
    <div id="topo">
        <img id="foto" src="imagens/Junior2020.jpg" width="75" height="75">
        <div id="titulo">
			<img id="logo" src="imagens/logo-nome.png" width="350" height="58">
			<p class="slogan">May the Force be with you</p>
		</div>	
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="academico.html">Acadêmico</a></li>
            <li><a href="profissional.html">Profissional</a></li>
            <li><a href="biblioteca.html">Biblioteca</a></li>
            <li><a href="recados.html">Recados</a></li>
        </ul>
    </div>
	<div id="recados">
		<h2>Meus recados</h2>
		<p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>		
        <?php foreach ($lista as $linha): ?>
			<div class="balao">
				<p class="recado"><?php echo $linha['recado'] ?></p>			
				<h4 class="nome"><?php echo $linha['nome'] ?> - <?php echo $linha['turma'] ?></h4>
			</div>
        <?php endforeach ?>
	</div>				
	<div id="rodape">
		<p>Desenvolvido por Júnior Gonçalves - 2021</p>
	</div>
</div>
</body>
</html>