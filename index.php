<?php 
/**
 * Plugin Name: Z Admin
 * Description: More settings for your site
 * Plugin URI: https://test.maritimevilla.com
 * Author: Quyle91
 * Author URI: https://quyle91.github.io/
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: hello-admin
 * Domain Path: domain/path
 */



if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if(!function_exists('acf_add_options_page')){
    add_action( 'admin_notices', function(){
        ?>
        <div class="notice error-dismissible">
            <p>
                <strong>ACF Pro plugin is required for Z Admin</strong>
            </p>
        </div>
        <?php
        
        
    });
    return;
}



define('ZADMIN_DIR',          plugin_dir_path( __FILE__ ));
define('ZADMIN_BASENAME',     plugin_basename(__FILE__));
define('ZADMIN_URL',          plugin_dir_url(__FILE__));



require ZADMIN_DIR."/inc/class-zadmin.php";
require ZADMIN_DIR."/inc/class-zadmin-fields.php";
require ZADMIN_DIR."/inc/class-zadmin-wordpress.php";
require ZADMIN_DIR."/inc/class-zadmin-enqueue.php";
require ZADMIN_DIR."/inc/class-zadmin-quickcontact.php";
require ZADMIN_DIR."/inc/class-zadmin-smtpmailer.php";
require ZADMIN_DIR."/inc/class-zadmin-security.php";
require ZADMIN_DIR."/inc/class-zadmin-icons.php";
require ZADMIN_DIR."/inc/class-zadmin-tools.php";
require ZADMIN_DIR."/inc/class-zadmin-leechdata.php";
require ZADMIN_DIR."/inc/class-zadmin-acf.php";
require ZADMIN_DIR."/inc/class-zadmin-woocommerce.php";
require ZADMIN_DIR."/inc/class-zadmin-flatsome.php";
require ZADMIN_DIR."/inc/class-zadmin-elementor.php";