<?php

include 'db.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

 ?>

<!DOCTYPE>
<html lang="en"> 
<head> <title>Test </title> </head>

<body> 
	<form action="add_task.php" method="POST" >
		<input type="text" name="task" required placeholder="Enter a task">
		<button type="submit"> Add task </button>
	</form>
	<ul> 
		<?php while($row = $result->fetch_assoc()): ?>
			<li> 
				<span> <?php echo $row['task']; ?> </span>
				<a href="update_task.php?id=<?php echo $row['id']; ?>"> Update </a>
				<a href="delete_task.php?id=<?php echo $row['id']; ?>"> Delete </a>	
			</li>
		<?php endwhile; ?>
	</ul>
</body>



</html>
