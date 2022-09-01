<?php

add_action( 'save_post', 'send_data_to_webhook', 10, 3 );

function send_data_to_webhook( $post_id, $post, $update ) {

	$body = $post;

	if ( $body->status == 'auto-draft' || $body->status === 'draft' ) {
		return;
	}

	if ( '' != WORDCAMP_API_WEBHOOK_URL ) {
		$response = wp_remote_request(
			WORDCAMP_API_WEBHOOK_URL,
			array(
				'method' => 'POST',
				'body'   => $body,
				'headers' => array(
					'accept' => 'application/json',
				),
			)
		);
	}	

}