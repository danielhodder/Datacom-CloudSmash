<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<h1>Login</h1>

		<?php if (array_key_exists('error', $_GET)): ?>
			<h2>Invalid login.</h2>
		<?php endif; ?>
		
		<form method="post" action="login_post.php">
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Login</button>
		</form>

		<?php require 'debug.php'; ?>
	</body>
</html>