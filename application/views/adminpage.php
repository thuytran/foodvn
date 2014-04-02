<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="http://localhost/foodvn/public/css/admin.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="http://localhost/foodvn/public/js/jquery.js"></script>
		<script src="http://localhost/foodvn/public/js/ajaxfileupload.js"></script>
		<script language="javascript">
		
		refresh_files();
			$(document).ready(function(){
				$("#submit").click(function(){
					$.ajaxFileUpload({
						url: "./upload_file",
						secureuri: false,
						fileElementId: "file_name",
						dataType:"json",
						data:{"title": $("#title").val(),"summary": $("#summary").val(),"content": $("#content").val(),"signature": $("#signature").val()},
						success : function(data, status){
							if(data.status != "error"){
								$("#title").val("");
								$("#summary").val("");
								$("#conten").val("");
								$("#signature").val("");
							}
							alert(data.msg);
						}
					});	
					retturn false;
				});
			});
			
			function refresh_files()
			{
				$.get('./files/').success(function(data){
					$('#files').html(data);
				});
			}
		</script>
	</head>
	<body>
		<div >
			<form name="upload_file" method="post" action="http://localhost/foodvn/index.php/admin/upload_file" id="upload_file" enctype="multipart/form-data">
				<input type="button" id="btnadd" value="Add news in Blogs"/>
				<p>
					<input type="text" placeholder="title" name="title"  />
				</p>
				<p>
					<textarea name="summary"  id="summary">summary...</textarea>
				</p>
				<p>
					<textarea name="content" id="content" >content...</textarea>
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
		<div id="files"></div>
	</body>
</html>