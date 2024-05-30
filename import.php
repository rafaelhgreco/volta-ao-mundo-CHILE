<?php
require_once 'functions.php';
session_start();

// Implement a simple admin check
if ($_SESSION['user_id'] != 1) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['json_file'])) {
    $json_data = file_get_contents($_FILES['json_file']['tmp_name']);
    $comments = json_decode($json_data, true);

    foreach ($comments as $comment) {
        post_comment($comment['user_id'], $comment['content']);
    }
}
?>

<form method="post" enctype="multipart/form-data" action="import.php">
    <input type="file" name="json_file" accept="application/json" required>
    <button type="submit">Import Comments</button>
</form>
