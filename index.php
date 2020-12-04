<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="index.js"></script>
	<title>Document</title>
</head>
<body>
	Solicitamos adjuntar los soportes por medio del chat.<br>
	<form name="formP08" id="formP08" action="javascript: P08opcion();" enctype='multipart/form-data'>
	  <div class="form-row align-items-center">
	    <div class="col-md-3 my-1">
	      <div class="custom-file">
	        <input type="file" name="filesP08[]" class="custom-file-input" multiple id="filesP08" accept="image/jpeg,application/pdf">
	        <label class="custom-file-label" for="customFile">Seleccione sus soportes</label>
	      </div>
	    </div> 
	    <div class="col-md-4 my-1">
	      <div class="input-group">
	        <div class="input-group-prepend">
	          <div class="input-group-text"><i class="fas fa-envelope-open-text"></i></div>
	        </div>
	        <input type="text" class="form-control" name="comentariosP08" id="comentariosP08" placeholder="Si tiene comentarios por favor aquí.">
	           <span class="input-group-append">
	           <button type="button" id="btnP08" onclick="p08opcion()" class="btn btn-primary float-right">Enviar</button>
	          </span>
	      </div>
	    </div>
	  </div>
	</form>
</body>
</html>