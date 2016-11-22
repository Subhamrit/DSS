<html>
<head>
	<title> Deerwalk Sifal School | Login </title>
	<link type="Text/CSS" rel="stylesheet" href="layouts/css/bootstrap.min.css"/>
	<link type="Text/CSS" rel="stylesheet" href="layouts/css/style.css"/>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.7); margin-top: 20%;">
			<table class="table">
				<form class="form-inline" action="<?php echo htmlspecialchars('process/login.php');?>" method="POST">
					<thead>
						<th colspan="2"> 
							<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
							Login to your account 
						</th>
					</thead>
					<tbody>
						<tr> 
							<td> 
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<strong>Username</strong> 
								<input type="text" class="form-control" name="text" required placeholder="firstname.lastname"> 
							</td>
						</tr>
						<tr>
							<td>  
								<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								<strong>Password</strong>
								<input type="password" class="form-control" name="password" required placeholder="*******">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"> <input type="button" class="btn btn-primary" value="Login"> </td>
						</tr>
					</tbody>
				</form>
			</table>
		</div>
	</div>
</div>
</body>
</html>