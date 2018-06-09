<?php 
$hotel_galaxy_default_setting=hotel_galaxy_default_setting(); 
$hotel_galaxy_settings = wp_parse_args(get_option( 'hotel_galaxy_option', array() ), $hotel_galaxy_default_setting ); 
?>
<!-------Footer-------------------------------->
<div class="footer-top animate" data-anim-type="zoomIn" data-anim-delay="800">
	<div class="container">
		
	</div>
</div>
<div class="clearfix"></div>
<!--------Footer Section---------------->
<section class="footer animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="800">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Onde estamos</h3>
					<p>Av. Rondônia, 3645 - Zona VII<br>
					Umuarama - PR</p> 
				</div>
				<div class="col-md-4">
					<h3>Contatos</h3>
					<p>Telefone: (44) 3622-7178<br>
					E-mail: gupvida@uol.com.br</p>
					
				</div>
				<div class="col-md-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.261097913745!2d-53.32476868447518!3d-23.77371498457781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d6a32dc3bd9d%3A0xfbca861c25a9e06!2sAv.+Rond%C3%B4nia%2C+3645+-+Zona+VII%2C+Umuarama+-+PR%2C+87503-470!5e0!3m2!1spt-BR!2sbr!4v1528328724792" width="100%" height="250" frameborder="0" class="thumbnail" allowfullscreen></iframe>
					
				</div>
			</div>
 <!------/Footer Social--------->
  </div>
 </div>
 <!-----CopyRight------>
 <div class="copyright animate fadeInUp">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<p>Desenvolvido por
 				<a href="mailto:diogo.vanderlan@gmail.com">Diogo Vanderlan - </a>
 				<a href="mailto:viniciusneri38@hotmail.com">Vinícius Neri -</a>
 				<a href="mailto:gugadellatorre@gmail.com">Gustavo Dellatorre -</a>
 				<a href="mailto:ricardojamerico@hotmail.com">Ricardo Américo </a>
 				<br>Sistemas para Internet - Faculdade ALFA </p>
 			</div>
 		</div>
 	</div>
 </div>
</section>	
<!-------Footer-------------------------------->
<!--Scroll To Top--> 
<a href="#" class="scroll-top"><i class="fa fa-arrow-up"></i></a>
<!--/Scroll To Top--> 	

</div>
<?php wp_footer(); ?>
</body>
</html>