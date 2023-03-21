<?php
use Adminz\Admin\Adminz as Adminz;

add_action('ux_builder_setup', 'adminz_tabgroup_custom');
function adminz_tabgroup_custom(){
    add_ux_builder_shortcode('adminz_tabgroup_custom', array(
        'type' => 'container',
        'name'      => 'Tabs with icon',
        'category'  => Adminz::get_adminz_menu_title(),
        'thumbnail' =>  get_template_directory_uri() . '/inc/builder/shortcodes/thumbnails/' . 'tabs' . '.svg',
        //
        //'template' => flatsome_ux_builder_template( 'tabgroup.html' ), // can't fix angular
        'tools' => 'shortcodes/tabgroup/tabgroup.tools.html',
        'info' => '{{ title }}',
        'allow' => array( 'adminz_tab_custom' ),
        'children' => array(
            'draggable' => false,
            'addable_spots' => array( 'center' ),
        ),

        'toolbar' => array(
            'show_children_selector' => true,
            'show_on_child_active' => true,
        ),

        'presets' => array(
            array(
                'name' => __( 'Default' ),
                'content' => '
                    [adminz_tabgroup_custom title="Tab Title"]
                        [adminz_tab_custom title="Tab 1 Title"][/adminz_tab_custom]
                        [adminz_tab_custom title="Tab 2 Title"][/adminz_tab_custom]
                        [adminz_tab_custom title="Tab 3 Title"][/adminz_tab_custom]
                    [/adminz_tabgroup_custom]
                '
            ),
        ),
        'options' => array(
            'title' => array(
                'type' => 'textfield',
                'heading' => __( 'Title' ),
                'default' => __( '' ),
            ),

            'style' => array(
                'type' => 'select',
                'heading' => __( 'Style' ),
                'default' => 'line',
                'options' => require( get_template_directory().'/inc/builder/shortcodes' . '/values/nav-styles.php' ),
            ),

            'type' => array(
                'type' => 'select',
                'heading' => __( 'Type' ),
                'default' => 'horizontal',
                'options' => array(
                    'horizontal' => 'Horizontal',
                    'vertical' => 'Vertical',
                )
            ),

            'nav_style' => array(
              'type' => 'radio-buttons',
              'heading' => 'Nav Style',
              'default' => 'uppercase',
              'options' => require( get_template_directory().'/inc/builder/shortcodes' . '/values/nav-types-radio.php' ),
            ),

            'nav_size' => array(
                'type' => 'radio-buttons',
                'heading' => __( 'Size' ),
                'default' => 'medium',
                'options' => require( get_template_directory().'/inc/builder/shortcodes' . '/values/text-sizes.php' ),
            ),

            'align' => array(
                'type' => 'radio-buttons',
                'heading' => 'Tabs Align',
                'default' => 'left',
                'options' => require( get_template_directory().'/inc/builder/shortcodes' . '/values/align-radios.php' ),
            ),
            'bahavior_group' => array(
                'type' => 'group',
                'heading' => __( 'Behavior' ),
                'options' => array(
                    'event' => array(
                        'type'    => 'radio-buttons',
                        'heading' => __( 'Activate' ),
                        'description' => 'On hover takes effect in non-edit mode.',
                        'default' => '',
                        'options' => array(
                            ''      => array( 'title' => 'On click' ),
                            'hover' => array( 'title' => 'On hover' ),
                        ),
                    ),
                ),
            ),
            'advanced_options' => require( get_template_directory().'/inc/builder/shortcodes' . '/commons/advanced.php'),
        ),
    ));
}
add_shortcode('adminz_tabgroup_custom', 'adminz_tabgroup_custom_func');
function adminz_tabgroup_custom_func( $params, $content = null, $tag = '' ) {
    if(isset( $_POST['ux_builder_action'] )){
        ?>
        <div style="
        background: #71cedf;
        width: <?php echo esc_attr($width); ?>px;
        height: <?php echo esc_attr($height); ?>px;
        border: 2px dashed #000;
        display: flex;
        padding: 20px;
        color: white;
        font-size: 1.5em;
        justify-content: center;
        align-items: center;
        ">
            <?php echo "Tabs with Icon Element: Please go Frontend to preview" ;?>
        </div>
        <?php
        return ; 
    }


    $GLOBALS['adminz_tabs'] = array();
    $GLOBALS['adminz_tab_count'] = 0;
    $i = 1;

    extract(shortcode_atts(array(
        'id' => 'panel-'.rand(),
        'title' => '',
        'style' => 'line',
        'align' => 'left',
        'class' => '',
        'visibility' => '',
        'type' => '', // horizontal, vertical
        'nav_style' => 'uppercase',
        'nav_size' => 'normal',
        'history' => 'false',
        'event' => '',
    ), $params));

    if($tag == 'tabgroup_vertical'){
        $type = 'vertical';
    }

    $content = do_shortcode( $content );

    $wrapper_class[] = 'tabbed-content adminz_tabgroup_custom';
    if ( $class ) $wrapper_class[] = $class;
    if ( $visibility ) $wrapper_class[] = $visibility;

    $classes[] = 'nav';

    if($style) $classes[] = 'nav-'.$style;
    if($type == 'vertical') $classes[] = 'nav-vertical';
    if($nav_style) $classes[] = 'nav-'.$nav_style;
    if($nav_size) $classes[] = 'nav-size-'.$nav_size;
    if($align) $classes[] = 'nav-'.$align;
    if($event) $classes[] = 'active-on-' . $event;


    $classes = implode(' ', $classes);

    $return = '';

    if( is_array( $GLOBALS['adminz_tabs'] )){

        foreach( $GLOBALS['adminz_tabs'] as $key => $tab ){
            if($tab['title']) $id = flatsome_to_dashed($tab['title']);
            $active = $key == 0 ? ' active' : ''; // Set first tab active by default.

            $li  = '<li class="tab'.$active.' has-icon">';
            $li .= '<a href="#tab_'.$id.'">';            
            if($tab['icon']){
                //$img_post = get_post($tab['icon']);
                $li .= adminz_icon_function(
                    [
                        'image' => $tab['icon'],
                        'color' => $tab['icon_color'],
                        'max_width' => $tab['icon_width']."px",
                        'width'=> "40px",
                        'height'=>"1.5em"
                    ]
                );
            }

            $li .= '<span>'.$tab['title'].'</span></a>';
            $li .='</li>';

            $tabs[] = $li;
            $panes[] = '<div class="panel'.$active.' entry-content" id="tab_'.$id.'">'.do_shortcode( $tab['content'] ).'</div>';
            $i++;
        }
        if($title) $title = '<h4 class="uppercase text-'.$align.'">'.$title.'</h4>';
        $return = '
        <div class="'.implode(' ', $wrapper_class).'">
            '.$title.'
            <ul class="'.$classes.'">'.implode( "\n", $tabs ).'</ul>
            <div class="tab-panels">'.implode( "\n", $panes ).'</div>
        </div>
        ';
    }

    return $return;
}

