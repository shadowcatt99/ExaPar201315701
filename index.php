<!DOCTYPE html>

<html>
<head>
  <title>PC1 - Albin</title>
 
 <body>
 <div name="top" align="center">
 	<img src="images/header.png" width="1000" />
 </div>
 
 <div name="middle" align="center">

 <table>
 <td>
 	<tr> <h2>For data scientists</h2> </tr>
 	<tr>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from ad_bb6ddb2f34daf52.servicios where codigo_servicio=0001 and codigo_servicio=0002 and codigo_servicio=0003";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
							
			<?php
			while($row=$result->fetch_assoc()){
				?>
					
				<tr>
					<!--<td><?php echo $row['codigo_servicio']?></td>-->
					<td><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td><?php echo $row['nombre_servicio']?> <br> <?php echo $row['descripcion_servicio']?></td>
					
				</tr>
				
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
</td>
<td>
	<tr>For IT professionals</tr>
	<tr>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from ad_bb6ddb2f34daf52.servicios where codigo_servicio=0004 and codigo_servicio=0005 and codigo_servicio=0006";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
							
			<?php
			while($row=$result->fetch_assoc()){
				?>
					
				<tr>
					<!--<td><?php echo $row['codigo_servicio']?></td>-->
					<td><img src="<?php echo $row['imagen_servicio']?>"/></td>
					<td><?php echo $row['nombre_servicio']?> <br> <?php echo $row['descripcion_servicio']?></td>
					
				</tr>
				
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
</td>

	</table>
	 
	 
</div>
 <div name="bottom" align="center">
 	<img src="images/bottom.png" width="1000"/>
 </div>
  
 </body>
</html>
