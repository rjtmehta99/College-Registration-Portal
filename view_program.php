<?php
	session_start(); 
	#require_once "config.php";

	$link=mysqli_connect('localhost', 'root', '', 'webtech');

	if(mysqli_connect_error())
	{
		die ("Error");
	}


$query = "SELECT * FROM personaldetail ORDER BY program";

$result = mysqli_query($link, $query);
#{
#	while($row = mysqli_fetch_array($result))
#	{
#		echo '<pre>';
#		var_export($row); 
#		echo '</pre>';
#		echo "\n\n";
#--	}
#}

?>

<html>
<head>
	<title>View By Program</title>
	<style type="text/css">
		body 
		{
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		
		table 
		{
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 
		{
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td 
		{
			transition: all .5s;
		}
		
		/* Table */
		.data-table 
		{
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td 
		{
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption 
		{
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th 
		{
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td 
		{
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">View By Program</caption>
		<thead>
			<tr>
				<th>Serial Number</th>
				<th>Student Name</th>
				<th>Registration Number</th>
				<th>Father's Name</th>
				<th>Mother's Name</th>
				<th>Self Number</th>
				<th>Parent Number</th>
				<th>Program</th>
				<th>Branch</th>
				<th>Semester</th>
				<th>Section</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no= 1;
		
		while ($row = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['studentName'].'</td>
					<td>'.$row['registrationNumber'].'</td>
					<td>'.$row['fatherName'].'</td>
					<td>'.$row['motherName'].'</td>
					<td>'.$row['selfNumber'].'</td>
					<td>'.$row['parentNumber'].'</td>
					<td>'.$row['program'].'</td>
					<td>'.$row['branch'].'</td>
					<td>'.$row['semester'].'</td>
					<td>'.$row['section'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
</body>
</html>