<?php
include '../init.php';

$user_id = $_SESSION['user_id'];

// Check if the like key exists in the POST request
if (isset($_POST['like']) && !empty($_POST['like'])) {
    $tweet_id = $_POST['like'];

    // Retrieve the tweet data
    $tweetData = Tweet::getData($tweet_id);

    // Check if the tweet data is valid
    if ($tweetData !== false) {
        $for_user = $tweetData->user_id;

        // Notify if the like is not from the original poster
        if ($for_user != $user_id) {
            $data_notify = [
                'notify_for' => $for_user,
                'notify_from' => $user_id,
                'target' => $tweet_id,
                'type' => 'like',
                'time' => date("Y-m-d H:i:s"),
                'count' => '0',
                'status' => '0'
            ];

            // Insert notification
            Tweet::create('notifications', $data_notify);
        }

        // Insert like without specifying the primary key
        User::create('likes', ['user_id' => $user_id, 'post_id' => $tweet_id]);

        // Return the updated likes count
        echo '<div class="tmp d-none">' . Tweet::countLikes($tweet_id) . '</div>';
    } else {
        // Handle the case where the tweet does not exist
        error_log("Tweet with ID $tweet_id not found.");
        echo json_encode(['error' => 'Tweet not found.']);
        exit;
    }
} else {
    // Handle the case where the like key is not set
    error_log("Like key is not set in the POST request. Data: " . print_r($_POST, true));
    echo json_encode(['error' => 'Like key is missing.']);
    exit;
}
?>