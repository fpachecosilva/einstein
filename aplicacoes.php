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
                        <h1>Exemplos de aplicações</h1>
                    </article>
                </header>
              

                <section id="sessao1">
                    <article>
                        <div class="wrapper slick">
                            <img src="<? echo $images ?>/pranchas/Placa.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Marmitas.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Posters01.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Telas.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Bag.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Posters02.png" alt="">
                            <img src="<? echo $images ?>/pranchas/PranchaWendel.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Embarque.png" alt="">
                            <img src="<? echo $images ?>/pranchas/Icones.png" alt="">
                            <img src="<? echo $images ?>/pranchas/PranchaJoca.png" alt="">
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
			$('.link-abre:eq(8)').addClass('active');
		</script>
    </body>
</html>