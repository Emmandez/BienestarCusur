<!DOCTYPE html>
<html>
<head>
	<title>User list - PDF</title>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/pdf.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/pdf.css"> -->
	<script src="{{asset('js/slpce/pdf.js')}}"></script>
	<style>
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
	.foliocontainer{
		display: flex;
		align-items: center;/*alinea el contenido*/
		flex-direction: row;/*cambia el je principal a vertical. row-reverse, column-reverse, row*/
		justify-content: center; /*espacio entre contenido*/
	}
	.recomendation{
		width: 50%;
		height: auto;

		display: flex;
		flex-direction: column;

	}
	.innerRecomendation{
		display: flex;
		height: 20%;
		flex-direction: row;
		margin-bottom: 10px;
	}

	.top{
		display: inline-block;
		padding-top: 50px;
		height: auto;
		width: auto;
	}

	img {
		display: block;
		max-width:350px;
		max-height:140px;
		width: auto;
		height: auto;
	}
	.enmedio{
		width: 100px;
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

	.dimension{
		width: 50%;
		height: auto;

		display: flex;
		flex-direction: column;
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
	<a href="{{ route('invoice',['download'=>'pdf']) }}">Download PDF</a>
	<div class="top">
		<div class="" style="float:left;">
			<img src="/img/logoudg.png" alt="Universidad de Guadalajara" class="topimg">
		</div>
		<div class="enmedio" style="float:left;">
			<h3 class="title" id="titulo">
				Resultado del estudio de condiciones de trabajo de caracter psicosocial CTCPS-MAC
			</h3>
		</div>
		<div class="" style="float:left;">
			<img src="/img/img-bienestar-cusur.jpg" alt="Bienestar Integral CUSur" class="topimg">
		</div>
	</div>
	<div class="foliocontainer">
		<p class="folio">Folio </p>

		<p class="folio">  33</p>
	</div>
	@for($i=0; $i< sizeof($dimensions); $i++)
	<div class="box">
		<div class="dimension">
			<div class="innerDimension">
				<p class="boldtitle">Dimensión {{(String)$i+1 ."  ".$dimensions[$i][0]->concept}}</p>
				<p class="boldtitle">{{$dimensions[$i][0]->puntuacion}}</p>
			</div>
			@foreach ($factors[$i] as $key => $fac)
				@foreach ($fac as $key => $f)
			<div class="innerDimension">
				<p>{{ $f->Type .": ".$f->Concept }}</p>
				<p>{{ $f->puntuacion}}</p>
			</div>
				@endforeach
			@endforeach
		</div>
		<div class="recomendation">
			<div class="innerRecomendation">
				<div class="grade">
					<p class="boldtitle numbG">{{$dimensions[$i][0]->IV}}</p>
				</div>
				<p class="boldtitle">
					{{$dimensions[$i][0]->recomendation}}
				</p>
			</div>
			@foreach ($factors[$i] as $key => $fac)
				@foreach ($fac as $key => $f)
			<div class="innerRecomendation">
				<div class="grade">
					<p>{{$f->IV}}</p>
				</div>
				<p>
					{{$f->Recomendation}}
				</p>
			</div>
			@endforeach
		@endforeach
		</div>
	</div>
	@endfor

</body>
</html>
