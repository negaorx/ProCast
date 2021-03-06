<?php 
    include('verificar_logado.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Home</title>
        <link rel="stylesheet" href="css/home.css">
		<?php
			include('link_head.html');
		?>
	</head>
	<body>
        <?php
            include('menu2.php');
        ?>
        <!--BANNER-->
        <div class="camp">
            <div class="container-fluid">
                <h3 class="text-center fonte_branca texto_sombra"><strong>Entre para um clube e</strong></h3>
                <h1 class="text-center fonte_branca texto_sombra">
                    <strong>Aumente suas chances de ser um profissional!</strong>
                </h1>
                
            </div>
        </div>
        <!--NOTICIAS-->
        <div class="container-fluid">
            <?php
                $sqlsel='SELECT * FROM noticia order by data desc LIMIT 3;';
                $res=mysqli_query($conexao,$sqlsel);
                if (mysqli_num_rows($res)) {
            ?>
           <div class="row">
                <h2 class="text-center fonte_cinza_escuro"><strong>Veja as principais notícias sobre e-sports</strong></h2>
                 <?php
                 
                    while ($controle=mysqli_fetch_array($res)) {
 
                ?>
                <a href="conteudo_noticia.php?ex=<?php echo $controle['id_noticia']?>">
                    <div class="col-md-4">
                        <div class="panel panel-default noticia mg_tp">
                            <img src="uploads/<?php echo($controle['imagem_noticia']); ?>" class="altr" width="100%" height="300">
                            <h4 class="text-center fonte_cinza_escuro"><strong><?php echo($controle['titulo']); ?></strong></h4>
                            <p class="text-center"><?php echo($controle['lide']); ?></p>
                            <p class="text-center fonte_azul_claro"><a href="conteudo_noticia.php?ex=<?php echo $controle['id_noticia']?>"><strong>Continuar Lendo</strong></a></p>
                        </div> 
                    </div>
                </a>
            <?php
                    }
                }
            ?>
            </div>
            <div class="row bg_branco anunc">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <h2 class="fonte_cinza_escuro"><strong>Anuncie-se</strong></h2>
                    <h4 class="mg_tp">
                        <strong>Quer ter mais visibilidade? Tornar-se um profissional? Anuncie-se agora mesmo!</strong>
                    </h4>
                    <p class="mg_tp">
                        Por apenas R$ 9,90 você pode ter seu perfil anunciado na pagina inicial do site, aumentado assim suas chances de ser descoberto.
                    </p>
                </div>
                <div class="col-md-offset-1 col-md-3 pri mg_tp">
                    <div class="panel sombra bg_branco_w card_preco">
                        <div class="panel-heading bg_cinza_escuro">
                            <h3 class=" text-center fonte_branca"><strong>Anúncio Gold</strong></h3>
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center fonte_cinza_escuro"><strong>R$ 9,90</strong></h1>
                            <p class="text-center fonte_cinza_claro"><strong>Válido somente para jogadores</strong></p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Anúncio de informações do perfil</li>
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Duração de 7 dias</li>
                        </ul>
                        <p class="mg_ld">
                            <form action="boleto/boleto_an_user.php" method="POST" target="_blank">
                                <input type="hidden" name="tipo_an" value="1">
                                <button type="submit" class="btn btn-lg fonte_branca bg_grad_cinza btn_fw mg_tp" <?php if($con['categoria_usuario']==2){echo 'disabled="disabled"';}?>><strong>Contratar</strong></button>
                            </form>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 x1 mg_tp">
                    <div class="panel sombra bg_branco_w card_preco">
                        <div class="panel-heading bg_cinza_escuro">
                            <h3 class=" text-center fonte_branca"><strong>Anúncio Platina</strong></h3>
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center fonte_cinza_escuro"><strong>R$ 19,90</strong></h1>
                            <p class="text-center fonte_cinza_claro"><strong>Válido somente para jogadores</strong></p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Anúncio de informações do perfil</li>
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Duração de 14 dias</li>
                        </ul>
                        <p class="mg_ld">
                            <form action="boleto/boleto_an_user.php" method="POST" target="_blank">
                                <input type="hidden" name="tipo_an" value="2">
                                <button type="submit" class="btn btn-lg fonte_branca bg_grad_cinza btn_fw mg_tp" <?php if($con['categoria_usuario']==2){echo 'disabled="disabled"';}?>><strong>Contratar</strong></button>
                            </form>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mg_tp">
                    <div class="panel sombra bg_branco_w card_preco">
                        <div class="panel-heading bg_cinza_escuro">
                            <h3 class=" text-center fonte_branca"><strong>Anúncio Diamante</strong></h3>
                        </div>
                        <div class="panel-body">
                            <h1 class="text-center fonte_cinza_escuro"><strong>R$ 39,90</strong></h1>
                            <p class="text-center fonte_cinza_claro"><strong>Válido somente para clubes</strong></p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Anúncio de nomes dos integrantes e vitórias do clube</li>
                            <li class="list-group-item sem_borda"> <span class="glyphicon glyphicon-ok-circle fonte_azul_claro" aria-hidden="true"></span> Duração de 14 dias</li>
                        </ul>
                        <p class="mg_ld">
                            <form action="boleto/boleto_an_user.php" method="POST" target="_blank">
                                <input type="hidden" name="tipo_an" value="3">
                                <button type="submit" class="btn btn-lg fonte_branca bg_grad_cinza btn_fw mg_tp" disabled="disabled"><strong>Contratar</strong></button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
            <!--SLIDESHOW-->

        </div> 
                    <div id="slide-anuncio" class="carousel slide " data-ride="carousel">
                <!--slides-->
                <div class="carousel-inner " role="listbox">
                    <div class="item active">
                        <div class="row">
                            <h2 class="fonte_branca vj text-center">Veja as melhores ofertas de nossos parceiros!</h2>
                        </div>
                    </div>
                    <?php
                        $sqlsel='SELECT * FROM anuncio WHERE status="1"';
                        $resul=mysqli_query($conexao,$sqlsel);
                        if (mysqli_num_rows($resul)>0)
                        {
                            while ($con_anuncio=mysqli_fetch_array($resul)) 
                            {
                    ?>
                    <div class="item">
                        <div class="row anun">
                            <div class="col-xs-offset-4 col-md-offset-2 col-md-4">
                                <a href="<?php echo($con_anuncio['link']) ?>" target="blank"><img src="uploads/<?php echo($con_anuncio['anuncio']) ?>" alt="" class="img-responsive"></a> 
                            </div>
                            <div class="col-xs-offset-4 col-md-offset-0 col-md-6 ">
                                <h3 class="fonte_branca"><strong> <?php echo($con_anuncio['nome_anuncio']) ?></strong></h3>
                                <p class="fonte_branca"> <?php echo($con_anuncio['descricao']) ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
                <!--controles-->
                <a class="left carousel-control sem_bg" href="#slide-anuncio" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left sem_bg fonte_branca" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control sem_bg" href="#slide-anuncio" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right sem_bg fonte_branca" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php
            include('rodape.html');
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('.carousel').carousel()
        </script>             
	</body>
</html>