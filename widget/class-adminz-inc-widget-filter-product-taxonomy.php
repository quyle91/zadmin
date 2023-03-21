<?php 
namespace Adminz\Inc\Widget;
use WP_Widget;
use Adminz\Inc\Walker\ADMINZ_Inc_Walker_Filter_Product_Taxonomy;
use Adminz\Helper\ADMINZ_Helper_Woocommerce_Taxonomy;
use Adminz\Helper\ADMINZ_Helper_ACF;
use Adminz\Admin\ADMINZ_Woocommerce;
use Adminz\Admin\ADMINZ_Flatsome;
use Adminz\Admin\Adminz as Adminz;


class ADMINZ_Inc_Widget_Filter_Product_Taxonomy  extends WP_Widget {
	function __construct() {		
    	$widget_ops = [ 
	      	'classname' => 'adminz_woocommerce_filter_taxonomy', 
	      	'description' => __("A list or dropdown of product categories.",'administrator-z'). " search by title, price, custom taxonomy, rating star, product attributes, product tag.",
	      	'customize_selective_refresh' => true
	    	];
	    $control_ops = ['id_base' => 'adminz_woocommerce_filter_taxonomy' ];
	    $title = __("Filter products",'administrator-z'). " - NEW";
	    parent::__construct( 
	    	'adminz_woocommerce_filter_taxonomy', 
	    	$title,
	    	$widget_ops, 
	    	$control_ops 
	    );
	    add_action( 'widgets_init', function (){
	    	register_widget( $this );
	    } );
  	}
  	function form( $instance ) {  	
  		parent::form( $instance );	
  		$default = array(
			'title' => __("Product categories",'administrator-z'),
			'taxonomy'=> 'product_cat',
			'style' => 'list',
			'step' => '',
			'global_filter_price'=>'',
			'query_type'=>''
		);
		$instance = wp_parse_args( (array) $instance, $default);

		$title = esc_attr( $instance['title'] );
		$taxonomy = esc_attr( $instance['taxonomy'] );
		$style = esc_attr( $instance['style'] );
		$step = esc_attr( $instance['step']);
		$global_filter_price = esc_attr( $instance['global_filter_price']);
		$query_type = esc_attr( $instance['query_type']);

		
		?>
		<p>
			<?php echo __('Title',"administrator-z"); ?>
			<input type="text" name="<?php echo esc_attr($this->get_field_name('title'));?>" class="widefat" value="<?php echo esc_attr($title); ?>">
		</p>
		<p>
			<?php 
				echo "Select Field";
				$taxonomies = ADMINZ_Helper_Woocommerce_Taxonomy::lay_taxonomy_co_the_loc();				
				if(!empty($taxonomies) and is_array($taxonomies)){
					?>
					<select name="<?php echo esc_attr($this->get_field_name('taxonomy'));?>" class="widefat">
					<?php			
					foreach ($taxonomies as $key => $value) {
				        $label = $value->labels->singular_name;
				        $label = ADMINZ_Helper_Woocommerce_Taxonomy::thay_doi_taxonomy_label($value);

				        $tax_arr[$value->name] =$label;
				        $selected = "";
				        if($value->name == $taxonomy){
				        	$selected = "selected";
				        }
				        echo '<option '.esc_attr($selected).' value="'.esc_attr($value->name).'">Taxonomy - '.esc_attr($label).'</option>';
				    }
				}			
				$metakeys = ADMINZ_Flatsome::get_arr_meta_key('product');				
				if(!empty($metakeys) and is_array($metakeys)){
					foreach ($metakeys as $key => $value) {
						$label = ADMINZ_Helper_ACF::get_field_label($value);
						if(!$label){
							$label = $value;
						}
						$selected = "";						
				        if($value == $taxonomy){
				        	$selected = "selected";
				        }
				        echo '<option '.esc_attr($selected).' value="'.esc_attr($value).'">Meta key - '.esc_attr($label).'</option>';
					}
				}
			?>
			</select>
		</p>
		<p>
			<?php echo __('Display type',"administrator-z"); ?>
			<select	name="<?php echo esc_attr($this->get_field_name('style'));?>" class="widefat">
				<option value="list" <?php if($style == 'list') echo 'selected'; ?>><?php echo __("List","administrator-z");?></option>
				<option value="dropdown" <?php if($style == 'dropdown') echo 'selected'; ?>><?php echo __("Dropdown","administrator-z");?></option>
				<option value="button" <?php if($style == 'button') echo 'selected'; ?>><?php echo __("Bulk select"). " ". __("Button text","administrator-z");?></option>
			</select>
		</p>	
		<p>
			<?php echo __('Filter by price','administrator-z'); ?>: Price steps
			<input type="number" name="<?php echo esc_attr($this->get_field_name('step'));?>" class="widefat" value="<?php echo esc_attr($step); ?>">
			<div>				
				<label><input type="checkbox" name="<?php echo esc_attr($this->get_field_name('global_filter_price'));?>" class="widefat" <?php if($global_filter_price == "on") echo "checked"; ?>> Use global step | tool-> Administrator Z -> Woocommerce</label>
			</div>
		</p>
		<p>
			<?php echo __("Query type","administrator-z"); ?>: Attribute
			<select name="<?php echo esc_attr($this->get_field_name('query_type'));?>" class="widefat">
				<option <?php if($query_type == "") echo "selected"; ?> value=""><?php echo __("AND","administrator-z");?></option>
				<option <?php if($query_type == "or") echo "selected"; ?> value="or"><?php echo __("OR","administrator-z");?></option>
			</select>
		</p>	
		<?php
	}
	function update( $new_instance, $old_instance ) {
	    parent::update( $new_instance, $old_instance );
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['taxonomy'] = strip_tags($new_instance['taxonomy']);
		$instance['style'] = strip_tags($new_instance['style']);
		$instance['step'] = strip_tags($new_instance['step']);
		$instance['global_filter_price'] = strip_tags($new_instance['global_filter_price']);
		$instance['query_type'] = strip_tags($new_instance['query_type']);

		return $instance;
  	}
  	function widget($args, $instance) {
  		
  		$taxonomy_hien_tai = ADMINZ_Helper_Woocommerce_Taxonomy::lay_toan_bo_taxonomy_hien_tai();  		
	    extract( $args );
	    if(empty($instance['title'])) $instance['title'] = __("Product categories",'administrator-z');
		$title = apply_filters('widget_title', $instance['title'] );
		$taxonomy = isset($instance['taxonomy'])? $instance['taxonomy'] : "product_cat";
		$style = isset($instance['style'])? $instance['style'] : "";
		$step = isset($instance['step']) ? $instance['step'] : 10;
		$global_filter_price = isset($instance['global_filter_price']) ? $instance['global_filter_price'] : '';
		$query_type = isset($instance['query_type']) ? $instance['query_type'] : "";


		ob_start();

		echo apply_filters('the_title',$before_widget);
		//In tiêu đề widget
		echo apply_filters('the_title',$before_title.$title.$after_title);
	    
		// Nội dung trong widget
		$id = "form_".rand();
		

		switch ($taxonomy){
			case "title":
				?>
				<form role="search" method="get" class="woocommerce-product-search searchform" action="<?php echo wc_get_page_permalink( 'shop' ); ?>">
					<div class="flex-row relative">
						<div class="flex-col ">
							<label class="screen-reader-text" for="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"><?php esc_html_e( 'Search for:', 'administrator-z' ); ?></label>
							<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'administrator-z' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						</div>
						<div class="flex-col ">
							<button class="button primary icon" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'administrator-z' ); ?>">	
								<?php 								
								echo Adminz::get_icon_html('search');
								 ?>
							</button>
						</div>
					</div>
					<?php ADMINZ_Helper_Woocommerce_Taxonomy::lay_input_hidden_form_taxonomy_hien_tai("s"); ?>					
				</form>
				<?php
			break;
			case "price":

				// copy from shortcode/woocommerce-form
				$price_range_2 = ADMINZ_Helper_Woocommerce_Taxonomy::get_price_range_2($global_filter_price,$step);		
				array_unshift($price_range_2,["",""]); // add for all price					
				switch ($style) {
					case 'dropdown':
						$taxonomy2 =  ADMINZ_Helper_Woocommerce_Taxonomy::thay_doi_term_slug_cho_link($taxonomy);
						?>
						<form method="get" action="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="adminz_form_filter_prices" id="<?php echo esc_attr($id); ?>"> 
							<select class="change_to_redirect">
								<option value="" ><?php echo __('Filter by price','administrator-z'); ?></option>
								<?php
                                    foreach ($price_range_2 as $key => $value) {                                    	
                                        echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_min_max_price_sang_dropdown($value,$taxonomy_hien_tai);  
                                    }
                                ?>
							</select>
							<?php ADMINZ_Helper_Woocommerce_Taxonomy::lay_input_hidden_form_taxonomy_hien_tai(); ?>
						</form>						
						<?php
						echo ADMINZ_Helper_Woocommerce_Taxonomy::script_change_to_submit($id);
						break;
					break;
					case 'button':
						?>
						<div class="tagcloud adminz_product_cat">
						<?php								
							foreach ($price_range_2 as $key => $value) {
								echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_min_max_price_sang_link_widget($value,$taxonomy_hien_tai); 
							}
		                ?>
		            	</div>
		                <?php
		                echo esc_attr($this->lay_button_style_css());
					break;
					default:
						?> 
						<ul class="product-categories adminz_product_cat"> 
						<?php						
						foreach ($price_range_2 as $key => $value) {
							echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_min_max_price_sang_menu_widget($value,$taxonomy_hien_tai);
						}
						?>
						</ul>
						<?php
					break;
				}
			break;
			default:
				$key_arr = ADMINZ_Flatsome::get_arr_meta_key('product');
				$tax_arr = ADMINZ_Woocommerce::get_arr_tax();
				if(array_key_exists($taxonomy, $tax_arr)){
					switch ($style) {
						case 'dropdown':
							$taxonomy2 =  ADMINZ_Helper_Woocommerce_Taxonomy::thay_doi_term_slug_cho_link($taxonomy); 
							?>
							<form method="get" action="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="adminz_form_filter_taxonomy" id="<?php echo esc_attr($id); ?>"> 
								<?php
								$get_terms = get_terms($taxonomy);
								$categoryHierarchy = array();
								if(is_array($get_terms)){
					                ADMINZ_Helper_Woocommerce_Taxonomy::sap_xep_lai_cha_con($get_terms, $categoryHierarchy);
					            }

								$taxobj = get_taxonomy($taxonomy);
								$label = ADMINZ_Helper_Woocommerce_Taxonomy::thay_doi_taxonomy_label($taxobj);

							    $data_query_type = "";						    
							    if(substr($taxonomy,0,3) == "pa_"){
							    	$data_query_type= 'data-query_type="query_type_'.str_replace("pa_","",$taxonomy).'"';
							    }

								?>
								<select 
								class="change_to_redirect" 
								<?php echo esc_attr($data_query_type);?> 
								data-taxonomy="<?php echo esc_attr($taxonomy2);?>" 
								data-query_value="<?php echo esc_attr($query_type);?>"
								>
									<option value="" ><?php echo esc_attr($label);?></option>
									<?php 
			                        if(!empty($categoryHierarchy) and is_array($categoryHierarchy)){
			                            foreach ($categoryHierarchy as $key => $term) {
			                                echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_term_option_select($term,$taxonomy2," ");
			                            }
			                        }
			                        ?>
								</select>
								<?php 
								 ?>
								<?php ADMINZ_Helper_Woocommerce_Taxonomy::lay_input_hidden_form_taxonomy_hien_tai(); ?>
							</form>
							<?php
							echo ADMINZ_Helper_Woocommerce_Taxonomy::script_change_to_submit($id);
							break;
						case 'button':
							?>
							<div class="tagcloud adminz_product_cat">
							<?php
							$get_terms = get_terms($taxonomy);  
							
							if(!empty($get_terms) and is_array($get_terms)){
			                    foreach ($get_terms as $key => $term) {
			                    	echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_term_sang_link_widget($term,$taxonomy,$query_type);	
			                    }
			                }
			                ?>		               
			            	</div>
			                <?php
			                echo esc_attr($this->lay_button_style_css());
							break;
						default:
							$get_current_taxonomy_and_ancestors = ADMINZ_Helper_Woocommerce_Taxonomy::lay_taxonomy_hien_tai($taxonomy);							
							$current_category = $get_current_taxonomy_and_ancestors[0];
							$current_category_ancestors = $get_current_taxonomy_and_ancestors[1];	

							$taxonomy2 =  ADMINZ_Helper_Woocommerce_Taxonomy::thay_doi_term_slug_cho_link($taxonomy);
							

							$list_args['taxonomy'] 					= $taxonomy;
							$list_args['walker']                     = new ADMINZ_Inc_Walker_Filter_Product_Taxonomy($taxonomy2,$query_type);
							$list_args['title_li']                   = '';
							$list_args['pad_counts']                 = false;
							$list_args['show_option_none']           = __( 'No product categories exist.', 'administrator-z' );
							$list_args['current_category'] 			= $current_category;
							$list_args['current_category_ancestors'] = $current_category_ancestors;
							$list_args['max_depth']                  = 0;

							echo '<ul class="product-categories adminz_product_cat">';
							wp_list_categories( apply_filters( 'woocommerce_product_categories_widget_args', $list_args ) );
							echo '</ul>';

							break;
					}
				}
				// for metakey
				if(in_array($taxonomy, $key_arr)){
					switch ($style) {
						case 'dropdown':		
							?>
							<form method="get" action="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="adminz_form_filter_taxonomy" id="<?php echo esc_attr($id); ?>"> 
								<?php
								$metavalues = ADMINZ_Flatsome::adminz_get_all_meta_values_by_key($taxonomy);
								$label = ADMINZ_Helper_ACF::get_field_label($taxonomy);		

								$current = [];
								if(isset($_GET[$taxonomy]) and $_GET[$taxonomy]){
									$current = explode(',',sanitize_text_field($_GET[$taxonomy]));
								}

								$data_query_type= 'data-query_type="query_type_'.$taxonomy.'"';

								?>
								<select 
								class="change_to_redirect" 
								<?php echo esc_attr($data_query_type);?> 
								data-taxonomy="<?php echo esc_attr($taxonomy);?>"
								data-query_value="<?php echo esc_attr($query_type);?>"
								>
									<option value="" ><?php echo esc_attr($label);?></option>
									<?php 
			                        if(!empty($metavalues) and is_array($metavalues)){
			                            foreach ($metavalues as $key => $metavalue) {
			                            	$selected = "";		
			                            	if(in_array($metavalue,$current)){
			                            		$selected = "selected";
			                            	}
			                                echo "<option value='".esc_attr($metavalue)."' data-taxonomy='".esc_attr($taxonomy)."' ".esc_attr($selected).">".esc_attr($metavalue)."</option>";
			                            }
			                        }
			                        ?>
								</select>
								<?php 
								 ?>
								<?php ADMINZ_Helper_Woocommerce_Taxonomy::lay_input_hidden_form_taxonomy_hien_tai(); ?>
							</form>
							<?php
							echo ADMINZ_Helper_Woocommerce_Taxonomy::script_change_to_submit($id);
							break;
						case 'button':
							?>
							<div class="tagcloud adminz_product_cat">
							<?php
							$metavalues = ADMINZ_Flatsome::adminz_get_all_meta_values_by_key($taxonomy);
							
							if(!empty($metavalues) and is_array($metavalues)){
			                    foreach ($metavalues as $key => $value) {
			                    	echo ADMINZ_Helper_Woocommerce_Taxonomy::chuyen_doi_metakey_sang_link_widget($value,$taxonomy,$query_type);	
			                    }
			                }
			                ?>		               
			            	</div>
			                <?php
			                echo esc_attr($this->lay_button_style_css());
							break;
						
						default:

							echo '<ul class="product-categories adminz_product_cat">';
							$metavalues = ADMINZ_Flatsome::adminz_get_all_meta_values_by_key($taxonomy);
							if(!empty($metavalues) and is_array($metavalues)){
								foreach ($metavalues as $key => $metavalue) {
									echo ADMINZ_Helper_Woocommerce_Taxonomy::lay_link_list_metakey_widget($metavalue, $taxonomy);
								}
							}
							
							echo '</ul>';

							break;
					}
				}
			break;
		}		
		?>
		<style type="text/css">
			.adminz_product_cat li:not(.current-cat) .woocommerce-Price-amount{font-weight: normal; color:  inherit;}

		</style>
		<?php
		// Kết thúc nội dung trong widget
		echo apply_filters('the_title',$after_widget);

		echo apply_filters('adminz_output_debug',ob_get_clean());
  	}

  	function lay_button_style_css(){
  		add_action('wp_footer',function (){   
	        wp_enqueue_style( 'adminz-fl-woo-widget',plugin_dir_url(ADMINZ_BASENAME).'assets/css/shortcode/flatsome-woocommerce-widget.css', array(), '1.0', 'all' );     
	    });
  	}
}