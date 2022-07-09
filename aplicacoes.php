<!DOCTYPE HTML>
<html>
	<head>
        <?php include 'assets/config.php'; ?>
        <?php include 'assets/head.php'; ?>        
        <? 
        $paginaAtual = 'Aplicações';
        $tituloPagina = $paginaAtual ." - ". $empresa;
        ?>
        <title><? echo $tituloPagina ?></title>
    </head>
    <body id="aplicacoes">
        <div class="container">
            <?php include 'assets/menu.php'; ?>
            <main>
                <header class="topobg">
                    <div class="pelicula"></div>
                    <article>
                        <h1>Aplicações</h1>
                    </article>
                </header>
                <section id="sessao1">
                    <article>
                        <p class="txt--padrao40">Pacientes</p>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/predicta.png" alt="">
                            <img src="<? echo $images ?>pranchas/sempreafrente.png" alt="">
                            <img src="<? echo $images ?>pranchas/agende.png" alt="">
                            <img src="<? echo $images ?>pranchas/agendegravida.png" alt="">
                            <img src="<? echo $images ?>pranchas/conectamenina.png" alt="">
                            <img src="<? echo $images ?>pranchas/vidaativa.png" alt="">
                            <img src="<? echo $images ?>pranchas/tomarvacina.png" alt="">               
                        </div>
                    </article>
                </section>

                <section id="sessao2">
                    <article>
                        <p class="txt--padrao40">Médicos</p>
                        <div class="wrapper-img">
                            <img class="redux" src="<? echo $images ?>aplicacoes/2-Medicos/Grupo 7922@2x.png" alt="">
                        </div>
                    </article>
                </section>

                <section id="sessao3">
                    <article>
                        <p class="txt--padrao40">Soluções corporativas</p>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>pranchas/arvoremulher.jpg" alt="">
                            <img src="<? echo $images ?>pranchas/checkup.png" alt="">
                            <img src="<? echo $images ?>pranchas/conectamosvoce.png" alt="">
                            <img src="<? echo $images ?>pranchas/einsteinempresa.png" alt="">
                            <img src="<? echo $images ?>pranchas/novovirus.png" alt="">
                            <img src="<? echo $images ?>pranchas/einsteinempresa2.png" alt="">
                            <img src="<? echo $images ?>pranchas/einsteinconecta.png" alt="">               
                        </div>
                    </article>
                </section>

                <? include ('assets/footer.php') ?>
            </main>
        </div>    
        <script type="text/javascript">
            $('.link-abre').removeClass('active')
            $('.menu li').hide();
			$('.link-abre:eq(8)').addClass('active');
		</script>
    </body>
</html>