<?php
//Query to show all posts and the creator of post
$sql = "SELECT posts.*, posts.id as post_id, users.username, users.id FROM posts JOIN users ON posts.createdBy = users.id";

//Query to show all the comments
$sql_comment = "SELECT comment FROM comments WHERE postId = pid";

echo $sql;
echo "<br>";
echo $sql_comment;
?>