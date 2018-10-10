    </body>
    <footer>
                            <?php wp_nav_menu(array(
                                'container'=>'ul',
                                'menu_class'=>'navabajo',
                                'theme_location'=>'abajo')
                                ); 
                            ?>
        <div class="creditos" style="padding-right:2%">
			<p><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">Licencia CC BY-NC-SA 4.0</a> | <a target="_blank" href="https://github.com/lucycons3/flexlc3">Tema</a> realizado por <a href="https://www.lucycons3.eu" target="_blank">LC3</a></p>
        </div>
        <div style="margin-bottom:2%;"></div>
        	<script>
				function myFunction() {
		   		 var x = document.getElementById("myTopnav");
		   		 if (x.className === "topnav") {
		   		     x.className += " responsive";
		   		 } else {
		  		      x.className = "topnav";
		 		   }
				}
			</script>
    </footer>
</html>