<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form>
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label></label> <input type="text" name="uname" />mauiblade<br />
		<label></label> <input type="text" name="email" />wiwisalavaria@gmail.com<br />
		<label></label> <input type="password" name="pass" />11221993<br />
		<label></label> <input type="password" name="cpass" />11221993
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label></label> <input type="text" name="fname" />Kris<br />
		<label></label> <input type="text" name="lname" />Salavaria<br />
		<label></label> <input type="text" name="contact" />09451485065<br />
		<label></label> <textarea rows="2" cols="20" name="address" ></textarea><br />
		<label></label> <input type="text" name="city" /><br />
		<label></label> <input type="text" name="state" /><br />
		<label></label> <input type="text" name="zip" />
		<label></label> <input type="text" name="code" />
		<label></label> <input type="text" name="code" />
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>