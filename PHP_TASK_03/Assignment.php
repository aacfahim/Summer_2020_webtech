<?php

function nameCheck()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sname = $_POST['name'];

		if($sname == "" || strlen($sname) < 2 || ctype_digit($sname[0]) )
		{
			echo "Please enter a valid name";
		}
	}

}

function checkemailPattern($str) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

function EmailCheck()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sEmail = $_POST['Email'];

		if($sEmail == "" || !checkemailPattern($sEmail))
		{
			echo "Valid Email is required";
		}
	}

}


function IsGenderSelected()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sGender = $_POST['gender'];

		if($sGender == "")
		{
			echo "Please select your gender";
		}
	}

}


function DOB()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sDOB = $_POST['dob'];

		if($sDOB == "")
		{
			echo "Date of birth required";
		}
	}

}

function BG()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$bloodGroup = $_POST['blood'];

		if(empty($bloodGroup))
		{
			echo "Blood Group is required";
		}
	}

}


function CheckDegree()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//$Sdegree = $_POST['check'];

		if(empty($_POST['check']))
		{
			echo "check the degrees";
		}
	}

}

function CheckFile()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//$Sdegree = $_POST['check'];

		if(empty($_POST['photo']))
		{
			echo "Attach your photo";
		}
	}

}




?>


<html>
<head>
	<title>Person Profile</title>
</head>
<body>
<form method="POST">
	<table width="100%" align="center">
		<tr>
			<td colspan="2">
			<center><h1>Person Profile</h1></center>
			</td>
		</tr>
		<tr>
			<td>

			<b>Name:</b>
			</td>
			<td>
			<input type="text" name="name" value=""><?php nameCheck(); ?> <br/>
			</td>
		</tr>

		<tr>
			<td>
			<b>Email: </b>
			</td>
			<td>
			<input type="Email" name="Email"><?php EmailCheck(); ?> <br/>
			</td>
		</tr>

		<tr>
			<td>
			<b>Gender: </b>
			</td>

			<td>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male"><b>Male</b></label>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female"><b>Female</b></label>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other"><b>Other</b></label>  
			
			</td>

		</tr>

		<tr>

			<td><b>Date Of Birth:</b></td>
			<td> <input type="text" id = "day" name="dob" size="2">/<input type="text" id = "month" name="dob" size="2">/
			<input type="text" id = "year" name="dob" size="2">
			(dd/mm/yyyy) <?php DOB(); ?></td>

		</tr>

		<tr>
		<td>
		<b>Blood Group:</b>
		</td>

		<td>
			<select name="blood">
				<option></option>
				<option >A+</option>
				<option >B+</option>
				<option>AB+</option>
				<option >O+</option>
			</select>
			<?php BG(); ?>
			</td>
		</tr>

	<tr>
		<td>
		<b>Degree:</b>
		</td>

		<td>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>SSC</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>HSC</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>BSc.</b>
		<input type="checkbox" id="checkbox" name="check" value=""> <b>MSc.</b>
		<? CheckDegree(); ?>
		</td>
	</tr>

	<tr>
		<td width="30%"><b>Photo</b></td>
		<td width="70%" colspan="2">
		<input type="file" name = "photo" >
		<?php CheckFile(); ?>
		</td>
	</tr>
		

	<tr>

		<td colspan="2" align="center"><br>
		<input type="submit" value="Submit" >
		<input type="button" value="Reset">
		</td>
	</tr>


	</table>

</form>
</body>
</html>