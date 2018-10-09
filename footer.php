    </body>
    <footer>
                            <?php wp_nav_menu(array(
                                'container'=>'ul',
                                'menu_class'=>'navabajo',
                                'theme_location'=>'abajo')
                                ); 
                            ?>
        <ul class="creditos" style="padding-right:2%">
        <a href="https://github.com/lucycons3/flexlc3">Tema realizado por LC3</a>
        </ul>
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