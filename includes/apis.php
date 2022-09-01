<?php	

/**
 * Register dummy api data menu page
 */
function dummy_products() {
	add_menu_page(
		__( 'Dummy API Settings', 'query-apis' ),
		'Dummy API',
		'manage_options',
		'api-test.php',
		'get_dummy_api_data',
		'dashicons-testimonial',
		16
	);
}

add_action( 'admin_menu', 'dummy_products' );

function get_dummy_api_data() {
    $url = 'https://dummyjson.com/products?skip=0&limit=10';
    
    $arguments = array(
        'method' => 'GET',
                'Content-Type' 	=> 'application/json',
			'timeout'     => 60,
    );

	$response = wp_remote_get( $url, $arguments );
	if ( is_wp_error( $response ) ) {
		$error_message = $response->get_error_message();
		return "Something went wrong: $error_message";
	} else {
		$res = wp_remote_retrieve_body($response);
		$res = json_decode($res);
		echo '<table><tr><th>title</th><th>description</th><th>price</th></tr>';
		foreach ($res->products as $key => $value) {
			echo '<tr><td>' . $value->title . '</td><td>' . $value->description . '</td><td>' . $value->price . '</td></tr>';
		}
	}
}