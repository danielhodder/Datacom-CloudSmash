<?php
if (!$_POST['username'] || !$_POST['password']) {
	header('Location: index.php');
	die;
}

require 'mysql.php';

if ($result = $mysql->query($query = <<<SQL
	select * 
	from user 
	where username = '{$mysql->real_escape_string($_POST['username'])}' and
	      password = '{$mysql->real_escape_string(sha1($_POST['password']))}'
SQL
)) {
	session_start();

	$_SESSION['username'] = $result->fetch_assoc()['username'];
	header('Location: index.php');
} else {
	header("Location: login.php?error");
}