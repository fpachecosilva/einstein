<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Estilo fotográfico';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="estilo-fotografico">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Estilo fotográfico</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <article>
                        <p class="txt--padrao40">Fotografia que:</p>
                        <p class="txt--padrao20">Humaniza • Valoriza • Incentiva</p>

                        <div class="modulo-abas">
        
                                <div class="nav_tabs">
                                    <ul class="nav desktopitem">
                                        <li nav="0" class="active">Varejista</li>
                                        <li nav="1">Atendimento</li>
                                        <li nav="2">Facilidades</li>
                                        <div class="slider">
                                            <div class="slider-bar"></div>
                                        </div>
                                    </ul>
                                    
                                    <div class="content">

                                        <div class="tab active">
                                            <img class="mobileitem" src="<? echo $images ?>/estilo/mob/Grupo 5917_mobile.png" alt="">

                                            <p class="txt--padrao12 destaque">
                                                A alegria e disposição de quem acorda cedo pra abastecer as sacolas da comunidade.
                                            </p>
                                            <p class="txt--padrao12">
                                                O foco da foto é total no varejista e seu legado. Pode sim estar dentro do mercadinho,
                                                o começo de toda essa história, numa boa foto com iluminação natural.
                                                Para ajudar, o fundo pode ser desfocado para garantir total foco no primeiro plano.
                                                Mas quando o entorno tiver muito ruído, podemos usar o varejista isolado sobre
                                                um  fundo plano colorido também.
                                            </p>

                                            <img class="desktopitem" src="<? echo $images ?>/estilo/desk/Grupo 6118.png" alt="">
                                        </div>

                                        <div class="tab">
                                            <img class="mobileitem" src="<? echo $images ?>/estilo/mob/Grupo 5921_mobile.png" alt="">
                                        
                                            <p class="txt--padrao12 destaque">
                                                Sorriso no rosto e atendimento de chamar pelo nome.
                                            </p>
                                            <p class="txt--padrao12">
                                                Positivo e verdadeiro. Nesta diretriz trazemos tanto o varejista quanto funcionários do mercado
                                                mostrando o que têm de melhor: servir bem. Busque enquadrar o varejista e o shopper num 2º plano,
                                                para criar o contexto do atendimento, e as regras são bem parecidas com a diretriz anterior: ambiente
                                                com pouco ruído, iluminação natural e um fundo desfocado para ajudar no respiro visual.
                                            </p>

                                            <img class="desktopitem" src="<? echo $images ?>/estilo/desk/Grupo 6119.png" alt="">
                                        </div>

                                        <div class="tab">
                                            <img class="mobileitem" src="<? echo $images ?>/estilo/mob/Grupo 5920_mobile.png" alt="">
                                        
                                            <p class="txt--padrao12 destaque">
                                                Nossa caixa de ferramentas na prática.
                                            </p>
                                            <p class="txt--padrao12">
                                                Como incentivo para futuros clientes, esta diretriz busca mostrar toda nossa bagagem
                                                de tecnologia e como tornamos o dia a dia de nossos varejistas muito mais prático e simples.
                                                Seja maquininha, seja nos softwares, explore o varejista em seu local de trabalho e usando
                                                as ferramentas, sempre com uma expressão positiva.
                                            </p>

                                            <img class="desktopitem" src="<? echo $images ?>/estilo/desk/Grupo 6120.png" alt="">
                                        </div>
                                    </div>
                                </div>                                
                            </div> 
                    </article>
                </section>
                              

                <? include ('assets/download.php') ?>
                <? include ('assets/footer.php') ?>
            </main>

        </div>

    
        <script type="text/javascript">
            $('.link-abre').removeClass('active')
            $('.menu li').hide();
			$('.link-abre:eq(7)').addClass('active');
		</script>
    </body>
</html>