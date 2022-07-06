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

                <section id="sessao1" class="p65-100">
                <article>
                    <p class="txt--padrao40 txt--bold">Paleta institucional</p>                    

                    <div class="grid--2colunas">
                        <div class="esq">
                            <div class="txtbl txt-bloco-cima">
                                <p class="txt--padrao12">
                                    Azul é a principal cor da nossa identidade, apoiado pelo frescor do turquesa. O branco aparece como uma cor neutra, para tornar os layouts mais sóbrios.
                                    <br><br>
                                    PANTONE®: cores de referência e para impressão especial. Sempre que possível, priorize seu uso em impressões offset e serigrafia.
                                    <br><br>
                                    CMYK: cores para impressão. Use quando 
                                    não for possível optar pelas cores Pantone®.
                                    <br><br>
                                    RGB: cores para tela. Uso em meios digitais, 
                                    como site e apresentações.
                                    <br><br>
                                    HEXADECIMAL: também para uso em meios digitais – identifica a cor de modo mais 
                                    simples que o RGB.
                                </p>
                            </div>
                        </div>    
                        <div class="dir">
                            <div class="boxes">
                                <div class="box">
                                    <p class="title">Azul</p>
                                    <p class="corestxt">
                                        Pantone® — 294C<br>
                                        CMYK — 100 65 0 20<br>
                                        RGB — 0 79 146<br>
                                        HEX — #004F92
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="title">Turquesa</p>
                                    <p class="corestxt">
                                        Pantone® — 3255C<br>
                                        CMYK — 60 0 30 0<br>
                                        RGB — 58 214 202<br>
                                        HEX — #3AD6CA
                                    </p>
                                </div>
                                <div class="box">
                                    <p class="title">Branco</p>
                                    <p class="corestxt">
                                        Pantone® — 0000C<br>
                                        CMYK — 0 0 0 0<br>
                                        RGB — 255 255 255<br>
                                        HEX — #FFFFFF
                                    </p>
                                </div>
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

            <section id="sessao2">
                <article>
                    <p class="txt--padrao40">Paleta secundária por público</p>
                    <p class="txt--padrao12 pos-titulo">
                        São as cores complementares da comunicação, usadas para diferenciar 
                        os públicos. Seu uso é sempre pontual e em menor proporção que as cores institucionais, como é sugerido abaixo:
                    </p>
                    
                    <div class="modulo-abas">     
                        <div class="nav_tabs">
                            <ul class="nav desktopitem">
                                <li nav="0" class="active">Pacientes</li>
                                <li nav="1">Médicos</li>
                                <li nav="2">Soluções corporativas</li>
                                <div class="slider">
                                    <div class="slider-bar"></div>
                                </div>
                            </ul>
                            <p class="subtitulo mobileitem">Pacientes</p>
                            <div class="content">
                                <div class="tab pacientes active">
                                    <div class="wrapper grid--3linhas">
                                        <div class="cima boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Rosa-paciente</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo branco.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>Pantone – 1777C</p>
                                                <P>CMYK – 0 75 35 0</p>
                                                <p>RGB – 238 90 123</p>
                                                <P>HEX – #ee5a7b</p>
                                            </div>
                                        </div>
                                        <div class="meio boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Rosa-médio</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo Azul-Einstein.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>RGB – 255 166 186</p>
                                                <p>HEX – #ffa6ba</p>
                                            </div>
                                        </div>
                                        <div class="baixo boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Rosa-claro</p>
                                                <p class="txt--padrao12">Sobre tom para fundos.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>RGB – 255 201 213</p>
                                                <p>HEX – #ffc9d5</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="subtitulo mobileitem">Médicos</p>
                                <div class="tab medicos">
                                    <div class="wrapper grid--3linhas">
                                        <div class="cima boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Laranja-médico</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo branco.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>Pantone – 716C</p>
                                                <p>CMYK – 0 65 100 0</p>
                                                <p>RGB – 227 116 12</p>
                                                <p>HEX – #e3740c</p>
                                            </div>
                                        </div>
                                        <div class="meio boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Laranja-médio</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo Azul-Einstein.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>RGB – 255 177 87</p>
                                                <p>HEX – #ffb157</p>
                                            </div>
                                        </div>
                                        <div class="baixo boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Laranja-claro</p>
                                                <p class="txt--padrao12">Sobre tom para fundos.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>RGB – 255 228 199</p>
                                                <p>HEX – #ffe4c7</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="subtitulo mobileitem">Soluções corporativas</p>
                                <div class="tab solucoes">
                                    <div class="wrapper grid--3linhas">
                                        <div class="cima boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Roxo-paciente</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo branco.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>Pantone – 266C</p>
                                                <p>CMYK – 75 85 0 0</p>
                                                <p>RGB – 120 70 212</p>
                                                <p>HEX – #7846d4</p>
                                            </div>
                                        </div>
                                        <div class="meio boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Roxo-médio</p>
                                                <p class="txt--padrao12">Para textos e ícones sobre fundo Azul-Einstein.</p>
                                            </div>
                                            <div class="dir box">
                                                <div class="wrapper-cores-2linhas">
                                                    <div>
                                                        <p>Pantone – 529C</p>
                                                        <p>CMYK – 15 40 0 0</p>
                                                    </div>
                                                    <div>
                                                        <p>RGB – 211 186 255</p>
                                                        <p>HEX – #d3baff</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="baixo boxes">
                                            <div class="esq">
                                                <p class="txt--padrao12 com-bold">Roxo-claro</p>
                                                <p class="txt--padrao12">Sobre tom para fundos.</p>
                                            </div>
                                            <div class="dir box">
                                                <p>RGB – 232 221 255</p>
                                                <p>HEX – #e8ddff</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                             
                        </div>
                </article>
            </section>

            <section id="sessao3" class="">
                <article>
                    <p class="txt--padrao40">Proporções de uso</p>
                    <p class="txt--padrao12 pos-titulo">
                        Utilize a proporção de cores abaixo em todos os
                        layouts e aplicações, buscando manter a consistência 
                        e fortalecendo o reconhecimento de cada público.
                    </p>

                    <div class="wrapper-proporcoes">
                        <div class="grid--2linhas">
                            <div class="cima">
                                <div class="esq">
                                    <p class="txt--padrao12 com-bold">PRINCIPAIS</p>
                                    <p class="txt--padrao12">
                                        São as cores proprietárias da marca
                                        e têm maior presença de uso:
                                        de massa de cor a textos e grafismos.
                                    </p>
                                </div>
                                <div class="dir">
                                    <span></span>
                                    <div class="linha linha1"><span></span><span></span><span></span></div>
                                    <div class="linha linha2"><span></span><span></span><span></span></div>
                                    <div class="linha linha3"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                            <div class="baixo">
                                <div class="esq">
                                    <p class="txt--padrao12 com-bold">SECUNDÁRIAS POR PÚBLICO</p>
                                    <p class="txt--padrao12">
                                        Tem uso pontual e com menor presença
                                        nas composições, com foco em textos
                                        de destaque ou ícones.
                                    </p>
                                </div>
                                <div class="dir">
                                    <span></span>
                                    <div class="linha linha1"><span></span><span></span><span></span></div>
                                    <div class="linha linha2"><span></span><span></span><span></span></div>
                                    <div class="linha linha3"><span></span><span></span><span></span></div>
                                    <div class="linha linha4">
                                        <p class="txt--padrao12">INSTITUCIONAL / PACIENTES</p>
                                        <p class="txt--padrao12">MÉDICOS</p>
                                        <p class="txt--padrao12">SOLUÇÕES CORPORATIVAS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
            </section>

            <section id="sessao4" class="">
                <article>
                    <p class="txt--padrao40 proximo">Lógica para campanhas</p>
                    <p class="txt--padrao12 pos-titulo">
                        Nossa comunicação ao longo do ano pode ter diferentes temas, sejam campanhas internas, sejam temas nacionais. Para manter nossa consistência, nossa identidade reage a possíveis cenários das seguintes formas:
                    </p>
                    <p class="txt--padrao20">Para campanhas ou datas com elementos e/ou cores próprias</p>
                    <p class="txt--padrao12">
                        <strong>Exemplos:</strong> Laço Campanha do Câncer, Cores dos meses<br><br>

                        <strong>Como a identidade responde:</strong><br>
                        • Reduzimos a presença de uma das cores da paleta<br>
                        • Absorvemos os códigos visuais da campanha (elemento gráfico ou cor)
                    </p>

                    <div class="antesedepois">
                        <div class="esq">
                            <p class="txt--padrao12 com-bold">ANTES</p>
                            <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7701@2x.jpg" alt="">
                        </div>
                        <div class="dir">
                            <p class="txt--padrao12 com-bold">DEPOIS</p>
                            <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7700@2x.jpg" alt="">
                        </div>
                    </div>

                    <div class="coresdomes">
                        <div class="esq">
                            <p class="txt--padrao12 com-bold">CORES EINSTEIN</p>
                            <div class="bolas">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="dir">
                            <p class="txt--padrao12 com-bold">+ CORES DO MÊS</p>
                            <p class="txt--padrao12 txtcores12">As duas cores de nossa paleta principal com melhor contraste devem permanecer. Veja os exemplos abaixo:</p>
                            <div class="linha linha1">
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7733-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <p>Junho laranja</p>
                            </div>
                            <div class="linha linha2">
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7733-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <p>Novembro azul</p>
                            </div>
                            <div class="linha linha3">
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7733-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <p>Setembro verde</p>
                            </div>
                            <div class="linha linha4">
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7733-1@2x.png" alt="">
                                </div>
                                <div>
                                    <span></span>
                                    <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7732-1@2x.png" alt="">
                                </div>
                                <p>Outubro Rosa</p>
                            </div>
                        </div>
                    </div>

                    <p class="txt--padrao20">Para campanhas coletivas de saúde ou conscientização já estabelecidas nacionalmente</p>
                    <p class="txt--padrao12">
                        <strong>Exemplos:</strong> Dia do coração, Campanha de doação de sangue, etc.
                        <br><br>
                        <strong>Como a identidade responde:</strong><br>
                        • Seguimos com a linguagem IDV Einstein
                    </p>

                    <div class="antesedepois">
                        <div class="esq">
                            <p class="txt--padrao12 com-bold">ANTES</p>
                            <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7952.png" alt="">
                        </div>
                        <div class="dir">
                            <p class="txt--padrao12 com-bold">DEPOIS</p>
                            <img class="redux" src="<? echo $images ?>paleta/4-Logica para campanhas/Grupo 7953.png" alt="">
                        </div>
                    </div>
                </article>
            </section>

            <section id="sessao5">
                <article>
                    <p class="txt--padrao40">Para se inspirar</p>

                    <div class="wrapper slick">
                        <img src="<? echo $images ?>pranchas/tomarvacina.png" alt="">
                        <img src="<? echo $images ?>pranchas/novidadesnoeinsteingoiania.png" alt="">
                        <img src="<? echo $images ?>pranchas/novovirus.png" alt="">
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