<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adminstrative Login</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/css/style.css"); ?>" />
</head>
<body class="background">
<div class="container">
	<?= $this->session->flashdata('errors'); ?>
    <div class="row">
        <div id="login" class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 id = "header" class="text-center login-title">Admin Login</h1>
            <div class="account-wall">
                <form action = "login" method="post" class="form-signin">
	                <input type="text" class="form-control" placeholder="Email" name='email' required autofocus>
	                <input type="password" class="form-control" placeholder="Password" name="password" required>
	                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
              	</form>
    		</div>
		</div>
	</div>
</div>
</body>
</html>