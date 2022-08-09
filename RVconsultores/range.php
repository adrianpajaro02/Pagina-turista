<?php
	require'conn.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `registros` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['nombre_completo']?></td>
		<td><?php echo $fetch['cedula']?></td>
		<td><?php echo $fetch['celular']?></td>
		<td><?php echo $fetch['saldo_en_mora']?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Registros no Existen</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `registros`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['nombre_completo']?></td>
		<td><?php echo $fetch['cedula']?></td>
		<td><?php echo $fetch['monto']?></td>
		<td><?php echo $fetch['saldo_en_mora']?></td>
	</tr>
<?php
		}
	}
?>
