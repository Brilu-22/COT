<?php
	include '../init.php'; 
	
	if (isset($_POST['like']) && !empty($_POST['like'])) {
		$user_id = $_SESSION['user_id'];
		$tweet_id = $_POST['like'];
		
		$for_user = Tweet::getData($tweet_id)->user_id;
		$get_id = $_POST['user_id'];
		date_default_timezone_set("Africa/Cairo");
	
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
	
			Tweet::create('notifications', $data_notify);
		} 
	
		// Create a like without specifying the id field
		User::create('likes', ['user_id' => $user_id, 'post_id' => $tweet_id]);
	
		echo '<div class="tmp d-none">' . Tweet::countLikes($tweet_id) . '</div>';
	}

    if(isset($_POST['file'])){
        $getFromT->uploadImage($_POST['files']);
    } 


?>