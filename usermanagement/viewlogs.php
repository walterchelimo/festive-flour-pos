<?php include('../connect.php');

	if(isset($_POST["id"])){  
		$output = '';
		$id = $_POST['id'];  
	  	$query = "SELECT * FROM logs WHERE id = '$id'";  
	  	$result = mysqli_query($conn, $query);  

	  	while($row = mysqli_fetch_array($result)){
	  		echo "<h1 class='d-flex'>".$row['FirstName']."</h1>";
			$output .= '  
	  			<div class="table-responsive">  
		   		<table class="w-75">';
		   	$output .= '
		   		<tr>  
					 <td width="50%"><label>Activity :</label></td>  
					 <td width="50%"><strong>'.$row["Role"].'</strong></td>  
				</tr>
				<tr>  
					 <td width="50%"><label>Date :</label></td>  
					 <td width="50%"><strong>'.date('d M Y, g:i A', strtotime($row['LogTime'])).'</strong></td>  
				</tr>';  
	  }  
	  $output .= '  
		   </table>  
	  		</div>  
	  ';
	  echo $output;  
 	}  
?>