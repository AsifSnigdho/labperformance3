<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Assignment</h1>


	<form method="post" action="submission.php">
	
	
		
	<table  border="1" cellspacing="0">
		
		<tr>
		
		<td colspan="3"><h1>Person Profile</h1></td>
			
		</tr>
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="" size="20" /></td>
			<td></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> <input type="text" name="email" size="20"/></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
			<td></td>
		
		<tr>
			<td>Date of birth</td>
			<td><input type="date" name="dob" value=""/></td>
			<td></td>
		</tr>
		
		</tr>
		<tr>
			<td>BG:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>Degree</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">B.sc
				<input type="checkbox" name="">M.sc
			</td>
			<td></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="Browse" value=""/>
			</td>
			<td></td>
		</tr>
		
		<tr>
			
			<td colspan="3">
				
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	
	</form>
</body>
</html>