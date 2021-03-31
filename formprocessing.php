<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>
	<form name="test" action="check.php" method="post">
		<label>Name: </label><br />
		<input type="text" name="name" placeholder="Name" /><br />
		<label>Email: </label><br />
		<input type="text" name="email" placeholder="Email" /><br />
		<label>Message: </label><br />
		<textarea name="message" cols="40" rows="10"></textarea>
		<br />
		<input type="submit" name="done" value="Done" />

	</form>
</body>
</html>
