<?php
$filename = htmlspecialchars($_POST['filename']);
unlink('post/' . $filename);
echo '<p>' . $filename . ' has been deleted</p>';
header('location: index.php');
?>