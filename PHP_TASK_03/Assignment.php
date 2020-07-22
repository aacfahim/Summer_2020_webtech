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

		if($sEmail == "" || checkemailPattern($sEmail))
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
		$s = $_POST['gender'];

		if($sGender == "")
		{
			echo "Please select your gender";
		}
	}

}

?>


<html>
<body>
<form method="POST">
<table width="50%" align="center">
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
<b>Gender:</b>

</td>
<td>

<input type="radio" id="male" name="gender" value="male">
<label for="male"><b>Male</b></label>
<input type="radio" id="female" name="gender" value="female">
<label for="female"><b>Female</b></label>
<input type="radio" id="other" name="gender" value="other">
<label for="other"><b>Other</b></label>   <?php IsGenderSelected(); ?> 
	</td>

	</tr>

<tr>

<td><b>Date Of Birth:</b></td>
<td>  <input type="date" id="male" name="gender" value="male"> (dd/mm/yyyy)
   </td>


</tr>

<tr>
<td>
<b>Blood Group:</b>
</td>

<td>
<select>
<option>A+</option>
<option>B+</option>
<option>AB+</option>
<option>O+</option>


</select>

	</td>


</tr>
<tr>
<td>

<b>Degree:</b>

</td>
<td>
<input type="checkbox" id="checkbox" name="check" value="check"> <b>SSC</b>
<input type="checkbox" id="checkbox" name="check" value="check"> <b>HSC</b>
<input type="checkbox" id="checkbox" name="check" value="check"> <b>BSc.</b>
<input type="checkbox" id="checkbox" name="check" value="check"> <b>MSc.</b>
</td>
</tr>
<tr>
<td colspan="2">

</td>


</tr>


<tr>
        <td width="30%"><b>Photo</b></td>
        <td width="70%" colspan="2">
            <input type="file" name = "photo" >
		</td>
</tr>
	

<tr>

<td colspan="2">
	
    <input type="submit" value="Submit">
<input type="button" value="Reset">
</td>

</tr>


</table>

</form>
</body>


</html>