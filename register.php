<?php
include("config.php");
$nameErr = $clgErr = $deptErr = $mailErr = $passErr = "";
$name = $clg = $dept = $email = $pass= "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    }
    else
    {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["cname"]))
    {
        $clgErr = "College Name is required";
    }
    else
    {
        $clg = test_input($_POST["cname"]);
    }
    if (empty($_POST["dept"]))
    {
        $deptErr = "Department is required";
    }
    else
    {
        $dept = test_input($_POST["dept"]);
    }
    if (empty($_POST["email"]))
    {
        $mailErr = "Email ID required";
    }
    else
    {
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST["pass"]))
    {
        $passErr = "Password required";
    }
    else
    {
        $pass = test_input($_POST["pass"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $mailErr = "Invalid email format";
        }
    }
    $sql = "INSERT INTO students(name, college, department, mail, password) VALUES ('$name', '$clg', '$dept', '$email', '$pass');";
    $sql2 = "INSERT INTO login(username, password,type) VALUES ('$name', '$pass',0);";

    if(mysqli_query($db,$sql)&&(mysqli_query($db,$sql2)))
    {
        $nameErr = $regErr = $dobErr = $deptErr = $mailErr = "";
        $name = $reg = $dob = $dept = $email= "";
        echo "<script> alert('Registered Successfully');</script>";
    }
    else echo "<script> alert('Student could not be Registered');</script>";
}
?>
<html lang="en">
<head>
	<title>REGISTER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter" >
		<div class="container-login100" style="background-image:url('images/bg-01.jpg');" >
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/giphy.gif" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onSubmit="return validate(this);" name="form">
					<span class="login100-form-title">
						STUDENT REGISTRATION
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "College name is required">
						<input class="input100" type="text" name="cname" placeholder="College name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-university" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Department is required">
						<input class="input100" type="text" name="dept" placeholder="Department">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-certificate" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							REGISTER &nbsp;&nbsp;<i class="fa fa-user-plus"></i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="vendo1r/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

</body>
</html>
