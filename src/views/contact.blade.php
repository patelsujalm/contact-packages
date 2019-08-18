<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<form method="post" action="{{ route('contactprocess') }}">
		<table border="1">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="email"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea name="message" placeholder="message"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>	
	</form>
</body>
</html>