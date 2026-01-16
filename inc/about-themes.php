<?php
//about theme info
add_action( 'admin_menu', 'skt_industrial_abouttheme' );
function skt_industrial_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-industrial'), esc_html__('About Theme', 'skt-industrial'), 'edit_theme_options', 'skt_industrial_guide', 'skt_industrial_mostrar_guide');   
} 
//guidline for about theme
function skt_industrial_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-industrial'); ?>
		   </div>
          <p><?php esc_html_e('SKT Industrial is a powerful and versatile WordPress theme built for manufacturing, commercial, factory, and mechanical businesses. Designed for the industrialized world, it suits production units, heavy-duty services, and technologically engineered ventures. Whether you are in mass-produced goods or high-precision work, this theme adapts to your needs with flexible layouts and scalable design options. Fully compatible with Elementor page builder, it ensures smooth customization and is SEO-friendly to boost your online visibility.','skt-industrial'); ?></p>
          <a href="<?php echo esc_url(SKT_INDUSTRIAL_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-industrial'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_INDUSTRIAL_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-industrial'); ?></a> | 
				<a href="<?php echo esc_url(SKT_INDUSTRIAL_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-industrial'); ?></a> | 
				<a href="<?php echo esc_url(SKT_INDUSTRIAL_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-industrial'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_INDUSTRIAL_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-industrial'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>