/// Tab item
add_action('ux_builder_setup', 'adminz_tab_custom');
function adminz_tab_custom(){
    add_ux_builder_shortcode('adminz_tab_custom', array(
        'type' => 'container',
        'name' => __( 'Tab Panel Custom' ),
        'template' => flatsome_ux_builder_template( 'tab.html' ),
        'info' => '{{ title }}',
        'require' => array( 'adminz_tabgroup_custom' ),
        'hidden' => true,
        'wrap' => false,

        'options' => array(
            'title' => array(
                'type' => 'textfield',
                'heading' => __( 'Title' ),
                'default' => __( 'Tab Title' ),
                'auto_focus' => true,
            ),
            'icon' => array(
                'type'       => 'image',
                'heading'    => 'Image or SVG',
                'default' => '',
            ),
            'icon_color' =>array(
                'type' => 'colorpicker',
                'heading' => __('Icon Color'),
                'alpha' => true,
                'format' => 'hex',
            ),
            'icon_width'   => array(
                'type'      => 'slider',
                'heading'   => 'Icon Width',
                'unit'      => 'px',
                'default'   => 60,
                'max'       => 600,
                'min'       => 20,
                'on_change' => array(
                    'selector' => '.icon-box-img',
                    'style'    => 'width: {{ value }}px',
                ),
            ),
        ),
    ));
}
add_shortcode('adminz_tab_custom', 'adminz_tab_custom_func' );
function adminz_tab_custom_func( $params, $content = null) {
    extract(shortcode_atts(array(
            'title' => '',
            'title_small' => '',
            'icon'=> '',
            'icon_color'=> '',
            'icon_width'=> '60',
    ), $params));

    $x = $GLOBALS['adminz_tab_count'];
    $GLOBALS['adminz_tabs'][$x] = array( 
        'title' => sprintf( $title, $GLOBALS['adminz_tab_count'] ), 
        'content' =>  $content,
        'icon'=>$icon,
        'icon_color'=>$icon_color,
        'icon_width'=>$icon_width
    );
    $GLOBALS['adminz_tab_count']++;
}
