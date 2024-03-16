<?php
include("db.php");
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
				<input type="checkbox" id="c1">Remember Me<br/><br/>
				<input type="submit" value="Login" class="btn btn-primary">
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