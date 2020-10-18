<?php
/*-----------------------------------------------------------------------------------*/
/* Advanced Custom Fields plugin functions
/*-----------------------------------------------------------------------------------*/

function pds_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}
add_filter( 'acf/settings/save_json', 'pds_json_save_point' );
