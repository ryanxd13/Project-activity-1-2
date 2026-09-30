<?php
// contact.php - kinukuha ang data sa form at sine-save sa MySQL database

// 1) Database settings (default ng XAMPP)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "lumot_studio";

// 2) Kunin ang data galing sa form (trim = tanggalin ang sobrang space)
$name    = trim($_POST["name"]);
$email   = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

// 3) Kumonekta sa database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    $ok = false;
} else {
    // 4) Prepared statement: ang ? ay placeholder para safe sa SQL injection
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message); // s = string
    $ok = $stmt->execute();                                        // true kapag na-save
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Message Status | Lumot Studio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5 text-center">
    <?php if ($ok) { ?>
      <div class="alert alert-success">
        <h4>Thank you, <?php echo htmlspecialchars($name); ?>!</h4>
        <p class="mb-0">Your message was saved. We will reply soon.</p>
      </div>
    <?php } else { ?>
      <div class="alert alert-danger">
        <h4>Sorry, something went wrong.</h4>
        <p class="mb-0">Your message was not saved. Please try again.</p>
      </div>
    <?php } ?>
    <a href="index.html#contact" class="btn btn-success">Back to Website</a>
  </div>
</body>
</html>
