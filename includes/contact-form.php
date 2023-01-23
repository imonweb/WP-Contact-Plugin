<?php 

add_shortcode( 'contact', 'show_contact_form' );

add_action( 'rest_api_init', 'create_rest_endpoint' );

function show_contact_form() 
{
  // return 'our form should load';
  include MY_PLUGIN_PATH . '/includes/templates/contact-form.php';
}

function create_rest_endpoint()
{
  register_rest_route( 'v2/contact-form', 'submit', array(
    'methods'   =>  'POST',
    'callback'  =>  'handle_enquiry',
    'permission_callback' => '__return_true'
    // 'permission_callback' => function() { return true; }
  ) );
}

function handle_enquiry($data)
{
  $params = $data->get_params();

  ray($params);
}