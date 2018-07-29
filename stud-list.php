<!-- <!DOCTYPE html>
<html>
<head>
<title>admin design student's list</title>
</head>
<body bgcolor="#1ddced">
			<table bgcolor="#fff" align="center" border="5" width="700" height="300" cellspacing="5" cellpadding="4">
				<tr>
					<th align='center' colspan='4'>Student's List</th>
				<tr align="center" valign="top">
					<td width="50" height="400" >
						<a>SL No</a>
					</td>
					<td width="200">
						<a>Student's Names</a>
					</td>
					<td width="150" >
						<a>USNs</a>
					</td>
					<td width="80">
						<a>Branch</a>
					</td>
				</tr>
			
			<tr>
				<td style="border: none;">
					<a href="http://localhost/DBMS/mentors-list.php">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 14px;color: #fff;border: none;margin: 0 20px;border-radius: 2px;cursor: pointer;">Back
					</button></a>
				</td>
				<td style="border: none;">
				<button style="background: #1ddced;padding: 5px 15px;font-size: 14px;color: #fff;align: center;border: none;margin: 0 80px;focus: autofocus;border-radius: 2px;cursor: pointer;">Select</button>
				</td>
				<td style="border: none;">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 14px;color: #fff;border: none;margin: 0 50px;border-radius: 2px;cursor: pointer;">Done
					</button>
				</td>
			</tr>
			</table>
</html>




 -->


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

				 $query="SELECT * FROM student";

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
<title>admin design student's list</title>
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
			<!-- <table bgcolor="#fff" align="center" border="0" width="700" height="500" cellspacing="5" cellpadding="4" style="border: 2px solid black;"> -->
			<table bgcolor="#fff" style="border: 2px solid black;">
				<tr>
					<th align='center' height="20" colspan='4'>Student's List</th>
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
						<a>Student's Name</a>
					</td>
					<td>
						<a>USN</a>
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
						<form method="post">
							<input type="radio" name="inp">
						</form>
						
					</td>
					<td>
						<a><?php echo $row['SNAME'] ?></a>
					</td>
					<td>
						<a><?php echo $row['USN'] ?></a>
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
				<td style="border: none;">
				<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Select</button></td>
				<td style="border: none;">
					<a href="http://localhost/DBMS/stud-list.php">
					<button style="background: #1ddced;padding: 5px 15px;font-size: 13px;color: #fff;border: none;margin: 0 10px;border-radius: 2px;cursor: pointer;">Next
					</button></a></td>
			</tr>
			</table>
</html>
