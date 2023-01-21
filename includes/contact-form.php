<?php 

add_shortcode( 'contact', 'show_contact_form' );

function show_contact_form() 
{
  // return 'our form should load';
  include MY_PLUGIN_PATH . '/includes/templates/contact-form.php';
}