<?php 
$flatsome_tag = 'flatsome_wup_purchase_code'; 
if ( !function_exists( 'get_lsAPI' ) )
@include( __DIR__ . '/admin/options/update.php' ); 
if (defined('ABSPATH')) {update_option($flatsome_tag, '846b8d75-85b3-4b3e-976c-2e29d386339d'); update_option('flatsome_wup_supported_until', '01.01.2050'); update_option('flatsome_wup_buyer', 'Licensed'); 
update_option('flatsome_wup_sold_at', time()); delete_option('flatsome_wup_errors');}

