<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Ilustração';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="ilustracao">
        <div class="container">
            <?php include 'assets/menu.php'; ?>
            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Ilustração</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <article>
                        <img class="redux" src="<? echo $images ?>ilustracao/1-Abertura/Grupo 7954.png" alt="">
                        <p>Seguindo a linguagem geométrica dos ícones, sugerimos um deck de ilustrações positivas e customizáveis.</p>

                        <div class="baixo">
                            <div class="esq">
                                <div class="flexx">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 7789.png" alt="">
                                </div>
                                <div class="flexx">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 7999@2x.png" alt="">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 8003@2x.png" alt="">
                                </div>
                            </div>
                            <div class="dir">
                                <div class="flexx">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 7997@2x.png" alt="">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 7791@2x.png" alt="">
                                </div>
                                <div class="flexx">
                                    <img class="redux" src="<? echo $images ?>ilustracao/2-Exemplos/Grupo 7998@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="debaixo">Um recurso versátil de traço leve, que dá maior liberdade criativa e consistência à identidade com o uso da nossa paleta de cores.</p>
                    </article>
                </section>

                <section id="sessao2">
                    <article>
                        <p class="txt--padrao40">Customização</p>
                        <div class="wrapper-customizacao">
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>ilustracao/3-Customizacao/Grupo 8000@2x.png" alt="">
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>ilustracao/3-Customizacao/Grupo 8001@2x.png" alt="">
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>ilustracao/3-Customizacao/Grupo 8002@2x.png" alt="">
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao3">
                    <article>
                        <p>
                            <strong>PARA CUSTOMIZAÇÃO E USO</strong><br>
                            Entre em contato com o marketing para download de ilustrações existentes ou consulte o banco original pelo link:<br>
                            <a href="https://icons8.com/illustrations/style--pablita">https://icons8.com/illustrations/style--pablita</a>
                        </p>
                    </article>
                </section>

                <? include ('assets/footer.php') ?>
            </main>

        </div>

    
        <script type="text/javascript">
            $('.link-abre').removeClass('active')
            $('.menu li').hide();
			$('.link-abre:eq(5)').addClass('active');
		</script>
    </body>
</html>