<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee List View</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: auto;
  width: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  background-color: :#f9f2ec;
}
.container{
  max-width: auto;
  width: auto;
  background-color:#f9f2ec;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}

table tr:hover{
			cursor:pointer;
			
}
table thead{
			background:#f2e6d9;
			letter-spacing: 1px;
}
table thead tr th{
			color: #996633;
		}		
</style>


	<script>
		$(document).ready(function(){
			var id = $(this).attr('row_id');
			window.open(" " + id);
		});
	</script>


</head>

<body>
<div class="container">
	<h2 style="margin-top: 30px; margin-bottom: 20px;color:#bf8040;">Employees List</h2>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<t>
				<th> Employee Number</th>
				<th> Employee Name</th>
				<th> Date of Birth</th>
				<th> Nationality</th>
				<th> Civil Status </th>
				<th> Department</th>
				<th> Employee Status</th>
				</t>
			</tr>
			<?php
			$conn = $conn = mysqli_connect("localhost","root","","employeelist");
			$sql =  "SELECT * FROM employeelist";
			$result = $conn->query($sql);

			if ($result->num_rows > 0){
				while ($rows = $result-> fetch_assoc()){
					echo '<tr>
							<td>'.$rows['employee Number'].'</td>
							<td>'.$rows['fullname'].'</td>
							<td>'.$rows['birth'].'</td>
							<td>'.$rows['nationality'].'</td>
							<td>'.$rows['civil'].'</td>
							<td>'.$rows['department'].'</td>
							<td>'.$rows['employeeStatus'].'</td>
					
					
					</tr>'
					
					;}
			}
			else{
				echo "No Result";
			}
		
			
		?>	
		</thead>
		<tbody>
		
			</tbody>
		</table>
	</div>
</body>
</html>