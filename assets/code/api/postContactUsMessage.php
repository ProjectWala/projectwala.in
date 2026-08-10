<?php

// Fetch raw POST values safely
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$errors = [];

/* -----------------------------------------
   REGEX VALIDATION
------------------------------------------*/

// NAME: letters, space, dots, hyphens — 2–50 chars
if (!preg_match("/^[a-zA-Z\s.\-]{2,50}$/", $name)) {
    $errors[] = "Invalid name format";
}

// EMAIL: strict RFC-like pattern
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address";
}

// SUBJECT: letters, numbers, spaces, punctuation allowed
if (!preg_match("/^[a-zA-Z0-9\s.,!?()\-]{2,100}$/", $subject)) {
    $errors[] = "Invalid subject format";
}

// MESSAGE: allow safe characters, remove tags
$message = strip_tags($message);

if (strlen($message) < 5) {
    $errors[] = "Message too short";
}

/* -----------------------------------------
   BLOCK EMAIL HEADER INJECTION
------------------------------------------*/

$unsafe = ["\r", "\n", "%0a", "%0d"];

foreach ($unsafe as $bad) {
    if (stripos($email, $bad) !== false) {
        $errors[] = "Header injection attempt blocked";
    }
}

/* -----------------------------------------
   STOP IF ERRORS
------------------------------------------*/

if (!empty($errors)) {
    echo json_encode([
        "status" => "error",
        "errors" => $errors
    ]);
    exit;
}

/* -----------------------------------------
   SANITIZED FINAL OUTPUT
------------------------------------------*/

$clean = [
    "name" => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
    "email" => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    "subject" => htmlspecialchars($subject, ENT_QUOTES, 'UTF-8'),
    "message" => htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
];


session_start();
include_once('../Database/DBMySql.php');
$db = new DBMySql;
$conn = $db->GetActiveConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepared statement
$stmt = $conn->prepare("
    INSERT INTO contact_messages (Name, Email, Subject, Message)
    VALUES (?, ?, ?, ?)
");

$stmt->bind_param("ssss", $clean['name'], $clean['email'], $clean['subject'], $clean['message']);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Database error: " . $stmt->error;
}

$stmt->close();
$conn->close();


echo json_encode([
    "status" => "success",
    "data" => $clean
]);

?>
