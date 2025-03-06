<?php
require_once '../config/database.php';

function registerUser($sponsor_id, $name, $email, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $position = getPlacement($sponsor_id);
    
    if ($position !== false) {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, sponsor_id, position) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $name, $email, $hashed_password, $sponsor_id, $position);
        if ($stmt->execute()) {
            echo "User registered successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Sponsor has no available position.";
    }
}

function getPlacement($sponsor_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM users WHERE sponsor_id = ?");
    $stmt->bind_param("i", $sponsor_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if ($row['total'] < 2) {
        return $row['total'] == 0 ? 'left' : 'right';
    }
    return false;
}
?>