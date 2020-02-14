<?php

function prefix_get_endpoint_phrase($request)
{
    $name = $request->get_param( 'name' );
    $response = array(
        "hello" => $name
    );
    return rest_ensure_response($response);
}

function prefix_register_example_routes()
{
    register_rest_route('hello-world/v1', '/hello/', array(
        'methods' => 'GET',
        'callback' => 'prefix_get_endpoint_phrase',
    ));
}

add_action('rest_api_init', 'prefix_register_example_routes');