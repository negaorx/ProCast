	<nav class="nav-menu hidden-xs hidden-sm navbar-fixed-top">
	<a href="home.php"><img src="img/logo_horizontal.png" class="pull-left img-responsive logo" ></a>
		<ul class="ul-menu list-inline text-center unstyle-list col-md-offset-5">
			<li class="item item-log">
					<a class="menu-item " href="perfil_anunciante.php" >Minha conta </a>
			</li>
			<li class="item item-log">
					<a class="menu-item " href="moderar_anuncios.php" >Criar Anúncio </a>
			</li>
			<li class="item item-log">
					<a class="menu-item " href="anuncio.php">Meus anúncios </a>
			</li>
			<li class="item item-log">
					<a class="menu-item " href="politicas.php">Políticas </a>
			</li>
			<li class="item item-log">
					<a class="menu-item" href="destruir.php">Sair <i hidden="true" class="fa fa-sign-in fa-1x icone">  </i></a>
			</li>
		</ul>
	</nav>
	<div class="container-fluid visible-xs visible-sm img-responsive logo_horizontal" style="background-color:rgba(51, 51, 51, 1);padding:10px;margin:0px;">
		<div class="row text-center">
			<img src="img/logo_horizontal.png" >
		</div>
	</div>
	<!-- Menu mobile-->
	<nav hidden="true" id="mobile" class="nav-menu-mobile  text-center hidden-md">
		<div class="row item-mobile">
			<a href="perfil_anunciante.php">Minha conta</a>
		</div>
		<div class="row item-mobile">
			<a href="moderar_anuncios.php.php">Criar Anúncios</a>
			
		</div>
		<div class="row item-mobile">
			<a href="anuncio.php">Meus Anúncios</a>
		</div>
		<div class="row item-mobile">
			<a href="politicas.php">Políticas</a>
		</div>
	</nav>
	<!-- fim Menu mobile-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function(){				
			var menuMobile = $('#mobile');
			$('.logo_horizontal').click(function(){                                                                          
				menuMobile.slideToggle(1500);
				});
		});
		$(function() {
		  $(window).on("scroll", function() {
		    if($(window).scrollTop() > 50) {
		      $(".nav-menu").addClass("rolagem");
		    } else {
		      $(".nav-menu").removeClass("rolagem");
		    }
		  });
		});
	</script>