<html>
<head>
	<title> Deerwalk Sifal School | Login </title>
	<link type="Text/CSS" rel="stylesheet" href="layouts/css/bootstrap.min.css"/>
	<link type="Text/CSS" rel="stylesheet" href="layouts/css/style.css"/>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.7); margin-top: 15%;">
			<table class="table table-responsive">
				<form class="form-inline" action="<?php echo htmlspecialchars('process/login.php');?>" method="POST">
					<thead>
						<th colspan="2"> 
							<span class="glyphicon glyphicon-log-in" aria-hidden="true"> </span>
							<label> &nbsp; Login to your account </label>
						</th>
					</thead>
					<tbody>
						<tr> 
							<td> 
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<strong> &nbsp; Username</strong> 
								<input type="text" class="form-control" name="text" required placeholder="firstname.lastname"> 
							</td>
						</tr>
						<tr>
							<td>  
								<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								<strong> &nbsp; Password</strong>
								<input type="password" class="form-control" name="password" required placeholder="*******">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"> <input type="button" class="btn btn-primary btn-block" 
									value="Login"> </td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<h6><a href="#" style="text-decoration:none;"> Forgot Password? </a></h6>
							</td>
						</tr>
					</tbody>
				</form>
			</table>
		</div>
	</div>
</div>
</body>
</html>