{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}

@section ('complementos')

    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css"/>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>

    <!--<link rel="stylesheet" href="/css/medics/main.css"/> -->
     {!!Html::style ('/css/apartments/main.css')!!}
     {!!Html::style ('/css/style.css')!!} <!-- icomoon -->
@endsection

@section('content')

<div class="container col-md-6 col-md-offset-3 img-responsive title-container">
    <i class="fa fa-file-text-o" aria-hidden="true"></i>
    <h2 class="title">
        Diagnósticos y Tratamientos
    </h2>
</div>

{!! Form::open(['action' => 'DiagController@store']) !!}
<div class="container col-md-8 col-md-offset-2 wrap_diagnostics">
    <div class="col-md-12 wrap_diagnostics-item">
        <div class="wrap_diagnostics-item_header">
            <h3 class="">Seguridad Laboral (FPS y Agentes Ambientales)</h3>
            <input type="checkbox" id="chkSL" class="">
        </div>
        <div class="sl_container" hidden>
            <div class="wrap_diagnostics-item_observaciones">
                <textarea name="name" placeholder="Observaciones"></textarea>
            </div>
            <div class="wrap_diagnostics-item_recomendaciones">
                <textarea name="name" placeholder="Recomendaciones"></textarea>
            </div>
            <div class="wrap_diagnostics-item_btn">
                <button type="submit" class="btn btn-block btn-default">Enviar</button>
            </div>
        </div>
    </div>
</div>
{!!Form::close() !!}

{!! Form::open(['action' => 'DiagController@store']) !!}
<div class="container col-md-8 col-md-offset-2 wrap_diagnostics">
    <div class="col-md-12 wrap_diagnostics-item">
        <div class="wrap_diagnostics-item_header">
            <h3 class="">Médicos</h3>
            <input type="checkbox" id="chkME" class="">
        </div>
        <div class="me_container" hidden>
            <div class="wrap_diagnostics-item_observaciones">
                <textarea name="name" placeholder="Diagnósticos"></textarea>
            </div>
            <div class="wrap_diagnostics-item_recomendaciones">
                <textarea name="name" placeholder="Plan de manejo"></textarea>
            </div>
            <div class="wrap_diagnostics-item_recomendaciones">
                <textarea name="name" placeholder="Pronóstico"></textarea>
            </div>
            <div class="wrap_diagnostics-item_btn">
                <button type="submit" class="btn btn-block btn-default">Enviar</button>
            </div>
        </div>
    </div>
</div>
{!!Form::close() !!}

{!! Form::open(['action' => 'DiagController@store']) !!}
<div class="container col-md-8 col-md-offset-2 wrap_diagnostics">
    <div class="col-md-12 wrap_diagnostics-item">
        <div class="wrap_diagnostics-item_header">
            <h3 class="">Nutrición</h3>
            <input type="checkbox" id="chkNU" class="">
        </div>
        <div class="nu_container" hidden>
            <div class="wrap_diagnostics-item_observaciones">
                <textarea name="name" placeholder="Diagnóstico nutricional"></textarea>
            </div>
            <div class="wrap_diagnostics-item_recomendaciones">
                <textarea name="name" placeholder="Asesoría nutricional"></textarea>
            </div>
            <div class="wrap_diagnostics-item_btn">
                <button type="submit" class="btn btn-block btn-default">Enviar</button>
            </div>
        </div>
    </div>
</div>
{!!Form::close() !!}

@endsection

@section('scripts')
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/diagnostics/diagnostics.js')}}"></script>
@endsection
