<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Login to Earth Hour Surabbaya</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">    
		<meta name="layout" content="main"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="<?php echo base_url('assets'); ?>/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url('assets/ckeditor'); ?>/ckeditor.js" type="text/javascript"></script>
		<link href="<?php echo base_url('assets'); ?>/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
    	<style>
        
    	</style>
</head>

<body>
  <section class="container">
    <div class="box">
	<div class="box-header">
		<h5>Earth Hour Surabaya</h5>
	</div>
	<div class="box-content">
		<div class="input-prepend">
			<div class="form-group">
      				<form method="post" action="index.html">
       					<p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        				<p><input type="password" name="password" value="" placeholder="Password"></p>
        				<p class="remember_me">
          				<label>
            					<input type="checkbox" name="remember_me" id="remember_me">
           					Remember me on this computer
          				</label>
        				</p>
					<p class="submit"><input type="submit" name="commit" value="Login"></p>
      				</form>
			</div>
		</div>
	</div>
</body>
</html>