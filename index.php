<!DOCTYPE html>
<html>
<head> 
	<title>Login</title>
		<style>
		h1{
			font-size:32pt;
			border-bottom: 1px solid blue;
			color: red;
			}
		</style>
</head>
<body>

<h1> ログイン </h1>

<form action = "chat.php">
	<input type = "text" name = "uname" value="<?= $_COOKIE['uname'] ?>">
	<button>ログイン</button>
</form>

</body>
</html>
