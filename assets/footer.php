
	<footer>
		<a>
            <div class="nomelink">
				<p class="txt--padrao12">Próximo</p>
				<p class="txt--bold"></p>
			</div>
			<img src="assets/img/footer-seta.svg" alt="">
		</a>

		<div class="trademark">
			<p>© 2022  Brandbook Hospital Albert Einstein — Desenvolvido por Marcas Com SAL</p>
		</div>
	</footer>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/BeerSlider.js"></script>
    <script type="text/javascript" src="assets/js/jquery.simplyscroll.js"></script>    
    <script type="text/javascript">
        (function($) {
            $(function() { //on DOM ready 
                $("#scroller").simplyScroll();
            });
         })(jQuery);
    </script>    
    <script>
        $.fn.BeerSlider = function ( options ) {
            options = options || {};
            return this.each(function() {
            new BeerSlider(this, options);
            });
        };
        $('.beer-slider').BeerSlider({start: 50});
    </script>
    <script type="text/javascript" src="assets/js/estrutura.js?v2"></script>