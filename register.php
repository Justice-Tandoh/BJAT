<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $referral_code = $_POST['referral_code'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, referral_code) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $referral_code);

    if ($stmt->execute()) {
        echo json_encode(["message" => "User registered successfully"]);
    } else {
        echo json_encode(["error" => "Registration failed"]);
    }

    $stmt->close();
}
$conn->close();
?>
