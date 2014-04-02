<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/admin.css" media="screen" rel="stylesheet" type="text/css" />
		<script>
			function s_login(){
				document.login.admin.style.visibility="visible";
				document.login.password.style.visibility="visible";
				document.login.submit.style.visibility="visible";
			}
		</script>
	</head>
	<body>
		<div>
			<form id="login" method="post" name="login" action="http://localhost/foodvn/index.php/admin/login">
				 <input type="button" value="login" id="btnlogin" onclick="s_login();" />
				 <p>
				 <input type="text" name="admin" placeholder="admin" style="visibility: hidden"  />
				 </p>
				 <p>
				 <input type="password" name="password" placeholder="password" style="visibility: hidden"  />
				 </p>
				 <p>
				 <input type="submit" name="submit" style="visibility: hidden" value="submit" id="btnsubmit" />
				 </p>
				 <p>
				 	<?php echo $result;  ?>
				 </p>
			</form>
			
		</div>
	</body>
</html>