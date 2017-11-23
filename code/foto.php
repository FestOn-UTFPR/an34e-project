<html>
	<head>
	
		<title>Bootstrap File Input</title>
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="./js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
		<script src="./js/plugins/sortable.min.js" type="text/javascript"></script>
		<script src="./js/plugins/purify.min.js" type="text/javascript"></script>
		<script src="./js/fileinput.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="./themes/fa/theme.js"></script>
		<script src="./js/locales/<lang>.js"></script>
		
		
		<script type="text/javascript">
			$(document).ready( function() {
			
				// initialize with defaults
				$("#arquivos").fileinput();

				// with plugin options
				$("#arquivos").fileinput({'showUpload':false, 'previewFileType':'any'});
				
			});
		</script>
	</head>
	
	<body>
		<div class="container">
			<form enctype="multipart/form-data" action="upload.php" method="POST">
				<label class="control-label">Selecione os arquivos desejados:</label>
				<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
				<input type="submit" value="Enviar arquivo" />
			</form>
		</div>
	</body>
</html>