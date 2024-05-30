<?php
require_once 'functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    post_comment($_SESSION['user_id'], $content);
}
?>

<form method="post" action="comment.php">
    <textarea name="content" placeholder="Write your comment..." required></textarea>
    <button type="submit">Post Comment</button>
</form>
