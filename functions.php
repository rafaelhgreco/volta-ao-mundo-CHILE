<?php
require_once 'banco/db.php';

function register_user($username, $password) {
    global $pdo;
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
    $stmt->execute(['username' => $username, 'password' => $hash]);
}

function login_user($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return $user['id'];
    }
    return false;
}

function post_comment($user_id, $content) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO comments (user_id, content) VALUES (:user_id, :content)');
    $stmt->execute(['user_id' => $user_id, 'content' => $content]);
}

function get_comments($approved = true) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE approved = :approved');
    $stmt->execute(['approved' => $approved]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function approve_comment($comment_id, $approve) {
    global $pdo;
    $stmt = $pdo->prepare('UPDATE comments SET approved = :approved WHERE id = :id');
    $stmt->execute(['approved' => $approve, 'id' => $comment_id]);
}
?>
