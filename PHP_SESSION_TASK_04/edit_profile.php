<?php

	session_start();


?>

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form action="edit_profileCheck.php" method="POST">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value="<?php echo $_COOKIE["name"];?>"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="<?php echo $_COOKIE["email"];?>">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" checked="checked" value="male">Male
					<input name="gender" type="radio" value="female">Female
					<input name="gender" type="radio" value="other">Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="dob" type="text"
					 value="<?php echo $_COOKIE["day"]."/".$_COOKIE["month"]."/".$_COOKIE["year"] ?>"
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">		
	</form>
</fieldset>