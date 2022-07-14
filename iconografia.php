<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Iconografia';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>    

    <body id="iconografia">
        <div class="container">
            <?php include 'assets/menu.php'; ?>
            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Iconografia</h1>
                    </article>
                </header>

                <section id="sessao1">
                    <article>
                        <p class="txt--padrao40">Deck</p>
                        <img class="redux" src="<? echo $images ?>iconografia/1-Deck/Grupo 7283@2x.png" alt="">
                    </article>
                </section>

                <section id="sessao2">
                    <article>
                        <p class="txt--padrao40 proximo">Boas práticas</p>
                        <p class="txt--padrao12 pos-titulo">
                            Nosso sistema possui um deck de ícones variados. Eles transmitem mensagens 
                            de maneira simplificada e podem auxiliar no destaque das informações.   
                            <br><br>
                            Use no deck disponível para download no fim da página:
                        </p>

                        <div class="boxes-boas">
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/2-Boas praticas/Grupo 7959@2x.png" alt="">
                                <p class="txt--padrao12">Cantos e acabamentos<br> arredondados.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/2-Boas praticas/Grupo 7958@2x.png" alt="">
                                <p class="txt--padrao12">Formas abertas ou fechadas, <br>sem preenchimento.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/2-Boas praticas/Grupo 7957@2x.png" alt="">
                                <p class="txt--padrao12">Uso apenas de linhas,<br>sem preenchimento.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/2-Boas praticas/Grupo 7992@2x.png" alt="">
                                <p class="txt--padrao12">Mesma espessura de<br>linha em toda a figura.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/2-Boas praticas/Grupo 7956@2x.png" alt="">
                                <p class="txt--padrao12">Coerência visual.</p>
                            </div>
                        </div>
                    </article>
                </section>

                <section id="sessao3">
                    <article>
                        <p class="txt--padrao40 proximo">Sobre fundos coloridos</p>
                        <p class="txt--padrao12">Para garantir o melhor contraste, siga as combinações de cores demonstradas abaixo:</p>
                        <div class="wrapper-fundos">
                            <img class="redux" src="<? echo $images ?>iconografia/3-Sobre fundos coloridos/Grupo 7993@2x.png" alt="">
                            <img class="redux" src="<? echo $images ?>iconografia/3-Sobre fundos coloridos/Grupo 7994@2x.png" alt="">
                            <img class="redux" src="<? echo $images ?>iconografia/3-Sobre fundos coloridos/Grupo 7995@2x.png" alt="">
                        </div>
                    </article>
                </section>

                <section id="sessao4">
                    <article>
                        <p class="txt--padrao40">Para evitar</p>
                        <div class="wrapper-evitar">
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7092@2x.png" alt="">
                                <p class="txt--padrao12">Perspectiva ou<br>profundidade.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7093@2x.png" alt="">
                                <p class="txt--padrao12">Diferentes espessuras<br>de linha.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7095@2x.png" alt="">
                                <p class="txt--padrao12">Formas sólidas e<br> diferentes cores.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7097@2x.png" alt="">
                                <p class="txt--padrao12">Excesso de elementos<br>e/ou detalhes.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7098@2x.png" alt="">
                                <p class="txt--padrao12">Espessura de linha<br>muito fina.</p>
                            </div>
                            <div class="box">
                                <img class="redux" src="<? echo $images ?>iconografia/4-Para evitar/Grupo 7099@2x.png" alt="">
                                <p class="txt--padrao12">Estilos<br> cartunizados.</p>
                            </div>
                        </div>
                    </article>
                </section>

               <section id="sessao5">
                   <article>
                        <p class="txt--padrao40">Para se inspirar</p>

                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/einsteinconecta.png" alt="">
                            <img src="<? echo $images ?>pranchas/vidaativa.png" alt="">
                            <img src="<? echo $images ?>pranchas/saude.png" alt="">
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
			$('.link-abre:eq(4)').addClass('active');
		</script>
    </body>
</html>