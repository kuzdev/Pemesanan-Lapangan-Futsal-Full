<?php
if(isset($_POST["subject"]))
{
include("conn.php");
$subject = mysql_real_escape_string( $_POST["subject"]);
$comment = mysql_real_escape_string( $_POST["comment"]);
$query = "INSERT INTO comments(comment_subject, comment_text)VALUES ('$subject', '$comment')";
mysql_query( $query);
}
?>