<?php 
include_once('connect.php'); 
$query="select * from admin"; 
// $result=mysqli_query($conn,$query); 
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th name="name"> name </th> 
			  <th name="email"> email </th> 
			  <th name="subject"> subject </th> 
			  <th name="message"> massage </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result))
		{ 
		?> 
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['subject']; ?></td> 
		<td><?php echo $rows['massage']; ?></td> 
		</tr> 
        <?php 
    } 
        ?> 

	</table> 
	</body> 
	</html>