$(function () {
  // Show comment popup
  $(document).on("click", ".comment", function () {
    var tweet_id = $(this).data("tweet");
    var user_id = $(this).data("user");

    $.post(
      "core/ajax/comment.php",
      { showPopup: tweet_id, user_id: user_id },
      function (data) {
        $(".popupComment").html(data);
        $(".retweet-popup").show();
      }
    );
  });

  // Handle comment submission
  $(document).on("click", ".comment-it", function () {
    var tweet_id = $(this).data("tweet");
    var user_id = $(this).data("user");
    var comment = $(".retweet-msg").val();

    $.post(
      "core/ajax/comment.php",
      { qoute: tweet_id, user_id: user_id, comment: comment },
      function (data) {
        $(".retweet-popup").hide();
        $(".comments").html(data);
        location.reload();
      }
    );
  });

  // Show reply popup
  $(document).on("click", ".reply", function () {
    var comment_id = $(this).data("tweet");
    var user_id = $(this).data("user");

    $.post(
      "core/ajax/comment.php",
      { showReply: comment_id, user_id: user_id },
      function (data) {
        $(".popupComment").html(data);
        $(".retweet-popup").show();
      }
    );
  });

  // Handle reply submission
  $(document).on("click", ".reply-it", function () {
    var comment_id = $(this).data("tweet");
    var user_id = $(this).data("user");
    var reply = $(".retweet-msg").val();

    $.post(
      "core/ajax/comment.php",
      { reply: comment_id, user_id: user_id, comment: reply },
      function (data) {
        $(".retweet-popup").hide();
        $(".comments").html(data);
        location.reload();
      }
    );
  });

  // Close popup
  $(document).on("click", ".close-retweet-popup", function () {
    $(".retweet-popup").hide();
  });
});
