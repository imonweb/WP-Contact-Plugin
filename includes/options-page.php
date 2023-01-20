<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields','create_options_page');

function load_carbon_fields()
{
  \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page()
{
  Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_fields( array(
        Field::make( 'text', 'crb_facebook_url', __( 'Facebook URL' ) ),
        Field::make( 'textarea', 'crb_footer_text', __( 'Footer Text' ) )
    ) );
}