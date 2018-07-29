<!DOCTYPE html>
<html>
<head>
<title>mentor design student's list</title>
</head>
<body bgcolor="#1ddced">
			<table bgcolor="#fff" align="center" border="5" width="400" height="300" cellspacing="5" cellpadding="3">
				<tr>
					<th align='center' colspan='3'>Student's List</th>
				<tr valign="top" align="center">
					<td width="50" height="400" >
						<a>SL No</a>
					</td>
					<td width="200">
						<a>Student's Names</a>
					</td>
					<td >
						<a>USNs</a>
					</td>
					<td> 
					      <a> Branch </a>
					  </td>
				</tr>
			<tr>
				<td style="border: none;">
					<a href="http://localhost/DBMS/login.html">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Back
					</button></a>
				</td>
				<td style="border: none;">
				<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Select</button>
				</td>
				<td style="border: none;">
					<a href="http://localhost/DBMS/chatbox-for-mentor.html">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Next
					</button></a>
				</td>
			</tr>
			</table>
		</body>
</html>
<?php
$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'aamv';
	$dbname = 'mentosrmodule';
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn)
	{
		die('Could not connect:'.mysql_error());
	}
	
	?>


