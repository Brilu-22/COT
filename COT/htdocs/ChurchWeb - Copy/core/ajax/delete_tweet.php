<?php
// delete_tweet.php

session_start();
require 'database.php'; // Ensure you include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tweet_id']) && isset($_SESSION['user_id'])) {
        $tweet_id = $_POST['tweet_id'];
        $user_id = $_SESSION['user_id'];

        // Ensure to use prepared statements to avoid SQL injection
        $stmt = $conn->prepare('DELETE FROM tweets WHERE id = ? AND user_id = ?');
        $stmt->bind_param('ii', $tweet_id, $user_id);

        if ($stmt->execute()) {
            header('Location: your_redirect_page.php'); // Redirect after deletion
            exit();
        } else {
            echo 'Error deleting tweet.';
        }
    }
}
?>
