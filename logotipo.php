<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Logotipo';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="logotipo">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Logotipos & Símbolo</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <article class="grid--2colunas-centralizadas">
                        <p class="txt--padrao20 text--bold">
                            Um logo que reflete nosso jeito de ser e atender: prático e simpático.
                        </p>
                        <img src="<? echo $images ?>/logo/desk/logo-sessao1.png" alt="">
                    </article>
                </section>

                <section id="sessao2">
                    <article>
                        <p class="txt--padrao40">Versões de logotipo</p>
                        <div class="modulo-abas">     
                            <div class="nav_tabs">
                                <ul class="nav desktopitem">
                                    <li nav="0" class="active">Logotipo Preferencial</li>
                                    <li nav="1">Logotipo Horizontal</li>                                     
                                    <div class="slider">
                                        <div class="slider-bar"></div>
                                    </div>
                                </ul>                                
                                <p class="subtitulo mobileitem">Logotipo preferencial</p>
                                <div class="content">
                                    <div class="tab preferencial active">
                                        <div class="wrapper grid--2colunas">
                                            <div class="esq">
                                                <img class="desktopitem pref1" src="<? echo $images ?>/logo/desk/Versoes Logo/Pref/LogoPosi.png" alt="">
                                                <img class="mobileitem pref1" src="<? echo $images ?>/logo/mob/Versoes/Grupo 4334.png" alt="">
                                                <p class="txt--padrao12">Preferencial positivo</p>
                                            </div>
                                            
                                            <div class="dir grid--2linhas">
                                                <div class="cima">
                                                    <img class="desktopitem pref2" src="<? echo $images ?>/logo/desk/Versoes Logo/Pref/LogoNeg.png" alt="">
                                                    <img class="mobileitem pref2" src="<? echo $images ?>/logo/mob/Versoes/Grupo 5785.png" alt="">
                                                    <p class="txt--padrao12 negativo">Preferencial negativo</p>
                                                </div>

                                                <div class="baixo grid--2colunas-centralizadas">
                                                    <div>
                                                        <img class="desktopitem pref3" src="<? echo $images ?>/logo/desk/Versoes Logo/Pref/LogoPB.png" alt="">
                                                        <img class="mobileitem pref3" src="<? echo $images ?>/logo/mob/Versoes/Grupo 5786.png" alt="">
                                                        <p class="txt--padrao12">Monocromático preto</p>
                                                    </div>
                                                    <div>
                                                        <img class="desktopitem pref4" src="<? echo $images ?>/logo/desk/Versoes Logo/Pref/Logobranco.png" alt="">
                                                        <img class="mobileitem pref4" src="<? echo $images ?>/logo/mob/Versoes/Grupo 5787.png" alt="">
                                                        <p class="txt--padrao12 negativo">Monocromático negativo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="subtitulo mobileitem">Logotipo horizontal</p>
                                    <div class="tab horizontal">
                                        <div class="wrapper grid--2colunas">
                                            <div class="esq">
                                                <img class="desktopitem hor1" src="<? echo $images ?>/logo/desk/Versoes Logo/Horizontal/LogoPosi.png" alt="">
                                                <img class="mobileitem hor1" src="<? echo $images ?>/logo/mob/Versoes/Grupo 5302.png" alt="">
                                                <p class="txt--padrao12">Horizontal positivo</p>
                                            </div>                                            
                                            <div class="dir grid--3linhas">
                                                <div class="cima">
                                                    <img class="desktopitem hor2" src="<? echo $images ?>/logo/desk/Versoes Logo/Horizontal/LogoNeg.png" alt="">
                                                    <img class="mobileitem hor2" src="<? echo $images ?>/logo/mob/Versoes/Grupo 6100.png" alt="">
                                                    <p class="txt--padrao12 negativo">Horizontal negativo</p>
                                                </div>
                                                <div class="meio">
                                                    <img class="desktopitem hor3" src="<? echo $images ?>/logo/desk/Versoes Logo/Horizontal/PB.png" alt="">
                                                    <img class="mobileitem hor3" src="<? echo $images ?>/logo/mob/Versoes/Grupo 6101.png" alt="">
                                                    <p class="txt--padrao12">Monocromático preto</p>
                                                </div>
                                                <div class="baixo">
                                                    <img class="desktopitem hor4" src="<? echo $images ?>/logo/desk/Versoes Logo/Horizontal/Neg.png" alt="">
                                                    <img class="mobileitem hor4" src="<? echo $images ?>/logo/mob/Versoes/Grupo 6102.png" alt="">
                                                    <p class="txt--padrao12 negativo">Monocromático negativo</p>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>                                     
                                </div>
                            </div>                             
                         </div>
                    </article>                    
                </section>

                <div class="ideia">
                    <div class="destaque-ideia">
                        <p class="txt--padrao12">Dica: As versões monocromáticas são de uso restrito, ok? Use apenas quando houver restrição de cores, principalmente para impressos.</p>                        
                    </div>
                </div>

                <section id="sessao3" class="p65-80">
                    <article>
                        <p class="txt--padrao40 proximo">Redução máxima</p>
                        <p class="txt--padrao12 pos-titulo">
                            Esses são os menores tamanhos que o nosso
                            logotipo pode ter sem perder seus detalhes ou leitura,
                            tanto em aplicações digitais como em impressas.
                        </p>

                        <div class="grid--2colunas-centralizadas modulo-imagens-com-texto com-divisor">
                            <div class="esq">
                                <p class="txt--padrao12 txt--bold">Logotipo preferencial</p>
                                <img class="desktopitem red1" src="<? echo $images ?>/logo/desk/Reducao Max/Group 4898@2x.png" alt="">
                                <img class="mobileitem red1" src="<? echo $images ?>/logo/mob/Reducao Max/Grupo 5792.png" alt="">
                                <div class="textos-inline">
                                    <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                    <p class="txt--padrao12">Digital: H = 54 px</p>
                                </div>
                                <span class="divisor"></span>
                            </div>
                            <div class="dir">
                                <p class="txt--padrao12 txt--bold">Logotipo horizontal</p>
                                <img class="desktopitem red2" src="<? echo $images ?>/logo/desk/Reducao Max/Group 4899@2x.png" alt="">
                                <img class="mobileitem red2" src="<? echo $images ?>/logo/mob/Reducao Max/Grupo 6103.png" alt="">
                                <div class="textos-inline">
                                    <p class="txt--padrao12">Impresso: H = 4 mm</p>
                                    <p class="txt--padrao12">Digital: H = 35 px</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao4" class="p70-130">
                    <article>
                        <p class="txt--padrao40 proximo">Área de proteção</p>
                        <p class="txt--padrao12 pos-titulo">
                            Usa diferentes proporções a partir da altura do acento, para compensar os diferentes espaços do logotipo.
                        </p>
                        <p class="txt--padrao12 pos-titulo txt--bold">
                            Qualquer interferência deve vir depois do espaço delimitado.
                        </p>

                        <img class="central desktopitem" src="<? echo $images ?>/logo/desk/Area Prot/Grupo 4911.png" alt="">
                        <img class="central mobileitem" src="<? echo $images ?>/logo/mob/Area Prot/Grupo 6104.png" alt="">

                        <div class="grid--2colunas-centralizadas modulo-imagens-com-texto">
                            <div class="esq">
                                <p class="txt--padrao12 txt--bold">Logotipo preferencial</p>

                                <div class="image-slider">    
                                    <div id="beer-slider" class="beer-slider areaprot-pref" data-beer-label="before">                                        
                                        <img src="<? echo $images ?>/logo/desk/Area Prot/LogoPref_Estado01.png" alt="">
                                        <div class="beer-reveal" data-beer-label="after">                                            
                                            <img src="<? echo $images ?>/logo/desk/Area Prot/LogoPref_Estado02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dir">
                                <p class="txt--padrao12 txt--bold">Logotipo horizontal</p>

                                <div class="image-slider">    
                                    <div id="beer-slider" class="beer-slider areaprot-hor" data-beer-label="before">
                                        <img src="<? echo $images ?>/logo/desk/Area Prot/LogoHor_Estado01.png" alt="">
                                        <div class="beer-reveal" data-beer-label="after">                                
                                            <img src="<? echo $images ?>/logo/desk/Area Prot/LogoHor_Estado02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao5">
                    <article>
                        <p class="txt--padrao40">Usos incorretos</p>

                        <div class="grid--4colunas">
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6110@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6105.png" alt="">
                                <p class="txt--padrao12">
                                    Não distorça as proporções.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6111@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6106.png" alt="">
                                <p class="txt--padrao12">
                                    Não altere as cores originais.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6112@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6107.png" alt="">
                                <p class="txt--padrao12">
                                    Não use em outline.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6113@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6108.png" alt="">
                                <p class="txt--padrao12">
                                    Não rotacione.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6114@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6109.png" alt="">
                                <p class="txt--padrao12">
                                    Não use transparência.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6115@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6110.png" alt="">
                                <p class="txt--padrao12">
                                    Não customize.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6116@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6111.png" alt="">
                                <p class="txt--padrao12">
                                    Não use o logo em baixa resolução.
                                </p>
                            </div>
                            <div>
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Donts/Group 6117@2x.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Dont/Grupo 6112.png" alt="">
                                <p class="txt--padrao12">
                                    Não use efeitos.
                                </p>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao6">
                    <article>
                        <p class="txt--padrao40 proximo">Customização</p>
                        <p class="txt--padrao12 pos-titulo">
                            Para customizar o logotipo usando o nome
                            do nosso parceiro varejista, use os arquivos 
                            disponíveis no botão de download abaixo.<br><br>

                            Lembre sempre de fazer as duas versões, centralizado e à esquerda, e alterar apenas o campo do nome, ok?
                        </p>

                        <div class="legenda mobileitem">
                            <p class="txt--bold">Legenda</p>

                            <div class="col1">
                                <span></span>
                                <p>Área fixa</p>
                            </div>
                            <div class="col2">
                                <span class="segundo"></span>
                                <p>Área customizável</p>
                            </div>
                        </div>

                        <div class="grid--2colunas-centralizadas modulo-imagens-com-texto com-divisor">
                            <div>
                                <p class="txt--padrao12 txt--bold">Aplicação de nome centralizado</p>
                                <img class="centralizado1 desktopitem" src="<? echo $images ?>/logo/desk/Customizacao/Grupo 6103.png" alt="">
                                <img class="centralizado1 mobileitem" src="<? echo $images ?>/logo/mob/Customizacao/Grupo 5796.png" alt="">
                                <span class="divisor"></span>
                            </div>
                            <div>
                                <p class="txt--padrao12 txt--bold">Aplicação de nome centralizado</p>
                                <img class="centralizado2 desktopitem" src="<? echo $images ?>/logo/desk/Customizacao/Grupo 6102.png" alt="">
                                <img class="centralizado2 mobileitem" src="<? echo $images ?>/logo/mob/Customizacao/Grupo 5799.png" alt="">
                            </div>
                        </div>
                    </article>
                </section>

                
                <div class="ideia">
                    <div class="destaque-ideia">
                        <p class="txt--padrao12">Dica: Após customizar nome, sempre transforme o texto em curvas.</p>                        
                    </div>
                </div>


                <section id="sessao7">
                    <div class="box-principal">
                        <article>
                            <p class="txt--padrao40">Ícone</p>
                            <p class="txt--padrao12 pos-titulo">
                                De uso no ambiente digital ou impresso, nosso 
                                ícone possui duas versões principais: a positiva
                                e a negativa, para garantir legibilidade de acordo 
                                com a cor usada no fundo.<br><br>

                                Quando houver uma limitação de cores, como
                                na impressão de uma camiseta, pode usar a 
                                versão monocromática.
                            </p>

                        </article>    
                        <div class="icone-com-texto">
                            <img class="desktopitem" src="<? echo $images ?>/logo/desk/Icone/Grupo 5012.png" alt="">
                            <img class="mobileitem" src="<? echo $images ?>/logo/mob/Icone/Grupo 5349.png" alt="">
                            <p class="txt--padrao12">Preferencial positivo</p>
                        </div>
                    </div>

                    <div class="grid--2colunas-centralizadas">
                        <div>
                            <div class="icone-com-texto">
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Icone/Grupo 5012.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Icone/Grupo 5349.png" alt="">
                                <p class="txt--padrao12">Preferencial sobre fundo azul</p>
                            </div>
                        </div>
                        <div>
                            <div class="icone-com-texto">
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Icone/Grupo 5012.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Icone/Grupo 5349.png" alt="">
                                <p class="txt--padrao12">Preferencial sobre fundo branco</p>
                            </div>
                        </div>
                        <div>
                            <div class="icone-com-texto">
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Icone/Grupo 5015.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Icone/Grupo -1.png" alt="">
                                <p class="txt--padrao12">Versão negativa</p>
                            </div>
                        </div>
                        <div>
                            <div class="icone-com-texto">
                                <img class="desktopitem" src="<? echo $images ?>/logo/desk/Icone/Grupo 5016.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/logo/mob/Icone/Grupo 5354.png" alt="">
                                <p class="txt--padrao12">Versão monocromática</p>
                            </div>
                        </div>
                    </div>                    
                </section>

                <section id="sessao8">
                    <div class="baixo modulo-imagens-com-texto">
                        <div>
                            <p class="txt--padrao20">Redução máxima</p>
                            <img src="<? echo $images ?>/logo/desk/Icone/Grupo 6102.png" alt="">    
                            
                            <div class="textos-inline">
                                <p class="txt--padrao12">Impresso: H = 6 mm</p>
                                <p class="txt--padrao12">Digital: H = 64 px</p>
                            </div>
                        </div>                    
                    </div>
                </section>

                <section id="sessao9">
                    <article>
                        <p class="txt--padrao40">Para se inspirar</p>

                        <div class="wrapper slick">
                            <img src="<? echo $images ?>/pranchas/Enrolado.png" alt="">
                            <img src="<? echo $images ?>/pranchas/PranchaJoca.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Van.png" alt="">
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
			$('.link-abre:eq(1)').addClass('active');
		</script>

    </body>
</html>