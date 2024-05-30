<?php
require_once 'functions.php';
session_start();

// Implement a simple admin check
if ($_SESSION['user_id'] != 1) {
    die('Access denied');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment_id = $_POST['comment_id'];
    $approve = $_POST['approve'] == 'true' ? true : false;
    approve_comment($comment_id, $approve);
}

$comments = get_comments(false);
?>

<h2>Pending Comments</h2>
<ul>
    <?php foreach ($comments as $comment): ?>
        <li>
            <?php echo htmlspecialchars($comment['content']); ?>
            <form method="post" action="admin.php">
                <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                <button type="submit" name="approve" value="true">Approve</button>
                <button type="submit" name="approve" value="false">Reject</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
