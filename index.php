<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Essencia';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="essencia">
        <div class="container">
            <?php include 'assets/menu.php'; ?>
            <main>                
                <header class="topobg">                    
                    <div class="pelicula"></div>
                </header>

                <section id="sessao1">
                    <article>
                        <p class="txt--padrao40 sem-bold">Essência Einstein</p>
                        <p>
                        A Sociedade Beneficente Israelita Brasileira Albert Einstein,
                        ou, de forma abreviada, o Einstein, é a marca referência na
                        área da saúde e de grande valor para a sociedade brasileira.
                        Fundada em 1955 por um grupo de idealistas da
                        comunidade judaica de São Paulo, a Sociedade Beneficente
                        Israelita Brasileira Albert Einstein estruturou-se sobre quatro
                        valores tradicionais do judaísmo, que hoje orientam e
                        inspiram as suas atividades.
                        </p>

                        <div class="modulo-home">
                            <div class="mini-titulo">
                                <img src="<? echo $images ?>essencia/desk/Grupo 5970.png" alt="">                                
                                <p class="txt--padrao20">Mitzvá</p>
                            </div>
                            <div class="content">
                                <p>
                                    Ao colocar a inteligência
                                    de varejo nas mãos das pessoas certas, 
                                    mudamos realidades, um bairro por vez.
                                </p>
                            </div>
                            <div class="mini-titulo">
                                <img src="<? echo $images ?>essencia/desk/Grupo 5970.png" alt="">                                
                                <p class="txt--padrao20">Refuá</p>
                            </div>
                            <div class="content">
                                <p>
                                    Saúde, cura.
                                </p>
                            </div>
                            <div class="mini-titulo">
                                <img src="<? echo $images ?>essencia/desk/Grupo 5970.png" alt="">                                
                                <p class="txt--padrao20">Chinuch</p>
                            </div>
                            <div class="content">
                                <p>
                                    Educação, a melhoria do ser humano
                                    por meio do conhecimento e do estudo.
                                </p>
                            </div>
                            <div class="mini-titulo">
                                <img src="<? echo $images ?>essencia/desk/Grupo 5970.png" alt="">                                
                                <p class="txt--padrao20">Tsedaká</p>
                            </div>
                            <div class="content">
                                <p>
                                    Solidariedade humana, filantropia, justiça social
                                </p>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao2" class="p45-100">
                    <article>
                        <p class="txt--padrao32 sem-bold topsession2">
                            Hoje, o Einstein é uma organização regida
                            pela busca constante pela excelência
                            e por estabelecer padrões de qualidade
                            e âmbito da saúde, afinada com o que há de 
                            mais avançado em seu campo de atuação.
                        </p>
                        <div class="modulo-abas">
                            <div class="nav_tabs">
                                <ul class="nav desktopitem">
                                    <li nav="0" class="active">Missão</li>
                                    <li nav="1">Visão</li>
                                    <li nav="2">Valores Organizacionais</li>
                                    <div class="slider">
                                        <div class="slider-bar"></div>
                                    </div>
                                </ul>
                                <div class="content">
                                    <div class="tab preferencial active">
                                        <div class="wrapper">
                                            <div class="esq">
                                                <p>Missão</p>
                                                <span></span>
                                            </div>                                 
                                            <div class="dir">
                                                Oferecer excelência de qualidade no âmbito da saúde, da geração do conhecimento e da responsabilidade social, como forma de evidenciar
                                                a contribuição da comunidade judaica à sociedade brasileira.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab preferencial">
                                        <div class="wrapper">
                                            <div class="esq">
                                                <p>Visão</p>
                                                <span></span>
                                            </div>                                 
                                            <div class="dir">
                                                Ser líder e inovadora na assistência médico-hospitalar, referência
                                                na gestão do conhecimento  e reconhecida pelo comprometimento
                                                com a responsabilidade social.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab preferencial">
                                        <div class="wrapper">
                                            <div class="esq">
                                                <p class="desktopitem">Valores Organiza-cionais</p>
                                                <p class="mobileitem">Valores Organizacionais</p>
                                                <span></span>
                                            </div>                                 
                                            <div class="dir">
                                                <ul>
                                                    <li>Diligência</li>
                                                    <li>Honestidade</li>
                                                    <li>Profissionalismo</li>
                                                    <li>Integridade</li>
                                                </ul>
                                                <ul>
                                                    <li>Verdade</li>
                                                    <li>Trabalho em equipe</li>
                                                    <li>Autonomia</li>
                                                </ul>
                                                <ul>
                                                    <li>Justiça</li>
                                                    <li>Altruísmo pelo comprometimento com a responsabilidade social</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </article>
                </section>

                <? include ('assets/footer.php') ?>
            </main>
        </div>
    
        <script type="text/javascript">
            $('.link-abre').removeClass('active')
            $('.menu li').hide();
			$('.link-abre:eq(0)').addClass('active');
		</script>

    </body>
</html>