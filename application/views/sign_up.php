<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/home.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<div>
				<div>
					<div id="logo">
						<a href="localhost/foodvn/index.php"><img src="http://localhost/foodvn/public/image/logo.ico"/></a>
					</div>
					<div>
						<div>
							<a href="index.php/user/sign_up">My account</a>
							<a href="">Sign in</a>
						</div>
						<form action="#">
							<input type="text" id="search" maxlength="40" />
							<input type="submit" value="" id="searchbtn" />
						</form>
					</div>
				</div>
				<ul>
					<li class="current">
						<a href="">Home</a>
					</li>
					<li>
						<a href="">About us</a>
					</li>
					<li>
						<a href="">Recipes</a>
					</li>
					<li>
						<a href="">Restaurants</a>
					</li>
					<li>
						<a href="">Collections</a>
					</li>
					<li>
						<a href="">Blogs</a>
					</li>
				</ul>
				</div>
			</div>
			<div id="content">
				<div>
					<div id="account">
						<div>
							<form method="post" action="http://localhost/foodvn/index.php/user/register" id="form_dk">
								<br />
								<br />
								<span>Đăng ký tài khoản mới</span>
								<h4> <?php echo $result;?> </h4>
								<table>
									<tr>
										<td> Họ và tên</td>
										<td> <input type="text" name="fullname" /> </td>
									</tr>
									<br />
									<tr>
										<td>Ngày tháng năm sinh</td>
										<td><input type="date" name="dob" /></td>
									</tr>
									<br />
									<tr>
										<td>Quê quán</td>
										<td><input type="text" name="regions" /></td>
									</tr>
									<br />
									<tr>
										<td>Email</td>
										<td><input type="text" name="email" /></td>
									</tr>
									
									<tr>
										<td>Tên đăng nhập</td>
										<td><input type="text" name="username"/></td>
									</tr>
									
									<tr>
										<td>Mật khẩu</td>
										<td><input type="password" name="password" placeholder="8 kí tự trở lên" /></td>
									</tr>
							
									<tr>
										<td>Nhập lại mật khẩu</td>
										<td><input type="password" name="password_2" />  </td>
									</tr>
								
									<tr>
										<td>Đồng ý đăng ký</td>
										<td><input type="submit" value="Đăng ký" /> </td>
									</tr>
								
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
	</body>