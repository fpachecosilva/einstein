
<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>
        
        <? 
        $paginaAtual = 'Downloads';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>

        <title><? echo $tituloPagina ?></title>
    </head>

    <body id="downloads">

        <div class="container">

            <?php include 'assets/menu.php'; ?>

            <main>
                <section id="downloadspage">
                    <article>

                        <div class="box">
                            <p class="txt--padrao20">Aplicações</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/aplicacoes/AF_Merce_Enxoval.zip">AF_Merce_Enxoval.zip</a>                                
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Cores</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/cores/AF_Merce_Cores.zip">AF_Merce_Cores.zip</a>                                
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Essência</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/essencia/AF_Merce_Essencia.zip">Essencia.zip</a>
                                <a href="assets/download/essencia/AF_Merce_Manifesto.zip">Manifesto.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Grafismos</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/grafismos/AF_Merce_Grafismos.zip">AF_Merce_Grafismos.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Logotipo</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/logo/AF_Merce_Assets_Logo.zip">AF_Merce_Assets_Logo.zip</a>
                                <a href="assets/download/logo/AF_Merce_Customizacao_Logo.zip">AF_Merce_Customizacao_Logo.zip</a>
                                <a href="assets/download/logo/AF_Merce_Versoes_Icone.zip">AF_Merce_Versoes_Icone.zip</a>
                                <a href="assets/download/logo/AF_Merce_Versoes_Logo.zip">AF_Merce_Versoes_Logo.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Pictografia</p>
                            <hr>

                            <div class="links">
                                <a
                                    href="assets/download/pictografia/AF_Merce_Pictos.zip">AF_Merce_Pictos.zip</a>
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
			$('.link-abre:eq(7)').addClass('active');
		</script>
    </body>
</html>