<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap File Input</title>
		<link rel="icon" type="image/gif/png" href="../assets/_imagens/favicon-feston.png">
        <!--<link rel="stylesheet" href="_css/estilo.css"/>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="_css/css.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="./_css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="./_javascript/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
		<script src="./_javascript/plugins/sortable.min.js" type="text/javascript"></script>
		<script src="./_javascript/plugins/purify.min.js" type="text/javascript"></script>
		<script src="./_javascript/fileinput.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="./themes/fa/theme.js"></script>
		<script src="./_javascript/locales/<lang>.js"></script>

		<script src="./_javascript/init-config.js"></script>
		
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
		<nav class="navbar navbar-inverse bg-inverse nav-feston">
            <div id="header"></div>
        </nav>
        <div class="container container-corpo">
	        <div class="col-md-3"></div>

			<div class="col-md-6">
				<form enctype="multipart/form-data" action="upload.php" method="POST">
					<label class="control-label">Selecione os arquivos desejados:</label>
					<input id="arquivos" name="arquivos[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
					<input type="submit" value="Enviar arquivo" />
				</form>
			</div>

			<div class="col-md-3"></div>
		</div>
		<footer id="rodape">
          	<div id="footer"></div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	</body>
</html>