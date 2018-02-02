<!DOCTYPE html>
<html>
<head>
	<meta content="text/html" charset="utf-8">
	<title>User list - PDF</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/pdf.css" media="all"> -->
	<style media="screen">
	*{
		font-family: Arial;
	}
	.box{
		width: auto;
		height: auto;
		display: flex;
		padding-bottom: 2em;
		flex-direction: row;/*cambia el je principal a vertical. row-reverse, column-reverse, row*/
	}

	.recomendation{

	}
	.innerRecomendation{
		display: flex;
		height: 20%;
		flex-direction: row;
		margin-bottom: 10px;
	}


	.top{

		padding-top: 30px;
		padding-bottom: 30px;
	}

	img {
		display: block;
	  max-width:350px;
	  max-height:140px;
	  width: auto;
	  height: auto;
	}

	.title{
		color: rgb(36, 115, 105);
		font-family: Arial;
		text-align: center;
	}
	.folio{
		font-weight: 800;
		margin: 0 20px;
	}
	p{
		margin: 0 20px;
	}
	.boldtitle{
		font-weight: 800;
	}

	.concept{
		width: 40%;
	}

	.recomendation{
		width: 40%;
		height: auto;
	}



	.separator{
		height: 10px;
	}

	.grade{
		width: 5%;
		text-align: center;
	}

	.punt{
		width: 5%;
		text-align: center;
	}

	.boldD{
		font-weight: 800;
	}


	.dimension{
		font-weight: 800;
	}
	.innerDimension{
		display: flex;
		flex-direction: row;
		height: 20%;
		justify-content:space-between;
		margin-bottom: 10px;
	}
	</style>
</head>
<body>

	<table class="top">
		<tr>
			<td><img src="{{public_path() . '/img/logoudg.png'}}" alt="Universidad de Guadalajara" style="width:110px; height:135px; float:left;"><br></td>
			<td><h3 class="title" id="titulo">
				Resultado del estudio de condiciones de trabajo de caracter psicosocial CTCPS-MAC
			</h3></td>
			<td><img src="{{public_path() . '/img/img-bienestar-cusur.jpg'}}" alt="Universidad de Guadalajara" style="width:110px; height:135px; float:right;"><br></td>
		</tr>
	</table>
	<!-- falta agregar folio -->
	algo {{$}} /algo
	<table>
		<!-- <tr>
			<th class="concept">Dimension</th>
			<th class="punt">puntuación</th>
			<th clas="grade">IV</th>
				<th clas="recomendation">Recomendaciones</th>
		</tr> -->
			@for($i=0; $i< sizeof($dimensions); $i++)
			<tr class="boldD">
				<td class="concept">Dimensión {{(String)$i+1 ."  ".$dimensions[$i][0]->concept}}</td>
				<td class="punt">{{$dimensions[$i][0]->puntuacion}}</td>
				<td class="grade">{{$dimensions[$i][0]->IV}}</td>
				<td class="recomendation">{{$dimensions[$i][0]->recomendation}}</td>
			</tr>
				@foreach ($factors[$i] as $key => $fac)
					@foreach ($fac as $key => $f)
				<tr>
					<td class="concept">{{ $f->Type .": ".$f->Concept }}</td>
					<td class="punt">{{ $f->puntuacion}}</td>
					<td class="grade">{{ $f->IV }}</td>
					<td class="recomendation">{{ $f->Recomendation }}</td>
				</tr>
					@endforeach
				@endforeach

				<tr>
					<td class="separator"></td>
				</tr>

			@endfor
	</table>
	<!-- <a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF</a> -->
	<script type="text/javascript">
		var cuadros = document.getElementsByClassName('grade');

		for(var i=0; i<cuadros.length; i++){
			if(cuadros[i].textContent == 5){
				cuadros[i].style.color = "#FFFFFF";
			}
			else if(cuadros[i].textContent == 4){
				cuadros[i].style.backgroundColor = "#741216";
				cuadros[i].style.color = "#FFFFFF";
			}
			else if(cuadros[i].textContent == 3){
				cuadros[i].style.backgroundColor = "#FFFF00";
				cuadros[i].style.color = "#741216";
			}
			else if(cuadros[i].textContent == 2){
				cuadros[i].style.backgroundColor = "#FFC20E";
				cuadros[i].style.color = "rgb(3, 28, 94)";
			}
			else if(cuadros[i].textContent == 1){
				cuadros[i].style.backgroundColor = "#008000";
				cuadros[i].style.color = "#FFFFFF";
			}
		}
	</script>
</div>
</body>
</html>
