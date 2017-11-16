<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba base de datos</title>
</head>
<body>
	<!--Se va a la ruta /prueba, la cual tiene el método store del controlador de prueba-->
    <form action="/prueba" method="POST">  

    	{{ csrf_field() }}
    	<input type="text" name="txt" placeholder="Ingresa texto">
    	<input type="number" name="number" placeholder="ingresa numeros">
    	<?php
    	for ($i=0; $i <15 ; $i+=2) { 
    		echo $i;
    	}
    	?>
        
        <button type="submit"> envía</button>
    </form>
</body>
</html>