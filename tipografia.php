<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Tipografia';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="tipografia">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Tipografia</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <article>
                        <p class="txt--padrao40">Nossas fontes</p>

                        <article>
                            <div class="modulo-abas">
        
                                <div class="nav_tabs">
                                    <ul class="nav desktopitem">
                                        <li nav="0" class="active">Fonte institucional</li>
                                        <li nav="1">Fonte de aplicativo</li>
                                        <li nav="2">Fonte de sistema</li>
                                        <div class="slider">
                                            <div class="slider-bar"></div>
                                        </div>
                                    </ul>
                                    
                                    <div class="content">

                                        <div class="tab active">
                                            <div class="grid--2colunas">
                                                <div class="esq">
                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20 subtitulo mobileitem">Fonte institucional</p>
                                                        <p class="txt--padrao20">Dona Alt Font</p>
                                                        <p class="txt--padrao12">
                                                            Simpática, brazuca e orgânica como nosso logo,
                                                            a Dona Font é nossa principal fonte de comunicação.
                                                        </p>
                                                    </div>

                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20">Uso</p>
                                                        <p class="txt--padrao12">
                                                            > Impressos e digitais<br>
                                                            > Sinalização de loja e VM<br>
                                                            > Comunicação de produtos e ofertas
                                                        </p>
                                                    </div>

                                                    <div class="onde-usar">
                                                        <p class="txt--padrao12 txt--bold">Onde usar?</p>
                                                        
                                                        <div class="icones">
                                                            <img src="<? echo $images ?>onde-usar-pc.svg" alt="">
                                                            <img src="<? echo $images ?>onde-usar-printer.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="dir">
                                                    <div class="cima">
                                                        <div class="grid--3linhas">
                                                            <div class="grid--2colunas-auto">
                                                                <div>Normal</div>
                                                                <div class="fonte-exemplo">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                </div>
                                                            </div>
                                                            <div class="grid--2colunas">
                                                                <span class="separador-fontes"></span>
                                                            </div>
                                                            <div class="grid--2colunas-auto">
                                                                <div>Itálicos</div>
                                                                <div class="fonte-exemplo italico">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="baixo">
                                                        <div class="alfabeto desktopitem">
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="alfabeto mobileitem dona">
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>

                                            <div class="ideia">
                                                <div class="destaque-ideia">
                                                    <p class="txt--padrao12">Dica: Para aquisição de uso acesse: harbortype.com/fonts<br class="mobileitem">/dona</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab">
                                            <div class="grid--2colunas">
                                                <div class="esq">
                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20 subtitulo mobileitem">Fonte de aplicativo</p>
                                                        <p class="txt--padrao20">Open Sans</p>
                                                        <p class="txt--padrao12">
                                                            Pra melhor leitura na telinha, usamos
                                                            a Open Sans como tipografia do nosso app,
                                                            garantindo leitura até nos menores textos.
                                                        </p>
                                                    </div>

                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20">Uso</p>
                                                        <p class="txt--padrao12">
                                                            > Aplicativo<br>
                                                            > Softwares
                                                        </p>
                                                    </div>

                                                    <div class="onde-usar">
                                                        <p class="txt--padrao12 txt--bold">Onde usar?</p>
                                                        
                                                        <div class="icones">
                                                            <img src="<? echo $images ?>onde-usar-mobile.svg" alt="">                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="dir">
                                                    <div class="cima">
                                                        <div class="grid--3linhas">
                                                            <div class="grid--2colunas-auto">
                                                                <div>Normal</div>
                                                                <div class="fonte-exemplo">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                </div>
                                                            </div>
                                                            <div class="grid--2colunas">
                                                                <span class="separador-fontes"></span>
                                                            </div>
                                                            <div class="grid--2colunas-auto">
                                                                <div>Itálicos</div>
                                                                <div class="fonte-exemplo italico">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="baixo">
                                                        <div class="alfabeto desktopitem">
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="alfabeto mobileitem open">
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <div class="grid--2colunas">
                                                <div class="esq">
                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20 subtitulo mobileitem">Fonte de sistema</p>
                                                        <p class="txt--padrao20">Arial</p>
                                                        <p class="txt--padrao12">
                                                            Nativa de diversos sistemas operacionais, seu uso é mais comum em materiais programados em HTML, como assinaturas de e-mail, ou documentos que serão abertos por terceiros, como apresentações.
                                                        </p>
                                                    </div>

                                                    <div class="bloco-texto">
                                                        <p class="txt--padrao20">Uso</p>
                                                        <p class="txt--padrao12">
                                                            > Apenas para documentos abertos 
                                                            por terceiros, como apresentações 
                                                            e newsletters em html
                                                        </p>
                                                    </div>

                                                    <div class="onde-usar">
                                                        <p class="txt--padrao12 txt--bold">Onde usar?</p>
                                                        
                                                        <div class="icones">
                                                            <img src="<? echo $images ?>onde-usar-pc.svg" alt="">                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="dir">
                                                    <div class="cima">
                                                        <div class="grid--3linhas">
                                                            <div class="grid--2colunas-auto">
                                                                <div>Normal</div>
                                                                <div class="fonte-exemplo">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="grid--2colunas">
                                                                <span class="separador-fontes"></span>
                                                            </div>
                                                            <div class="grid--2colunas-auto">
                                                                <div>Itálicos</div>
                                                                <div class="fonte-exemplo italico">
                                                                    <div>Aa</div>
                                                                    <div>Aa</div>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="baixo">
                                                        <div class="alfabeto desktopitem">
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghijklmn
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    opqrstuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="alfabeto mobileitem arial">
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    abcdefghi
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    jklmnopqr
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    stuvwxyz
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p>
                                                                    1234567890&%@#
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>                                               
                                            </div>

                                            <div class="ideia">
                                                <div class="destaque-ideia">
                                                    <p class="txt--padrao12">Dica: Quando houver um espaço para banner com imagem, pode usar a Dona Font novamente ;)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>                            
                        </article>
                   </article>
               </section>

               <section id="sessao2">
                    <article>
                        <p class="txt--padrao40 proximo">Hierarquia</p>
                        <p class="txt--padrao12 pos-titulo">
                                Para organizar a informação de um jeito claro sem perder o charme e a simpatia, explore textos em caixa-alta e baixa com os diferentes pesos de fonte.
                        </p>

                        <p class="txt--padrao20 destaque">Exemplo de composição</p>

                        <div class="composicao-wrapper grid--4linhas-auto">
                            
                            <div class="wrapper-box grid--2colunas">
                                <div class="esq">                                   
                                    <p>Título</p>
                                    <p>Bold</p>                                    
                                </div>
                                <div class="dir">                                   
                                    <p>O mercado do Seu Joca vai pra frente.</p>                                    
                                </div>
                            </div>

                            <div class="wrapper-box grid--2colunas">
                                <div class="esq">                                   
                                    <p>Subtítulo</p>
                                    <p>Medium</p>
                                </div>
                                <div class="dir">
                                    <p class="destaque medium">E o Bom Retiro também!</p>
                                </div>
                            </div>

                            <div class="wrapper-box grid--2colunas">
                                <div class="esq">
                                    <p>Texto corrido e destaque</p>
                                    <p>Medium+Bold</p>
                                </div>
                                <div class="dir">                                   
                                    <p>
                                        É de bairro em bairro, com preço
                                        bom e estando lado a lado que
                                        a gente faz a diferença.
    
                                    </p>
                                    <p class="destaque">
                                        Quer ir pra frente também?
                                    </p>
                                    <p>
                                        Saiba mais em: suamerce.com.br
                                    </p>                                    
                                </div>                            
                            </div>

                            <div class="wrapper-box grid--2colunas">
                                <div class="esq">                                   
                                    <p>Legendas</p>
                                    <p>Medium</p>                                    
                                </div>
                                <div class="dir">
                                    <p>
                                        Ofertas válidas somente no dia 03/02/2020 até as 23:59 ou enquanto durarem os estoques. Entrega para o dia 04/02/2020. Limite máximo de R$500,00 por produto.
                                    </p>
                                </div>                
                            </div>
                        </div>

                        <div class="ideia">
                            <div class="destaque-ideia">
                                <p class="txt--padrao12">Dica: Também combine as cores para diferenciar chamadas.</p>
                            </div>
                        </div>
                    </article>
               </section>

               <section id="sessao3" class="p70-130">
                    <article>
                        <p class="txt--padrao40">Acessibilidade</p>
                        <p class="txt--padrao12 pos-titulo">
                            Para garantir contraste e legibilidade nos meios digitais,
                            siga as recomendações abaixo:
                        </p>

                        <div class="wrapper-acessibilidade grid--2colunas-auto">
                            <div class="esq">
                                <div class="legenda">
                                    <p class="txt--bold">Legenda</p>

                                    <p><strong>Título</strong> > 18 px</p>
                                    <p><strong>Texto corrido</strong> < 12 px</p>

                                    <p><strong>AAA</strong> - Contraste ideal</p>
                                    <p><strong>AA</strong> - Contraste suficiente</p>
                                </div>
                            </div>

                            <div class="dir">
                                
                                <div class="wrapper-acessibilidade-blocos">
                                    <div class="cima">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em vermelho</p>
                                                <p>Para textos corridos em vermelho.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="baixo">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em azul</p>
                                                <p>Para textos corridos em azul.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper-acessibilidade-blocos">
                                    <div class="cima">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em branco</p>
                                                <p>Para textos corridos em branco.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="baixo">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em amarelo</p>
                                                <p>Para textos corridos em amarelo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper-acessibilidade-blocos">
                                    <div class="cima">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em vermelho</p>
                                                <p>Para textos corridos em vermelho.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="baixo">
                                        <div class="esq">
                                            <p>AAA</p>
                                            <p>AA</p>
                                        </div>
                                        <div class="dir">
                                            <div class="bloco">
                                                <p>Para títulos em azul</p>
                                                <p>Para textos corridos em azul.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </article>
               </section>

               <section id="sessao4">
                   <article>
                        <p class="txt--padrao40">Para se inspirar</p>

                        <div class="wrapper slick">
                            <img src="<? echo $images ?>/pranchas/Posters01.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Saquinho.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Enrolado.png" alt="">
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
			$('.link-abre:eq(3)').addClass('active');
		</script>
    </body>
</html>