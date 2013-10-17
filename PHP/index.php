<?php 

session_start();

if (!array_key_exists('username', $_SESSION)):
	header('Location: login.php');
	die;
endif;
?><!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>

		<?php require 'mysql.php'; ?>
	</head>

	<body>
		<h1>Users</h1>

		<p>Here are the users of the system</p>

		<a href="logout.php">Logout</a>
		
		<ul>
			<?php if ($result = $mysql->query('select username from user')): ?>
				<?php foreach ($result->fetch_assoc() as $user): ?>
					<li><?= $user ?></li>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>

		<?php require 'debug.php' ?>
	</body>
</html>