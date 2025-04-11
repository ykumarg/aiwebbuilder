<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $data = "Name: $name\nEmail: $email\nMessage: $message\nDate: " . date('Y-m-d H:i:s') . "\n\n";
    $result = file_put_contents('messages.txt', $data, FILE_APPEND);
    
    if ($result === false) {
        http_response_code(500);
        echo json_encode(['success' => false, 'error' => 'Failed to save message']);
    } else {
        echo json_encode(['success' => true]);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
}