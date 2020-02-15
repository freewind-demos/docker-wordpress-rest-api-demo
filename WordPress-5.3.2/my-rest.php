<?php


add_action('rest_api_init', function () {
    register_rest_route('api/v1', '/hello/', array(
        'methods' => 'GET',
        'callback' => function ($request) {
            $name = $request->get_param('name');
            $response = array(
                "GET-hello" => $name
            );
            return rest_ensure_response($response);
        },
    ));

    register_rest_route('api/v1', '/hello/', array(
        'methods' => 'PUT',
        'callback' => function ($request) {
            $name = $request->get_param('name');
            $response = array(
                "PUT-hello" => $name
            );
            return rest_ensure_response($response);
        },
    ));
});