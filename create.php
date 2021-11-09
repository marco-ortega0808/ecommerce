<?php

require 'vendor/autoload.php';

// This is a sample test API key.
\Stripe\Stripe::setApiKey('sk_test_51JpwJSIA690oC2KUkoYVbdEBLUBNcWAgKl64P6CljHxVWuVWlNDIzDfpGHlVIZtRzqo5ynCWPtqysDxQTmM4bf6K00KSJczk0s');


header('Content-Type: application/json');

try {
    // retrieve JSON from POST body
    $jsonStr = file_get_contents('php://input');
    $jsonObj = json_decode($jsonStr);

    // Create a PaymentIntent with amount and currency
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => 775099,
        'currency' => 'mxn',
        'payment_method_types' => ['card'],
    ]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}