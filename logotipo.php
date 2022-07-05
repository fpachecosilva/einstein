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

                <section id="sessao1" class="p100-100">
                    <article class="grid--2colunas-auto">
                        <p class="txt--padrao20 text--bold">
                            Um logotipo que evoca 
                            qualidade, tradição 
                            e inovação:  
                        </p>
                        <img src="<? echo $images ?>logotipo/1-Versoes de marca/Grupo 7139-1@2x.png" alt="" class="redux">
                    </article>
                </section>

                <section id="sessao2">
                    <article>
                        <p class="txt--padrao40">Versões de marca</p>                        
                        <div class="wrapper">
                            <div class="principal">
                                <p class="desc txt--padrao12 com-bold">VERSÃO PRINCIPAL</p>
                                <img src="<? echo $images ?>logotipo/1-Versoes de marca/Grupo 7139-1@2x.png" alt="" class="redux">
                            </div>
                            <div class="sub">
                                <div class="secundaria">
                                    <p class="desc txt--padrao12 com-bold">VERSÃO SECUNDÁRIA</p>
                                    <img src="<? echo $images ?>logotipo/1-Versoes de marca/Grupo 7142@2x.png" alt="" class="redux">
                                </div>
                                <div class="simbolo">
                                    <p class="desc txt--padrao12 com-bold">SÍMBOLO</p>
                                    <img src="<? echo $images ?>logotipo/1-Versoes de marca/Grupo 7143@2x.png" alt="" class="redux">
                                </div>
                            </div>
                        </div>                         
                    </article>                    
                </section>

                <div class="ideia">
                    <div class="destaque-ideia">
                        <p class="txt--padrao12">Priorize o uso da versão principal.</p>
                    </div>
                </div>

                <section id="sessao3">
                    <article>
                        <p class="txt--padrao40 sem-bold">Versões do logo</p>
                        <div class="modulo-abas">     
                            <div class="nav_tabs">
                                <ul class="nav desktopitem">
                                    <li nav="0" class="active">Versão principal</li>
                                    <li nav="1">Versão secundária</li>
                                    <li nav="2">Símbolo</li>
                                    <div class="slider">
                                        <div class="slider-bar"></div>
                                    </div>
                                </ul>                                
                                <p class="subtitulo mobileitem">Versão principal</p>
                                <div class="content">
                                    <div class="tab principal active">
                                        <div class="wrapper grid--2colunas">
                                            <div class="esq cinza">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Principal/Grupo 7219@2x.png" alt="">
                                                <p class="txt--padrao12">Monocromático positivo</p>
                                            </div>
                                            
                                            <div class="dir grid--2linhas">
                                                <div class="cima negativo">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Principal/Grupo 7217@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão negativa</p>
                                                </div>

                                                <div class="baixo pb">
                                                    <div>
                                                    <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Principal/Grupo 7218@2x.png" alt="">
                                                        <p class="txt--padrao12">P&B</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <p class="subtitulo mobileitem">Versão secundária</p>
                                    <div class="tab secundaria">
                                        <div class="wrapper grid--2colunas">
                                            <div class="esq cinza">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Secundaria/Grupo 7652@2x.png" alt="">
                                                <p class="txt--padrao12">Monocromático positivo</p>
                                            </div>
                                            
                                            <div class="dir grid--2linhas">
                                                <div class="cima negativo">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Secundaria/Grupo 7653@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão negativa</p>
                                                </div>

                                                <div class="baixo pb">
                                                    <div>
                                                    <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Secundaria/Grupo 7656@2x.png" alt="">
                                                        <p class="txt--padrao12">P&B</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="subtitulo mobileitem">Símbolo</p>
                                    <div class="tab simbolo">
                                        <div class="wrapper grid--2colunas">
                                            <div class="esq cinza">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Simbolo/Grupo 7651@2x.png" alt="">
                                                <p class="txt--padrao12">Monocromático positivo</p>
                                            </div>
                                            
                                            <div class="dir grid--2linhas">
                                                <div class="cima negativo">
                                                <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Simbolo/Grupo 7654@2x.png" alt="">
                                                    <p class="txt--padrao12 negativo">Versão negativa</p>
                                                </div>

                                                <div class="baixo pb">
                                                    <div>
                                                    <img class="redux" src="<? echo $images ?>logotipo/2-Versoes do logo/Simbolo/Grupo 7655@2x.png" alt="">
                                                        <p class="txt--padrao12">P&B</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                         </div>
                    </article>                    
                </section>

                <section id="sessao4" class="p65-175">
                    <article>
                        <p class="txt--padrao40 proximo">Redução máxima</p>
                        <p class="txt--padrao12 pos-titulo">
                            Esses são os menores tamanhos em que o nosso logo e símbolo podem ser aplicados sem comprometer seus detalhes ou leitura, tanto em aplicações digitais como impressas.
                        </p>
                        <div class="wrapper">
                            <div class="principal">
                                <p class="desc txt--padrao12 com-bold">VERSÃO PRINCIPAL</p>
                                <img src="<? echo $images ?>logotipo/3-Reducao Maxima/Grupo 7962@2x.png" alt="" class="redux">
                                <div class="textos-inline">
                                    <p class="txt--padrao12">Impresso: L = 35 mm</p>
                                    <p class="txt--padrao12">Digital: L = 132 px</p>
                                </div>
                            </div>
                            <div class="sub">
                                <div class="secundaria">
                                    <p class="desc txt--padrao12 com-bold">VERSÃO SECUNDÁRIA</p>
                                    <img src="<? echo $images ?>logotipo/3-Reducao Maxima/Grupo 7960@2x.png" alt="" class="redux">
                                    <div class="textos-inline">
                                    <p class="txt--padrao12">Impresso: L = 41 mm</p>
                                    <p class="txt--padrao12">Digital: L = 155 px</p>
                                </div>
                                </div>
                                <div class="simbolo">
                                    <p class="desc txt--padrao12 com-bold">SÍMBOLO</p>
                                    <img src="<? echo $images ?>logotipo/3-Reducao Maxima/Grupo 7961@2x.png" alt="" class="redux">
                                    <div class="textos-inline">
                                    <p class="txt--padrao12">Impresso: L = 6 mm</p>
                                    <p class="txt--padrao12">Digital: L = 25 px</p>
                                </div>
                                </div>
                            </div>
                        </div>                         
                    </article>                    
                </section>

                <section id="sessao5">
                    <article>
                        <p class="txt--padrao40 proximo">Área de proteção</p>
                        <p class="txt--padrao12 pos-titulo">
                            Garante que as marcas tenham um espaço seguro em ambientes
                            com interferências visuais, como imagens ou massas de texto. 
                            <br><br>
                            <strong>Qualquer objeto deve vir depois da área demarcada, ok?</strong>
                        </p>
                        <div class="modulo-abas">     
                            <div class="nav_tabs">
                                <ul class="nav desktopitem">
                                    <li nav="0" class="active">Versão principal</li>
                                    <li nav="1">Versão secundária</li>
                                    <li nav="2">Símbolo</li>
                                    <div class="slider">
                                        <div class="slider-bar"></div>
                                    </div>
                                </ul>                                
                                <p class="subtitulo mobileitem">Versão principal</p>
                                <div class="content">
                                    <div class="tab principal active">
                                        <div class="wrapper grid--2linhas">
                                            <div class="cima">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">
                                                            Medida para determinar
                                                            a área de segurança =
                                                            largura e altura de “A”
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7958@2x.png" alt="">
                                                </div>
                                            </div>
                                            <div class="baixo">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <div class="txtimg">
                                                        <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7956@2x.png" alt="">                                                    
                                                        <div class="txtunder">
                                                            <p class="txt--padrao12">2x largura de A</p>
                                                            <p class="txt--padrao12">2x largura de A</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <p class="subtitulo mobileitem">Versão secundária</p>
                                    <div class="tab secundaria">
                                        <div class="wrapper grid--2linhas">
                                            <div class="cima">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">
                                                            Medida para determinar
                                                            a área de segurança =
                                                            largura e altura de “A”
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7958@2x.png" alt="">
                                                </div>
                                            </div>
                                            <div class="baixo">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <div class="txtimg">
                                                        <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7957@2x.png" alt="">                                                    
                                                        <div class="txtunder">
                                                            <p class="txt--padrao12">2x largura de A</p>
                                                            <p class="txt--padrao12">2x largura de A</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="subtitulo mobileitem">Símbolo</p>
                                    <div class="tab simbolo">
                                        <div class="wrapper grid--2linhas">
                                            <div class="cima">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">
                                                            Medida para determinar
                                                            a área de segurança =
                                                            largura e altura de “A”
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7958@2x.png" alt="">
                                                </div>
                                            </div>
                                            <div class="baixo">
                                                <div class="esq">
                                                    <div class="txt">
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                        <p class="txt--padrao12">2x altura de A</p>
                                                    </div>
                                                </div>
                                                <div class="dir">
                                                    <div class="txtimg">
                                                        <img class="redux" src="<? echo $images ?>logotipo/4-Area de protecao/Grupo 7959@2x.png" alt="">
                                                        <div class="txtunder">
                                                            <p class="txt--padrao12">2x largura de A</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>                             
                         </div>
                    </article> 
                </section>
                
                <section id="sessao6" class="p65-175">
                    <article>
                        <p class="txt--padrao40">Aplicação sobre fundos</p>
                        <div class="grid--3linhas">
                            <div class="fundos">
                                <div class="esq">
                                    <p class="txt--padrao12">
                                        A prioridade é que o logotipo seja 
                                        aplicado sobre as cores de sua paleta, 
                                        usando a versão positiva ou a negativa
                                        de acordo com o contraste com o fundo.
                                    </p>
                                </div>
                                <div class="meio">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7953@2x.png" alt="">
                                </div>
                                <div class="dir">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7954@2x.png" alt="">
                                </div>
                            </div>
                            <div class="fundos">
                                <div class="esq">
                                    <p class="txt--padrao12">
                                        Para melhor legibilidade sobre fundos 
                                        fotográficos, busque áreas com baixa
                                        interferência visual, texturas ou ruídos. 
                                        Use a versão positiva ou a negativa
                                        de acordo com o contraste com o fundo.
                                    </p>
                                </div>
                                <div class="meio">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7955@2x.png" alt="">
                                </div>
                                <div class="dir">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7956@2x.png" alt="">
                                </div>
                            </div>
                            <div class="fundos">
                                <div class="esq">
                                    <p class="txt--padrao12">
                                        Não aplique o logotipo onde houver 
                                        interferência visual que reduza a 
                                        sua legibilidade.
                                    </p>
                                </div>
                                <div class="meio">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7957@2x.png" alt="">
                                </div>
                                <div class="dir">
                                    <img class="redux" src="<? echo $images ?>logotipo/5-Aplicacao fundos/Grupo 7958@2x.png" alt="">
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao7" class="p65-175">
                    <article>
                        <p class="txt--padrao40">Usos incorretos</p>
                        <div class="usos grid--3colunas">
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7959@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não distorça as proporções.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7960@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não altere as cores originais.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7961@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não aplique efeitos.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7962@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não rotacione.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7963@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não altere a tipografia.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7964@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não aplique em outline.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7967@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não use transparência.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7966@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não customize com elementos.
                                </p>
                            </div>
                            <div>
                                <img class="redux" src="<? echo $images ?>logotipo/6-Usos incorretos/Grupo 7965@2x.png" alt="">
                                <p class="txt--padrao12">
                                    Não aplique em baixa resolução.
                                </p>
                            </div>
                            
                        </div>
                    </article>                   
                </section>

                <section id="sessao8">
                    <article>
                        <p class="txt--padrao40 proximo">Símbolo</p>
                        <p class="txt--padrao12 pos-titulo">
                            A estrela é um elemento que merece 
                            atenção especial, já que ajuda a caracterizar 
                            a comunicação do Einstein. 
                        </p>
                        <img class="redux simbolo" src="<? echo $images ?>logotipo/7-Simbolo/Grupo 7254.png" alt="">
                        <p class="txt--padrao20">Versões de cor</p>
                        <div class="wrapper-versoes">
                            <div class="esq">
                                <img class="redux simbolo" src="<? echo $images ?>logotipo/7-Simbolo/Grupo 7257@2x.png" alt="">
                                <p class="txt--padrao12">Versão positiva</p>
                            </div>
                            <div class="dir">
                                <img class="redux simbolo" src="<? echo $images ?>logotipo/7-Simbolo/Grupo 7256@2x.png" alt="">
                                <p class="txt--padrao12">Versão negativa</p>
                            </div>
                        </div>                        
                    </article>
                </section>

                <section id="sessao9" class="p25-45">
                    <article>
                        <div class="como-usar">
                            <p class="txt--padrao20">Como usar</p>
                            <img class="redux" src="<? echo $images ?>logotipo/7-Simbolo/Grupo de máscara 83@2x.png" alt="">
                            <p class="txt--padrao12">
                                <strong>Uso isolado</strong><br><br>
                                A estrela pode ser aplicada sozinha desde que, em algum lugar da peça,
                                o Einstein seja mencionado de alguma forma como texto.
                            </p>
                        </div>
                    </article>
                </section>

                <section id="sessao10">
                    <article>
                        <p class="txt--padrao40">Para se inspirar</p>

                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/sempreafrente.png" alt="">
                            <img src="<? echo $images ?>pranchas/ultrassonografia.png" alt="">
                            <img src="<? echo $images ?>pranchas/conectamosvoce.png" alt="">
                            <img src="<? echo $images ?>pranchas/novidadesnoeinsteingoiania.png" alt="">
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