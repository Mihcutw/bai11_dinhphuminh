<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Chào mừng, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Đây là dashboard của bạn.</p>
        <form method="post" action="logout.php">
            <button type="submit">Đăng xuất</button>
        </form>
    </div>
</body>
</html>