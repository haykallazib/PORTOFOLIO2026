<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $status = 'success';
        } else {
            $status = 'error';
        }
        $stmt->close();
    } else {
        $status = 'error';
    }

    $conn->close();
    header("Location: index.php?status=$status");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>