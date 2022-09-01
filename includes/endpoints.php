<?php	

add_action( 'rest_api_init', 'register_custom_endpoints' );

function register_custom_endpoints() {
    register_rest_field( 
    	'post', 
    	'dummy_response', 
    	array(
        'get_callback' => 'list_of_speakers',
        'schema'          => null,
    ) );

   register_rest_route( 'jinjawordcamp/v1', 'speakers', array(
        'methods' => 'POST',
        'callback' =>  'plugin_name_route_api',
        'permission_callback' => function() { return ''; }
  ) );
}

function list_of_speakers( $object ) {
    $speakers = array(
    	'Imokol Faith Ruth'
    );
    return $speakers;
}

function jinjawordcamp_callback( $request ){

	return json_encode(["apis-and-webhooks" => "Imokol Faith Ruth"]);

}