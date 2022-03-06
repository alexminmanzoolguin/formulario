<?php
session_start();

	include "../conexion.php"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "scripts.php" ?>
	<title> tabla_semanas</title>
</head>
<body>
	<?php include "header.php" ?>
	<section id="container">
		<h1><i class="fas fa-user-friends"></i>TABLA DE SEMANAS</h1>
		<table>
			<tr>
				
				<th>ID</th>
				<th>ARCHIVO</th>
				<th>SEMANA</th>	
			</tr>
			<?php
			include "conexion.php";
			$query= mysqli_query($conection,"SELECT idapunte, archivo, semana FROM apunte ");
			mysqli_close($conection);
			$result= mysqli_num_rows($query);
			if ($result>0) {
				while ($data=mysqli_fetch_array($query)) {
					?>
					<tr>
				<td><?php echo $data['ID'];?></td>
				<td><?php echo $data['archivo']; ?></td>
				<td><?php echo $data['semana']; ?></td>
				
			</tr>

					<?php
				}
			}
			  ?>
			
		</table>

	</section>
	<?php include "footer.php"?>
</body>
</html>