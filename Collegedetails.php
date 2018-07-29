<html lang="en">
<head>
	<meta charset="UTF-8"
	<title>College Details</title>
	
</head>
<body style="background-color:#667943">
<form action="colg.php" method="post">

	<table cellpadding="2" width="100%" bgcolor="808000" align="right"
	cellspacing="2">
	
		<tr>
			<td colspan=2>
			<center><font size=4><b>College Details</b></font></center>
			</td>
		</tr>

		<tr>
			<td>Course</td>
			<td><input type="text" name="Course" id="Course" size="30"></td>
		</tr>
		

		<tr>
			<td>Branch</td>
			<td><input type="text" name="Branch" id="Branch"
			size="30"></td>
		</tr>
	
		<tr>
			<td>Semester</td>
			<td><input type="text" name="Semester" id="Semester"
			size="30"></td>
		</tr>
		
		<tr>
		<td>Applied Under</td>
			<td>
			<select name="AppliedUnder"id="AppliedUnder">
				<option value="-1" selected>select..</option>
				<option value="CET">CET</option>
				<option value="Comed K">Comed K</option>
				<option value="AIEEE">AIEEE</option>
			</select></td>
		</tr>
		
		<tr>
			<td colspan=2>
			<center><font size=4><b>Rank</b></font></center>
			</td>
		</tr>

		<tr>
			<td>CET</td>
			<td><input type="text" name="CET" id="CET" size="30"></td>
		</tr>
		
		<tr>
			<td>Comed K</td>
			<td><input type="text" name="Comedk" id="Comedk" size="30"></td>
		</tr>
		
		<tr>
			<td>AIEEE</td>
			<td><input type="text" name="AIEEE"id="AIEEE" size="30">
			</td>
		</tr>
		
		<tr>
			<td>Candidate Name</td>
			<td><input type="text" name="CandidateName"id="CandidateName" size="30">
			</td>
		</tr>
		
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="male" size="10">Male
				<input type="radio" name="gender" value="Female" size="10">Female
			</td>
		</tr>

		<tr>
			<td>DOB</td>
			<td><input type="text" name="DOB"id="DOB" size="30">
			</td>
		</tr>
		
		<tr>
		<td>Mother Tongue</td>
			<td>
			<select name="MotherTongue"id="MotherTongue">
				<option value="-1" selected>select..</option>
				<option value="Kannada">Kannada</option>
				<option value="English">English</option>
				<option value="Hindi">Hindi</option>
				<option value="Tamil">Tamil</option>
				<option value="Telugu">Telugu</option>
				<option value="Konkani">Konkani</option>
				<option value="Malyalam">Malyalam</option>
				<option value="Other">Other</option>
			</select></td>
		</tr>
		
		<tr>
		<td>Religion</td>
			<td>
			<select name="Religion"id="Religion">
				<option value="-1" selected>select..</option>
				<option value="Hindu">Hindu</option>
				<option value="Christian">Christian</option>
				<option value="Muslim">Muslim</option>
			</select></td>
		</tr>
		
		<tr>
		<td>Nationality</td>
			<td>
			<select name="Nationality"id="Nationality">
				<option value="-1" selected>select..</option>
				<option value="Indian">Indian</option>
				<option value="Other">Other</option>
			</select></td>
		</tr>
		
		
			<tr>
		<td>Category</td>
			<td>
			<select name="Category"id="Category">
				<option value="-1" selected>select..</option>
				<option value="GM">GM</option>
				<option value="1a">1a</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="2a">2a</option>
				<option value="3a">3a</option>
				<option value="3b">3b</option>
			</select></td>
		</tr>
		
		<tr>
		<td>Blood Group</td>
			<td>
			<select name="BloodGroup"id="BloodGroup>
				<option value="-1" selected>select..</option>
				<option value="A-">A-</option>
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				
			</select></td>
		</tr>
		
		<tr>
			<td>Admission Number</td>
			<td><input type="text" name="admissionnumber"id="admissionnumber" size="30">
			</td>
		</tr>
		
		<tr>
			<td>CET/TAT Number</td>
			<td><input type="text" name="CETTATNumber"id="CETTATNumber" size="30">
			</td>
		</tr>
		
				<tr>
		<td>Seat Claimed Category</td>
			<td>
			<select name="claimedcategory"id="claimedcategory">
				<option value="-1" selected>select..</option>
				<option value="GM">GM</option>
				<option value="1a">1a</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				<option value="2a">2a</option>
				<option value="3a">3a</option>
				<option value="3b">3b</option>
				
			</select></td>
		</tr>
		
		
		<tr>
		<td>Physically Handicapped</td>
			<td>
			<select name="PhysicallyHandicapped"id="PhysicallyHandicapped">
				<option value="-1" selected>select..</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select></td>
		</tr>
		
			<tr>
		<td>Economically Backward</td>
			<td>
			<select name="EconomicallyBackward"id="EconomicallyBackward>
				<option value="-1" selected>select..</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select></td>
		</tr>
		
		
				<tr>
		<td>Resident type</td>
			<td>
			<select name="Residenttype"id="Residenttype">
				<option value="-1" selected>select..</option>
				<option value="Permanent">Permanent</option>
				<option value="Temporary">Temporary</option>
			</select></td>
		</tr>
		
		
			
		<tr>
			<td>Adhaar number</td>
			<td><input type="text" name="AdhaarNumber"id="AdhaarNumber" size="30">
			</td>
		</tr>
		
		
		<tr>
			<td>
			<input type="reset"</td>
			<td colspan="2"><input type="submit" value="Add record"/></td>
		</tr>
		
	</table>
	
</form>
</body>
</html>