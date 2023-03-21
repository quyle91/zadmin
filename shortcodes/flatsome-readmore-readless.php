<?php 
use Adminz\Admin\Adminz as Adminz;
add_action('ux_builder_setup', 'mk_text_readmore');

function mk_text_readmore(){
	add_ux_builder_shortcode('mk_readmore_readless', array(
		'type' => 'container',
		'name'      => __('Read more Read Less '),
		'category'  => Adminz::get_adminz_menu_title(),
		'priority'  => 1,
		'thumbnail' =>  get_template_directory_uri() . '/inc/builder/shortcodes/thumbnails/' . 'accordion' . '.svg',
		'info' => '{{ title }}',
    	'presets' => array(
	        array(
	            'name' => __( 'Default' ),
	            'content' => '
	                [mk_readmore_readless]
	                    <h3>This is a simple headline</h3><p>This is a simple headline Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim leo nec turpis fermentum porta. Cras ligula eros, molestie sit amet dictum a, posuere at ante. Curabitur id velit mollis, facilisis leo pretium, cursus tortor. Phasellus ut ipsum ipsum. In tristique porttitor elit, nec scelerisque velit lobortis ac. Cras pellentesque, enim quis cursus mollis, erat augue tempus ipsum, feugiat tristique massa mauris quis urna. Mauris vestibulum arcu ac tortor tristique facilisis. Nunc nec pharetra velit, at accumsan tortor. Nam ac justo velit. Aliquam vehicula ex in tempor sagittis.</p>
	                [/mk_readmore_readless]
	            '
	        ),
	    ),
	    'options' => array(
	    	'max_height' => array(
	            'type' => 'scrubfield',
	            'responsive' => true,
	            'heading' => __( 'Max height' ),
	            'default' => '10em',
	            'min' => 0,
	        ),
	    	'min_height' => array(
	            'type' => 'scrubfield',
	            'responsive' => true,
	            'heading' => __( 'Min height' ),
	            'default' => '5em',
	            'min' => 0,
	        ),
	        'gap' => array(
	            'type' => 'scrubfield',
	            'responsive' => true,
	            'heading' => __( 'Gap after content' ),
	            'default' => '30px',
	            'min' => 0,
	        ),
	        'bgr' => array(
	            'type' => 'colorpicker',
	          	'heading' => __('Gap background color'),
	          	'alpha' => false,
	          	'format' => 'hex',
	        ),
	        'readmore'             => array(
				'type'       => 'textfield',
				'heading'	=> __('Read more text'),
				'default'    => __("Read more..."),				
			),
			'readless'             => array(
				'type'       => 'textfield',
				'heading'	=> __('Read less text'),
				'default'    =>__("Read more..."),				
			),
			'btnclass'             => array(
				'type'       => 'textfield',
				'heading'	=> __('Button class'),
				'default'    => '',
				'holder'    => '',
			),
	        'max_height_expand' => array(
	            'type' => 'scrubfield',
	            'responsive' => true,
	            'heading' => __( 'Max height expanded' ),
	            'default' => '1000em',
	            'min' => 0,
	        ),
	    )
	) );
};

add_shortcode('mk_readmore_readless', 'mk_readmore_readless_shortcode');
function mk_readmore_readless_shortcode($atts, $content = null ) {
    extract(shortcode_atts(array(
    	'_id'=> rand(),
    	'gap' => '50px',
    	'readmore'=> __("Read more..."),
    	'readless' => __("Read more..."),
        'min_height'    => '5em',
        'max_height'    => '10em',
        'max_height_expand' => '1000em',
        'btnclass'=>'button is-outline white',
        'bgr'=> ""
    ), $atts));
    
    ob_start();
    $stylecss = array(
    	'overflow-y: hidden'.";",
    	'min-height: '.$min_height.";",
    	'max-height: '.$max_height.";",
	    'transition: max-height 0.3s ease-out'
    );
    ?>
    <div class="mk_readmore_readless" id="id<?php echo esc_attr($_id); ?>">
    <div class="mk_readmore_readless_content relative">
    	<div class="inner" style="<?php echo esc_attr(implode(" ", $stylecss)); ?>;">
    	<?php 
    	echo flatsome_contentfix( do_shortcode($content) );
    	if(is_user_logged_in()){
    		
    	}
    	$background_css = " ";
    	if($bgr){
    		$background_css = 'background: linear-gradient(0deg, '.$bgr.' 20%, rgba(255,255,255,0) 100%);';
    	}
    	?>
    	</div>    
	    <?php 
	    	echo '<div class="bot" style="position: absolute; bottom: 0; left: 0; '.esc_attr($background_css).' width: 100%; height: '.esc_attr($gap).' "></div>';
		?>
	</div>
	<?php
    	$button = '[button class="adminz_button '.$btnclass.'" text="'.$readmore.'" size="small"]';
    	echo do_shortcode( '[gap height="10px"]');
    	echo do_shortcode($button);
    ?>
    </div>
    <?php
    $return = ob_get_clean();
    if($content) {
    	add_action('wp_footer','mk_readmore_readless_script');
    	$unset = explode("em", $max_height)[0];    	
    	$buffer = '<style> 
    	#id'.$_id.' .mk_readmore_readless_content.unset>.inner{max-height: 10000000em !important;}
    	#id'.$_id.' .mk_readmore_readless_content.unset .bot{background: none !important; visibility: hidden;}
    	#id'.$_id.' .mk_readmore_readless_content.unset+*+.button:before{content:"'.$readless.'";}
    	#id'.$_id.' .mk_readmore_readless_content.unset+*+.button span{display: none;}
    	#id'.$_id.' .adminz_button{opacity: 0.2}
    	</style>';
    	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    }
    return $return;
}

function mk_readmore_readless_script(){
	?>
	<script type="text/javascript">
		window.addEventListener('DOMContentLoaded', function() {
			(function($){
				$(document).on('click','.mk_readmore_readless>.button',function(){
				    var parent = $(this).closest(".mk_readmore_readless");
				    var target = parent.find(".mk_readmore_readless_content");
				    $(target).toggleClass('unset');
				});
			})(jQuery);
		});
		


	</script>
	<?php
}