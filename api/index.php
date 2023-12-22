<?php
header('Content-Type: application/json');

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $response = array(
        'message' => 'Hello world '
    );

    echo json_encode($response);
} else {
    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
    //echo 
}

?>

