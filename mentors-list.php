<?php
				$dbhost = 'localhost:3306';
				$dbuser = 'root';
				$dbpass = 'aamv';
				$dbname = 'mentorsmodule';
				$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				if(!$conn)
				{
					die('Could not connect:'.mysql_error());
				}

				 $query="SELECT * FROM mentor";

				 //mysqli_select_db('mentormodule');

				 $retval = $conn->query($query) or die($conn->error.__LINE__);

				 // if(!retval)
				 // {
				 // 	die('could not get data:' .mysqli_error());

				 // }
				// while ($row = $retval->fetch_assoc()) {

				// 	echo "MID :{$row['M_ID']} <br>".	
				// 	"MNAME :{$row['MNAME']} <br>".
				// 	"BRANCH :{$row['BRANCH']} <br>";
				// }
//echo " .$row[mentor name]. .$row[branch].";
					// echo "fetched data successfully \n";
					// mysqli_close($conn);

				?>
<!DOCTYPE html>
<html>
<head>
<title>admin design mentor's list</title>
<style type="text/css">
	td{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	table{
		width: 80%;
		margin: 0 auto;
	}
</style>
</head>
<body bgcolor="#1ddced">
	<form method="post">
	</form>
			<!-- <table bgcolor="#fff" align="center" border="0" width="700" height="500" cellspacing="5" cellpadding="4" style="border: 2px solid black;"> -->

			<table bgcolor="#fff" style="border: 2px solid black;">
				<tr>
					<th align='center' height="20" colspan='4'>Mentor's List</th>
				<!-- <tr align="center">
					 <td width="50" height="400" valign="top">
					<td>
						<a>SL No</a>
					</td>
					<td valign="top">
						<a>Mentor's Names</a>
					</td>
					<td valign="top">
						<a align="top">Branch</a>
					</td>
					<td valign="top">
						<a >Taken</a>
					</td>
				</tr> -->

				<tr>
					<td></td>
				
					<td>
						<a>SL No</a>
					</td>
					<td>
						<a>Mentor's Names</a>
					</td>
					<td>
						<a>Branch</a>
					</td>
					<td>
						<a >Taken</a>
					</td>
				</tr>

				<?php while ($row = $retval->fetch_assoc()) : ?>
				<tr>
					<td>
							<input type="radio" onkeyup="validate(this)" name="inp" value="inp">	
					</td>
					<td>
						<a><?php echo $row['M_ID'] ?>
						</a>
					</td>
					<td>
						<a><?php echo $row['MNAME'] ?></a>
					</td>
					<td>
						<a><?php echo $row['BRANCH'] ?></a>
					</td>
					<td>
						<a ><?php echo $row['taken'] ?></a>
					</td>
				</tr>
			<?php endwhile; ?>
            
			<tr>
				<td style="border: none;">
					<a href="http://localhost/DBMS/login.html">
				<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Back
				</button></a></td>
				<td style="border: none;"></td>
				<td style="border: none;"></td>
				<td style="border: none;"></td>
				<td style="border: none;">
					<a href="http://localhost/DBMS/stud-list.php">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Next
					</button></a></td>
			</tr>
<?php 
if($_POST["inp"]=="inp")
	echo "href=http://localhost/DBMS/stud-list.php"
	 ?>
			</table>

</html>
