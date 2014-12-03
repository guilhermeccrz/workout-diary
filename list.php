<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Workout Diary</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="js/main.js"></script>

  		<div class="container">
	        <div class="page-header">
			  <h1>Workout Diary</small></h1>
			</div>
		</div>		

		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		     <ul class="nav navbar-nav">
		        <li class="active"><a href="add.php">Adicionar Treino <span class="sr-only">(current)</span></a></li>
		        <li><a href="edit.php">Editar Treino</a></li>
		        <li><a href="list.php">Listar Treinos</a></li>
		    </ul>
		  </div>
		</nav>

		<div class="container">
			<table class="table table-hover">
	  			<thead>
	  				<tr>
	  					<th>Grupo Muscular</th>
	  					<th>Tipo de Treino</th>
	  					<th>Nome do Treino</th>
	  					<th>Série X</th>
	  					<th>De Y</th>
	  					<th>Pesos</th>
	  					<th></th>
	  					<th></th>
	  				</tr>	
	  			</thead>
	  			<tbody>

	  				<?php 
						include "config_db.php";

						$sql = "SELECT * FROM tb_treino";

						$resultado = mysql_query($sql) or die ("ERRO");
						if (@mysql_num_rows($resultado) == 0){
						   die('Nenhum registro encontrado');
						}

						while ($linha = mysql_fetch_array($resultado)) {

	  				?>
					<tr>
	  					<td><?php echo $linha[0] ?></td>
	  					<td><?php echo $linha['tipo'] ?></td>
	  					<td><?php echo $linha['nome'] ?></td>
	  					<td><?php echo $linha['seriesx'] ?></td>
	  					<td><?php echo $linha['seriesy'] ?></td>
	  					<td><?php echo $linha['peso1'] ?>  <?php $linha['peso2'] ?>  <?php $linha['peso3'] ?>  <?php $linha['peso4'] ?>
	  					</td>
	  					<td><a href="#" class="glyphicon glyphicon-pencil"></a></td>
	  					<td><a href="#" class="glyphicon glyphicon-remove"></a></td>
	  				</tr>

	  				<?php
	  				}
	  				?>

	  			</tbody>
			</table>
		</div>

    </body>
</html>