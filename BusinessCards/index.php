<?php 
    require "header.php";    
?>

    <main>
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<p class="text-center mt-4">You are logged in!</p>';
            }
        ?>
        <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>username</th>
			<th>company</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['company']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="tables.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="tables.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>company</label>
		<input type="text" name="company" value="<?php echo $company; ?>">
    </div>
    <div class="input-group">
		<label>telephone</label>
		<input type="text" name="company" value="<?php echo $tel; ?>">
    </div>
    <div class="input-group">
		<label>email</label>
		<input type="text" name="company" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" username="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" username="save" >Save</button>
		<?php endif ?>
	</div>
    </main>

<?php
    require "footer.php";
?>