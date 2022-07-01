<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Pictografia';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="pictografia">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Pictografia</h1>
                    </article>
                </header>

                <section id="sessao1" class="grid--2colunas">                    
                    <p>Todo cheio de graça!</p>
                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Todo cheio/Grupo 5395.png" alt="">
                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Todo cheio/Grupo 6124_mobile.png" alt="">
                </section>

                <section id="sessao2">
                    <article>
                        <div class="wrapper grid--2colunas-auto">
                            <div>
                                <p class="txt--padrao40">Deck de exemplos</p>
                                <p class="txt--padrao12 pos-titulo">Mercadinho bom é mercadinho cheio!</p>
                                <p class="txt--padrao12 pos-titulo">
                                    Pra dar aquela ajudinha no dia de nossos clientes, nossa família de pictos explora
                                    os diferentes produtos do mercado com formas simples e fáceis de entender.
                                    <br><br>
                                    Você pode usá-los tanto na sinalização
                                    interna quanto na comunicação, falando
                                    de um ofertão na sessão de hortifrúti ou no pão quentinho que acabou de sair. Legal, né?
                                </p>
                            </div>
    
                            <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Deck exemplos/Grupo 6118.png" alt="">
                            <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Deck exemplos/Asset 16@2x.png" alt="">
                        </div>
                    </article>
                </section>

                <section id="sessao3">
                    <article>
                        <p class="txt--padrao40">Usos</p>

                        <div class="wrapper">
                            <div class="esq">
                                <div class="cima">
                                    <p class="txt--padrao12 mobileitem">Na sinalização interna</p>
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Usos/usos1.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Usos/Grupo-6127_1_mobile.png" alt="">
                                </div>
                                <div class="baixo desktopitem">
                                    <p class="txt--padrao12">Na sinalização interna</p>
                                </div>
                            </div>

                            <div class="dir">
                                <div class="cima">
                                    <p class="txt--padrao12 mobileitem">Como elemento gráfico</p>
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Usos/usos2.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Usos/Grupo-6127_2_mobile.png" alt="">
                                </div>
                                <div class="baixo desktopitem">
                                    <p class="txt--padrao12">Como elemento gráfico</p>
                                </div>
                            </div>                           
                        </div>
                    </article>
                </section>

                <section id="sessao4">
                    <article>
                        <div class="wrapper grid--2colunas-auto">
                            <div class="esq">
                                <p class="txt--padrao40">Construção</p>
                                <p class="txt--padrao12 pos-titulo">
                                    O elemento base de todos os pictos é nosso 
                                    acento, que pode ser usado em incontáveis 
                                    números e posições brincando com
                                    a composição.
                                    <br><br>
                                    Apesar de não ter um grid fixo de formas, 
                                    busque sempre ser o mais simples e claro 
                                    possível, para que qualquer pessoa entenda
                                    o que o picto representa.
                                    <br><br>
                                    Formas básicas também ajudam bastante!
                                    Só tome cuidado com o número de elementos, 
                                    não queremos um ícone carregado e difícil
                                    de compreender.
                                </p>
                            </div>
                            <div class="dir">
                                <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Construcao/Grupo 5531.png" alt="">
                                <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Construcao/Grupo 5532_mobile.png" alt="">
                            </div>
                        </div>
                        <div class="ideia">
                            <div class="destaque-ideia">
                                <p class="txt--padrao12">Dica: para ícones voltados para UI e UX, use a biblioteca do Material Design.</p>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao5">
                    <article>
                        <div class="wrapper grid--2colunas-auto">
                            <div class="esq">
                                <p class="txt--padrao40">Cores</p>
                                <p class="txt--padrao12 pos-titulo">
                                    Os pictos podem usar as principais cores
                                    de nossa paleta e, dependendo do fundo,
                                    ter uma versão em negativo para ser mais bem compreendido.
                                </p>
                            </div>

                            <div class="dir">
                                <div class="box">
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Cores/pictografia-cores1.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Cores/Grupo 5590.png" alt="">
                                    <p class="txt--padrao12">Sobre fundo amarelo</p>
                                </div>
                                <div class="box">
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Cores/pictografia-cores2.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Cores/Grupo 5589.png" alt="">
                                    <p class="txt--padrao12">Sobre fundo vermelho</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper grid--2colunas-auto">
                            <div class="esq">
                                <p class="txt--padrao20">Cuidados no ambiente digital</p>
                                <p class="txt--padrao12 pos-titulo">
                                    Como nosso amarelo principal é bem vibrante, 
                                    use o sobretom de amarelo como fundo para 
                                    pictos com predominância da cor branca.
                                </p>
                            </div>

                            <div class="dir">
                                <div class="box">
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Cores/pictografia-cores3.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Cores/Grupo 6127_mobile.png" alt="">
                                    <p class="txt--padrao12">Com amarelo principal: muita vibração</p>
                                </div>
                                <div class="box">
                                    <img class="desktopitem" src="<? echo $images ?>/pictografia/desk/Cores/pictografia-cores4.png" alt="">
                                    <img class="mobileitem" src="<? echo $images ?>/pictografia/mob/Cores/Grupo 6128_mobile.png" alt="">
                                    <p class="txt--padrao12">Com sobretom amarelo: contraste adequado</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao6">
                    <article>
                        <p class="txt--padrao40">Para se inspirar</p>

                        <div class="wrapper slick">
                            <img src="<? echo $images ?>/pranchas/Icones.png" alt="">
                            <img src="<? echo $images ?>/pranchas/CavaleteOferta.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Loja.png" alt="">
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
			$('.link-abre:eq(5)').addClass('active');
		</script>
    </body>
</html>