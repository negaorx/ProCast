<?php 
	include("menu-admin.html");	
	$id = $_GET['alt'];
	$conexao = mysqli_connect('localhost','root','','dbprocast');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Gerencimento de notícias
		</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/gerenciamento_noticias.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/perfil/tabs.css" />
		<link rel="stylesheet" type="text/css" href="css/perfil/tabstyles.css" />
		<script src="js/tinymce/tinymce.min.js"></script>
  		
		<meta charset="UTF-8"/>
	</head>
	<body>
	
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 bg-procast titulo">
						<h1>Alterar Notícias</h1>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<div class="container-fluid">
			<div class="row">
				<?php 
					$consulta = mysqli_query($conexao, 'SELECT * FROM noticia WHERE id_noticia ='.$id.'');
					while ($editar = mysqli_fetch_array($consulta)) 
					{
					
				?>
				<div class="col-md-offset-1 col-md-10">
					<form method="POST" action="#" enctype="multipart/form-data">
						<div class="form-group col-md-12">
							<h4>Titulo da notícia:</h4>
							<input type="text" name="titulo_noticia" value="<?php echo $editar['titulo']?>" placeholder="Ex:Novo torneio" class="form-control" maxlength="50">
						</div>
						<div class="form-group col-md-12">
							<h4>lide da notícia:</h4>
							<input type="text" name="lide" value="<?php echo $editar['lide']?>" placeholder="Informações oque a notíca trata" class="form-control" maxlength="200">
						</div>
						<div class="form-group col-md-12">
							<h4>Categoria:</h4>
							<select class="form-control" name="categoria">
								<?php
									
									$select = "SELECT * FROM categoria_noticia ";
									$sql_sel = mysqli_query($conexao,$select);

									if($sql_sel)
									{
										while ($row = mysqli_fetch_array($sql_sel)) 
										{
								?>
											<option value="<?php echo $row['categoria_noticia']; ?>"><p color="black"><?php echo $row['categoria_noticia'];?></p></option>
								<?php
										}
									}
								?>
							</select>
						</div>
						<div class="form-group col-md-12">
							<h4>Inserir imagem:</h4>
							<input type="file" name="foto" class="btn btn-default" value="<?php echo $editar['imagem_noticia']; ?>" >
						</div>
						<div class="form-group col-md-12">
							<h4>Notícia:</h4>
							<textarea class="form-control" rows="10" value="<?php echo $editar['texto']; ?>" name="noticia" placeholder="Digite a noticia" maxlength="29000"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="enviar" class="btn btn-procast btn-block" value="Alterar">
						</div>
					</form>
				</div>
				<?php
					}
				?>
			</div>	
		
		</div>
		<script src="js/cbpFWTabs.js"></script>
		<script src="js/modernizr.custom.js"></script>
<?php 
	include("rodapeadm.html");
?>
	</body>
</html>