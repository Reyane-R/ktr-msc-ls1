<?php 
include('tables.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$username = $n['name'];
			$ = $n['company'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Business cards</title>
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

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>company</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['company']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['tel']; ?></td>
			<td>
				<a href="cards.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="tables.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	

<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
	<form method="post" action="tables.php" >
		<div class="input-group">
			<label>username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>company</label>
			<input type="text" name="company" value="">
        </div>
        <div class="input-group">
			<label>email</label>
			<input type="email" name="email" value="">
        </div>
        
        
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>