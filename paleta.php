<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Paleta';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="paleta">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Paleta cromática</h1>
                    </article>
                </header>

                <section id="sessao1" class="p70-65">
                <article>
                    <p class="txt--padrao40 txt--bold">Paleta institucional</p>                    

                    <div class="grid--2colunas">

                        <div class="esq">
                            <div class="txtbl txt-bloco-cima">
                                <p class="txt--padrao12">
                                    Marcamos nossa comunicação com muita proximidade e calor.<br><br>
        
                                    Vermelho é a principal cor de nossa bandeira, apoiado pela vibração do amarelo
                                    e a força do azul.
                                </p>
                            </div>
        
                            <div class="txtbl txt-bloco-baixo desktopitem">
                                <p class="txt--padrao12">                            
                                    PANTONE®: cores de referência e para impressão especial. Sempre que possível, priorize seu uso em impressões offset e serigrafia.<br><br>
        
                                    CMYK: cores para impressão. Use quando não for possível optar pelas cores Pantone®.<br><br>
        
                                    RGB: cores para tela. Uso em meios digitais, como site e apresentações.<br><br>
        
                                    HEXADECIMAL: também para uso em meios digitais – identifica a cor de modo mais simples que o RGB.
                                </p>   
                            </div>
                        </div>
    
                        <div class="dir">
                            <div class="accordeon">                        
                                <div class="wrapper-acc">
                                    <div class="box box1 ativo">
                                        <p class="nome">Vermelho</p>
                                        <p class="sub">Cor principal</p>
                                        <p class="desc">
                                            RGB - 219 0 71<br>
                                            CMYK - 0 100 60 0<br>
                                            HEX - #DB0047<br>
                                            Pantone® — 1925 C
                                        </p>
                                    </div>
        
                                    <div class="box box2 corPr">
                                        <p class="nome">Amarelo</p>
                                        <p class="sub">Cor secundária</p>
                                        <p class="desc">
                                            RGB - 255  247  87<br>
                                            CMYK - 0  0  80  0<br>
                                            HEX - #FFF757<br>
                                            Pantone® — 106 C
                                        </p>
                                    </div>
        
                                    <div class="box box3">
                                        <p class="nome">Azul</p>
                                        <p class="sub">Cor secundária</p>
                                        <p class="desc">
                                            RGB -  49  22  89<br>
                                            CMYK - 100  95   10  30<br>
                                            HEX - #311659<br>
                                            Pantone® — 2735 C
                                        </p>
                                    </div>
                                </div>
        
                                <p class="txt--padrao12 baixo-blocos desktopitem">
                                    Clique nas cores para visualizar suas informações.
                                </p>
                            </div>
                        </div>

                        <div class="txtbl txt-bloco-baixo mobileitem">
                            <p class="txt--padrao12">                            
                                PANTONE®: cores de referência e para impressão especial. Sempre que possível, priorize seu uso em impressões offset e serigrafia.<br><br>
    
                                CMYK: cores para impressão. Use quando não for possível optar pelas cores Pantone®.<br><br>
    
                                RGB: cores para tela. Uso em meios digitais, como site e apresentações.<br><br>
    
                                HEXADECIMAL: também para uso em meios digitais – identifica a cor de modo mais simples que o RGB.
                            </p>   
                        </div>

                    </div>
                </article>
            </section>

            <div class="ideia">
                <div class="destaque-ideia">
                    <p class="txt--padrao12">Dica: o azul tem menor uso como cor de fundo, tá?</p>
                </div>
            </div>

           <section id="sessao2">
                <article>
                    <p class="txt--padrao40 txt--bold">Subtons de apoio</p>                    

                    <div class="grid--2colunas-auto">

                        <div class="esq">
                            <div class="txtbl txt-bloco-cima">
                                <p class="txt--padrao12">
                                    Devem ser usados pontualmente na identidade.<br class="mobileitem"><br class="mobileitem">
                                    Veja abaixo onde usar:
                                </p>
                            </div>
        
                            <div class="txtbl txt-bloco-baixo">
                                <div class="grid--2linhas">
                                                                            
                                    <div class="grid--2colunas icones">
                                        <img src="<? echo $images ?>/paleta/desk/Subtom/Grupo 6109.png" alt="">
                                        <p class="txt--padrao12">
                                            Usado apenas como fundo para aplicação
                                            de iconografia em meios digitais ou grafismos.
                                        </p>
                                    </div>
                                                                        
                                    <div class="grid--2colunas icones">
                                        <img src="<? echo $images ?>/paleta/desk/Subtom/Grupo 6111.png" alt="">
                                        <p class="txt--padrao12">
                                            Usado pontualmente em grafismos.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
    
                        <div class="dir">
                            <div class="accordeon">
                                
                                <div class="wrapper-acc">
                                    <div class="box box1 ativo">
                                        <p class="nome">Subtom<br> vermelho</p>                                
        
                                        <p class="desc">
                                            RGB -  179  0  58<br>
                                            CMYK - 0   95   55   25<br>
                                            HEX - #B3003A<br>
                                            Pantone® — 7425 C
                                        </p>
                                    </div>
        
                                    <div class="box box2 corPr">
                                        <p class="nome">Subtom<br> amarelo</p>
                                        <p class="desc">
                                            RGB -  255  227  76<br>
                                            CMYK - 0   8   80  0<br>
                                            HEX - #FFE34C
                                        </p>
                                    </div>
                                </div>
        
                                <p class="txt--padrao12 baixo-blocos desktopitem">
                                    Clique nas cores para visualizar suas informações.
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao3" class="p80-130">
                <article>
                    <p class="txt--padrao40">Proporção de uso</p>
                    <p class="txt--padrao12 pos-titulo">
                        Vai acontecer de ter peças com diferentes
                        quantidades de textos, produtos e preços tudo junto.<br><br>

                        Use as combinações e proporções de cores abaixo
                        como suas aliadas para ajudar na leitura e organização
                        de informações.
                    </p>

                    <p class="txt--padrao20 volume">Por volume de informação</p>

                    <div class="grid--3colunas">
                        
                        <div class="modulo-imagens-com-texto com-divisor">
                            <div>
                                <p class="txt--padrao12 txt--bold">Baixo</p>
                                <img src="<? echo $images ?>/paleta/desk/Proporcao/Elipse 96.png" alt="">
                                <p class="txt--padrao12">1 cor</p>    
                                <span class="divisor"></span>

                                <div class="col-img mobileitem">
                                    <p class="txt--padrao12"><strong>Exemplo:</strong> Stories de Instagram</p>
                                    <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-1.png" alt="">
                                </div>
                            </div>    
                        </div>
                        
                        <div class="modulo-imagens-com-texto com-divisor">
                            <div>
                                <p class="txt--padrao12 txt--bold">Médio</p>
                                
                                <div class="central-com-texto">
                                    <img src="<? echo $images ?>/paleta/desk/Proporcao/Grupo 6093.png" alt="">
                                    <p class="txt--padrao12">ou</p>
                                    <img src="<? echo $images ?>/paleta/desk/Proporcao/Grupo 6094.png" alt="">
                                </div>
                                
                                <p class="txt--padrao12">Set 2 cores</p>
                                <span class="divisor"></span>

                                <div class="col-img mobileitem">
                                    <p class="txt--padrao12"><strong>Exemplo:</strong> Tela de aplicativo</p>
                                    <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="modulo-imagens-com-texto com-divisor">
                            <div>
                                <p class="txt--padrao12 txt--bold">Alto</p>
                                <img src="<? echo $images ?>/paleta/desk/Proporcao/Grupo 5175.png" alt="">                                
                                <p class="txt--padrao12">Set 3 cores</p>

                                <div class="col-img mobileitem">
                                    <p class="txt--padrao12"><strong>Exemplo:</strong> Folheto de promoções</p>
                                    <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-3.png" alt="">
                                </div>
                            </div>
                        </div>                        

                    </div>


                    <div class="grid--3colunas col-wrapper">
                        <div class="col-img">
                            <p class="txt--padrao12"><strong>Exemplo:</strong> Stories de Instagram</p>
                            <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-1.png" alt="">
                        </div>
    
                        <div class="col-img">
                            <p class="txt--padrao12"><strong>Exemplo:</strong> Tela de aplicativo</p>
                            <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-2.png" alt="">
                        </div>
    
                        <div class="col-img">
                            <p class="txt--padrao12"><strong>Exemplo:</strong> Folheto de promoções</p>
                            <img class="img-col" src="<? echo $images ?>/paleta/desk/Proporcao/proporcao-col-3.png" alt="">
                        </div>
                    </div>

                </article>
            </section>

            <section id="sessao4" class="p80-65">
                <article>
                    <p class="txt--padrao40">Cor + Texto</p>
                    
                    <div class="blocos grid--3colunas">
                        <div class="col">
                            <div class="bloco">Aa</div>
                            <div class="bloco">Aa</div>
                        </div>

                        <div class="col">
                            <div class="bloco">Aa</div>
                            <div class="bloco">Aa</div>
                        </div>

                        <div class="col">
                            <div class="bloco">Aa</div>
                            <div class="bloco">Aa</div>
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao5">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>/pranchas/CavaleteOferta.png" alt="">
                        <img src="<? echo $images ?>/pranchas/Bag.png" alt="">
                        <img src="<? echo $images ?>/pranchas/SetStories.png" alt="">
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
			$('.link-abre:eq(2)').addClass('active');
		</script>
    </body>
</html>