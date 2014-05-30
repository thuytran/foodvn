<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/admin.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="http://localhost/foodvn/public/js/jquery.js"></script>
		<script src="http://localhost/foodvn/public/js/ajaxfileupload.js"></script>
	</head>
	<body>
		<div >
			<div>
			<form name="upload_file" method="post" action="http://localhost/foodvn/index.php/admin/upload_file" id="upload_file" enctype="multipart/form-data">
				<input type="button" id="btnadd" value="Add news in Blogs"/>
				<p>
					<input type="text" placeholder="title" name="title"  />
				</p>
				<p>
					<textarea name="summary"  id="summary" rows="5" >summary...</textarea>
				</p>
				<p>
					<textarea name="content" id="content" rows="5" >content...</textarea>
				</p>                 
				<p>
					<input type="text" placeholder="signature" name="signature" id="signature" />
				</p>
				<p>
					<input type="file" name="file_name"  id="file_name"/>
				</p> 
				<p>
					<input type="submit" value="submit" name="submit" id="submit"  />
				</p>
			</form>
			</div>
			
			<div id="list_uploaded">
				<table>
					<tr>
						<td>
						<p>
							<b> blogs you have posted </b>
						</p>
						</td>
					</tr>
					<?php for($i=0;$i<count($blogs);$i++){
					$item = $blogs[$i]; ?>
					<tr>
					<td>
					<a href="http://localhost/foodvn/index.php/welcome/detail/?id=<?php echo $item["id"]  ?>" > <?php echo $item['title']; ?> </a>
					</td>

					<td id="delete"><a href="http://localhost/foodvn/index.php/admin/delete_blog/?id=<?php echo $item["id"] ?>"> delete </a></td>
					</tr>
					<?php }
					?>
				</table>
			</div>
						
				<div id="upload_res">
				<form name="upload_res" method="post" action="http://localhost/foodvn/index.php/admin/upload_res" id="upload_res" enctype="multipart/form-data">
					<input type="button" id="btnadd" value="Add news Restaurant"/>
					<p>Choose type</p>
								
								<select name="region" id="region">
									<option value="hanoi">Ha Noi</option>
									<option value="hcm">Ho Chi Minh</option>
									<option value="danang">Đà Nẵng</option>
									<option value="4">Dessert</option>
									<option value="5">Drink</option>
									<option value="6">Cake</option>
								</select>
					
					<p>
						<input type="text" placeholder="restaurant's name" name="name_res"  />
					</p>
					<p>
						<textarea name="menu"  id="menu" rows="5" >summary of menu...</textarea>
					</p>
					<p>
						<textarea name="address" id="address" rows="2" >Address...</textarea>
					</p>
					<p>
						<input type="submit" value="submit" name="submit" id="submit"  />
					</p>
				</form>
			</div>
			
		</div>
		
	</body>
</html>