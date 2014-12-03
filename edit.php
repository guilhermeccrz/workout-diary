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
			<form role="form">
				<div class="row form-group">

					<div class="col-lg-6">
						<label for="exampleInputEmail1">Grupo muscular</label>
						  <select class="form-control">
						  	<option>Peitoral</option>
						  	<option>Triceps</option>
						  	<option>Costas</option>
						  	<option>Biceps</option>
						  	<option>Ombros</option>
						  	<option>Pernas</option>
						  	<option>Abdomen</option>
						  </select>
					</div>

					<div class="col-lg-6">
						<label for="exampleInputEmail1">Tipo de treino</label>
						  <select class="form-control">
						  	<option>ABC2x</option>
						  	<option>ABCD</option>
						  	<option>ABCDE</option>
						  </select>
					</div>
				</div>

				<div class="row form-group">

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Nome do treino">
						</div>
					</div>
				</div>

				<div class="row form-group">

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Séries X /">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="De Y">
						</div>
					</div>
				</div>

				<div class="row form-group">

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Peso 1X">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Peso 2X">
						</div>
					</div>
				</div>

				<div class="row form-group">

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Peso 3X">
						</div>
					</div>

					<div class="col-lg-6">
						<div class="input-group input-group-lg">
						  <span class="input-group-addon"></span>
						  <input type="text" class="form-control" placeholder="Peso 4X">
						</div>
					</div>
				</div>
				 <button type="submit" class="btn btn-primary pull-right">Submit</button>
			</form>

		</div>


    </body>
</html>