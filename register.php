<?php
include("db.php");
if(isset($_POST["b1"]))
{
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$s3=$_POST["t4"];
	$s4=$_POST["t5"];
	$s5=$_POST["t6"];
	$s6=$_POST["t7"];
	$s7=$_POST["t8"];
	$s8=$_POST["t9"];
	$con->query("Insert into members values('$s1','$s3','$s4','$s5','$s6','$s7','$s8')");
	$con->query("Insert into users values('$s1','$s2','MEMBER')");
	header("location:thanks.php");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<title>E-Commerce Application</title>
</head>
<body>
<?php
include("header.php");
?>
<hr/>
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-2 col-sm-2"></div>
		<div class="col-xl-6 col-lg-6 col-md-8 col-sm-8">
			<form method='post'>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="t1" id="t1" placeholder="Enter Email" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="t2" id="t2" placeholder="Enter Password" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Re Password</label>
					<input type="password" name="t3" id="t3" placeholder="Enter Password Again" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="t4" id="t4" placeholder="Enter Full Name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Mobile No</label>
					<input type="text" name="t5" id="t5" placeholder="Enter Mobile No" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea type="text" name="t6" id="t6"  class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label>State</label>
					<select name="t7" id="t7"  class="form-control" required>
					<?php
						$results=$con->query("Select distinct states from cities order by states");
						while($row=$results->fetch_row())
						{
							echo "<option>".$row[0]."</option>";
						}
					?>
					</select>
				</div>
				<div class="form-group">
					<label>City</label>
					<select name="t8" id="t8"  class="form-control" required>
					<?php
							$results=$con->query("Select distinct city from cities order by city");
							while($row=$results->fetch_row())
							{
								echo "<option>".$row[0]."</option>";
							}
					?>
					</select>
				</div>
				<div class="form-group">
					<label>Pin Code</label>
					<input type="text" name="t9" id="t9"  class="form-control" required>
				</div>
				<br><br>
				<input type="submit" name="b1" value="Register" class="btn btn-primary">
			</form>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
	</div>
</div>
<hr/>
<?php
include("footer.php");
?>
</body>
</html>