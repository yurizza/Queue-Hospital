<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?=base_url('dist/css/bootstrap.min.css')?>">
	<title>Login</title>
</head>
<body>
 <?=$this->session->flashdata('message') ?>
<div class="container">
	<h3 align="center">Login</h3>
	<form class="form-horizontal" method="POST" action="<?=base_url('admin/login')?>" >
  <div class="form-group">
    <label class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
</div>
</body>
</html>