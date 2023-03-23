<?php 
function zadmin_convert_fields_array($array){
    $return = [];
    foreach ((array)$array as $key => $value) {
        $return[$value] = $value;
    }
    return $return;
}

function zadmin_server_info_settings() {
    // clone from smtp mailer
    $server_info = '';
    $server_info .= sprintf('OS: %s%s', php_uname(), PHP_EOL);
    $server_info .= sprintf('PHP version: %s%s', PHP_VERSION, PHP_EOL);
    $server_info .= sprintf('WordPress version: %s%s', get_bloginfo('version'), PHP_EOL);
    $server_info .= sprintf('WordPress multisite: %s%s', (is_multisite() ? 'Yes' : 'No'), PHP_EOL);
    $openssl_status = 'Available';
    $openssl_text = '';
    if(!extension_loaded('openssl') && !defined('OPENSSL_ALGO_SHA1')){
        $openssl_status = 'Not available';
        $openssl_text = ' (openssl extension is required in order to use any kind of encryption like TLS or SSL)';
    }      
    $server_info .= sprintf('openssl: %s%s%s', $openssl_status, $openssl_text, PHP_EOL);
    $server_info .= sprintf('allow_url_fopen: %s%s', (ini_get('allow_url_fopen') ? 'Enabled' : 'Disabled'), PHP_EOL);
    $stream_socket_client_status = 'Not Available';
    $fsockopen_status = 'Not Available';
    $socket_enabled = false;
    if(function_exists('stream_socket_client')){
        $stream_socket_client_status = 'Available';
        $socket_enabled = true;
    }
    if(function_exists('fsockopen')){
        $fsockopen_status = 'Available';
        $socket_enabled = true;
    }
    $socket_text = '';
    if(!$socket_enabled){
        $socket_text = ' (In order to make a SMTP connection your server needs to have either stream_socket_client or fsockopen)';
    }
    $server_info .= sprintf('stream_socket_client: %s%s', $stream_socket_client_status, PHP_EOL);
    $server_info .= sprintf('fsockopen: %s%s%s', $fsockopen_status, $socket_text, PHP_EOL);
    return $server_info;
}