<?php
require_once 'supports/initialize.php';
?>
<html>
<head>
	<title> Login | Deerwalk Sifal School </title>
	<link type="Text/CSS" rel="stylesheet" href="layouts/css/bootstrap.min.css"/>
	<script src="layouts/js/bootstrap.min.js"></script>
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
								&nbsp; <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<strong> &nbsp; Username</strong> 
								<input type="text" class="form-control" name="text" required placeholder="firstname.lastname"> 
							</td>
						</tr>
						<tr>
							<td>  
								&nbsp; <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								<strong> &nbsp; Password</strong>
								<input type="password" class="form-control" name="password" required placeholder="*******">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center"> 
								<input type="button" class="btn btn-primary btn-block" value="Login"> </td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<button type="button" class="btn btn-link" data-toggle="modal" 
								data-target="#exampleModal" style="text-decoration: none;">Forgot Password?</button>
							</td>
						</tr>
					</tbody>
				</form>
			</table>
		</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      	</div>
    <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>