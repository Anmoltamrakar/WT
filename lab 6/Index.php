<?php
require_once("Company.php");
require_once("Employee.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";
$gces->address = "Lamachour";


array_push($gces->employees, new Employee("Chris", "lekhnath"));
array_push($gces->employees, new Employee("Michal", "baglung"));
array_push($gces->employees, new Employee("Akon", "pokhara"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Details in table</title>
</head>
<body>
	<h1>Company name: <?=$gces->name?></h1>
	<h1>Address: <?=$gces->address?></h1>
	<h1>No of employees :<?=count($gces->employees);?></h1>
	<table border="1px">
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<tr>
			<?php foreach ($gces->employees as $employee) {
			 ?>
			 <tr>
			 	<td><?=$employee->name;?></td>
			 	<td><?=$employee->address;?></td>
			</tr>	
			
		<?php }?>
		</tr>


	</table>

</body>
</html>