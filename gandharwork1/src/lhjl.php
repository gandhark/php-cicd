

<html>
<head>
<title>PHPRO Login</title>
</head>

<body>
<h2>Add user</h2>
<form action="adduser_submit.php" method="get">
<fieldset>
<p>
<label for="phpro_username">Username</label>
<input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
</p>
<p>
<label for="phpro_password">Password</label>
<input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
</p>
<p>
<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
<input type="submit" value="&rarr; Login" />
</p>
</fieldset>
</form>
</body>
</html>