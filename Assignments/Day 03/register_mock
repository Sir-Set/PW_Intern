<?php
$name = "";
$email = "";
$conn = new mysqli("localhost", "root", "root", "mock_registration_db", 3308);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";

    $stmt = $conn->prepare("INSERT INTO registrations (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Tashu" required>
    <br><br>

    <input type="email" name="email" placeholder="tashu@example.com" required>
    <br><br>

    <button type="submit">Register</button>
</form>

<?php
if ($name != "" && $email != "") {
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>

</body>
</html>
