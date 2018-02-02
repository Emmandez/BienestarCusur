<!-- Mostrar pdf -->
{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}
@section ('complementos')


    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css"/>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>

    <!--<link rel="stylesheet" href="/css/medics/main.css"/> -->


     {!!Html::style ('/css/apartments/main.css')!!}
@endsection

@section('content')

  {!! Form::open(['action' => 'pdf@store']) !!}
    <input type="text" name="codigo" id="codigo"  placeholder="Ingresa el código del paciente"  required="">
      



  {!! Form::close() !!}
@endsection
