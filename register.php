header("Access-Control-Allow-Headers: *");
<?php
include 'config.php';

// Allow cross-origin requests if needed
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $time = $_POST['time'] ?? '';

    if (!empty($name) && !empty($age) && !empty($phone) && !empty($time)) {
        $stmt = $conn->prepare("INSERT INTO registrations (name, age, phone, time) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $name, $age, $phone, $time);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "error: missing fields";
    }
}
?>
