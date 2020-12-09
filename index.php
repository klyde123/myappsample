<?php  include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="discription" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>

</body>
</html>