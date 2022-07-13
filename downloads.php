
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
                            <p class="txt--padrao20">Cores</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/_Cores/AF_HIAE_Cores.zip">AF_HIAE_Cores.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Grafismos</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/_Grafismos/AF_HIAE_Grafismos_RGB_PNG.zip">AF_HIAE_Grafismos_RGB_PNG.zip</a>
                                <a href="assets/download/_Grafismos/AF_HIAE_Grafismos_RGB_Vetor.zip">AF_HIAE_Grafismos_RGB_Vetor.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Iconografia</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/_Iconografia/AF_HIAE_DeckIcones_RGB_PNG.zip">AF_HIAE_DeckIcones_RGB_PNG.zip</a>
                                <a href="assets/download/_Iconografia/AF_HIAE_DeckIcones_RGB_Vetor.zip">AF_HIAE_DeckIcones_RGB_Vetor.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Símbolo</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/_Símbolo/AF_HIAE_Simbolo.zip">AF_HIAE_Simbolo.zip</a>
                            </div>
                        </div>

                        <div class="box">
                            <p class="txt--padrao20">Versões de Marca</p>
                            <hr>

                            <div class="links">
                                <a href="assets/download/_Versões de Marca/AF_HIAE_VersoesMarca_Principal.zip">AF_HIAE_VersoesMarca_Principal.zip</a>
                                <a href="assets/download/_Versões de Marca/AF_HIAE_VersoesMarca_Secundaria.zip">AF_HIAE_VersoesMarca_Secundaria.zip</a>
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