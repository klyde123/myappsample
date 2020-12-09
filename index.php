<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Discription</label>
			<input type="text" name="discription" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>

</body>
</html>