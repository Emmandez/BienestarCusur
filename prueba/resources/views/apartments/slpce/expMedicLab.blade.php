<!-- Formulario de ficha de identificación (datos generales), datos de escolaridad e información laboral -->

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

<!--{!! Form::open(['action' => 'SlpceEMLController@store']) !!}-->

{!! Form::open(['action' => 'SlpceEMLController@store']) !!}
{{ csrf_field() }}

    
<div class="container col-md-4 col-md-offset-4 title-container">
    <h2 class="title">
        Expediente Médico Laboral
    </h2>
</div>
<div class="container col-md-8 col-md-offset-2">
    <ol class="container linkers form-inline" id="enlaces">
        <div class="container-indicator form-group">
            <p class="itemActive" data-target="#myCarousel" href="#ficha" data-slide-to="0">Ficha de identificación</p>
        </div>
        <div class="form-group">
            <i class="fa fa-arrow-right"></i>
        </div>
        <div class="container-indicator form-group">
            <p data-target="#myCarousel" href="#escolaridad" data-slide-to="1">Escolaridad</p>
        </div>
        <div class="form-group">
            <i class="fa fa-arrow-right"></i>
        </div>
        <div class="container-indicator form-group">
            <p data-target="#myCarousel" href="#nombramiento" data-slide-to="2">Información laboral : Nombramiento</p>
        </div>
    </ol>
    <div id="myCarousel" class="carousel slide carousel-inner m-center" data-interval="false" data-ride="carousel">

        <!--ITEM 1-->
        <div class="item active form-inline col-md-12" data-number="0" id="ficha">
            <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                    <label for="">Fecha de registro</label>
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="date" id="fechaNac" name="fechaRegistro" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" title="Fecha de registro" required>
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="nombre" value="" placeholder="Nombre">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="app" value="" placeholder="Apellido paterno">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="apm" value="" placeholder="Apellido Materno">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="codigo" value="" pattern="[0-9]{7,10}" placeholder="Código" title="Ingresa los 9 números del código">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="lugarNamicimiento" value="" placeholder="Lugar de nacimiento">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="calle" value="" placeholder="Calle">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="colonia" value="" placeholder="Colonia">
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-group col-md-12">
                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="date" id="fechaNac" name="fechaNacimiento" value="" title="Fecha de nacimiento" required>
                </div>
                <br></br>
                <div class="form-inline col-md-12">
                    <label for="sexo" class="col-md-4">Sexo</label>
                    <select class="col-md-8" name="sexo" id="sexo" placeholder="Sexo">
                        <option value="FEME" name="sexo">Femenino</option>
                        <option value="MASC" name="sexo">Masculino</option>
                    </select>
                </div>
                <br></br>
                <div class="form-inline col-md-12">
                    <input type="text" name="telefonoCasa" value="" placeholder="Teléfono de Casa" pattern="[0-9]{7,10}" title="Introduce número de teléfono 7 a 10 dígitos(sólo números)">
                </div>
                <br></br>
                <div class="form-inline col-md-12">
                    <input type="text" name="telefonoCel" value="" placeholder="Teléfono celular" pattern="[0-9]{7,10}" title="Introduce número de teléfono 7 a 10 dígitos(sólo números)">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="numero" value="" placeholder="Número de casa">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="cp" value="" placeholder="Código postal">
                </div>
                <br></br>
                <div class="form-inline col-md-12">
                    <label for="TipoVivienda" class="col-md-4">Tipo de vivienda</label>
                    <select class="col-md-8" name="TipoVivienda" id="TipoVivienda" placeholder="Sexo">
                        <option value="PERS" name="TipoVivienda">Personal</option>
                        <option value="FAMI" name="TipoVivienda">Familiar</option>
                        <option value="PATE" name="TipoVivienda">Paterna</option>
                        <option value="OTRA" name="TipoVivienda">Otra</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4 col-md-offset-4 estado_civil">
                    <p class="col-md-8 col-md-offset-2">Estado civil:</p>
                </div>
                <div class="form-inline col-md-12 estado_civil-items">
                    <div class="form-group">
                        <label for="soltero">Soltero(a)</label>
                        <input type="radio" name="eCivil" value="SOLT" id="soltero" required>
                    </div>
                    <div class="form-group">
                        <label for="casado">Casado(a)</label>
                        <input type="radio" name="eCivil" value="CASA" id="casado">
                    </div>
                    <div class="form-group">
                        <label for="viudo">Viudo(a)</label>
                        <input type="radio" name="eCivil" value="VIUD" id="viudo">
                    </div>
                    <div class="form-group">
                        <label for="divorciado">Divorciado(a)</label>
                        <input type="radio" name="eCivil" value="DIVO" id="divorciado">
                    </div>
                    <div class="form-group">
                        <label for="uLibre">Unión libre</label>
                        <input type="radio" name="eCivil" value="UNLI" id="uLibre">
                    </div>
                </div>
            </div>
            <div class="form-inline col-md-12 last-item">
                <div class="form-group col-md-6">
                    <input type="text" name="numHijos" value="" pattern="[0-9]" title="Sólo números" placeholder="No. de hijos" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="numFamCargo" value="" pattern="[0-9]" title="Sólo números" placeholder="No. de familiares a cargo" required>
                </div>
            </div>
        </div>

        <!--ITEM 2-->
        <div class="item form-group col-md-12" data-number="1" id="escolaridad">
            <div class="form-inline container col-md-12">
                <div class="form-group col-md-5">
                    <p>¿Tiene estudios?</p>
                </div>
                <div class="form-group col-md-7 grados-cont">
                    <div class="form-inline col-md-6">
                        <label for="conEstudios">Sí</label>
                        <input type="radio" name="estudios" value="SI" id="conEstudios">
                    </div>
                    <div class="form-inline col-md-6">
                        <label for="SinEstudios">No</label>
                        <input type="radio" name="estudios" value="NO" id="SinEstudios">
                    </div>
                </div>
            </div>
            <div class="form-inline container col-md-12" id="primaria">
                <div class="form-group col-md-2">
                    <p>Primaria</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroPr">1º</label>
                        <input type="radio" name="gradoPrimaria" value="1" id="primeroPr" >
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoPr">2º</label>
                        <input type="radio" name="gradoPrimaria" value="2" id="segundoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroPr">3º</label>
                        <input type="radio" name="gradoPrimaria" value="3" id="terceroPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="cuartoPr">4º</label>
                        <input type="radio" name="gradoPrimaria" value="4" id="cuartoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="quintoPr">5º</label>
                        <input type="radio" name="gradoPrimaria" value="5" id="quintoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="sextoPr">6º</label>
                        <input type="radio" name="gradoPrimaria" value="6" id="sextoPr">
                    </div>
                </div>
            </div>
            <br></br>
            <div class="form-inline container col-md-12" id="secundaria">
                <div class="form-group col-md-2">
                    <p>Secundaria</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroSec">1º</label>
                        <input type="radio" name="gradoSecundaria" value="1" id="primeroSec">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoSec">2º</label>
                        <input type="radio" name="gradoSecundaria" value="2" id="segundoSec">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroSec">3º</label>
                        <input type="radio" name="gradoSecundaria" value="3" id="terceroSec">
                    </div>
                </div>
            </div>
            <br></br>
            <div class="form-inline container col-md-12" id="bachillerato">
                <div class="form-group col-md-2">
                    <p>Bachillerato</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroBa">1º</label>
                        <input type="radio" name="gradoBachillerato" value="1" id="primeroBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoBa">2º</label>
                        <input type="radio" name="gradoBachillerato" value="2" id="segundoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroBa">3º</label>
                        <input type="radio" name="gradoBachillerato" value="3" id="terceroBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="cuartoBa">4º</label>
                        <input type="radio" name="gradoBachillerato" value="4" id="cuartoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="quintoBa">5º</label>
                        <input type="radio" name="gradoBachillerato" value="5" id="quintoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="sextoBa">6º</label>
                        <input type="radio" name="gradoBachillerato" value="6" id="sextoBa">
                    </div>
                </div>
            </div>
            <br></br>
            <br></br>
            <div class="form-group col-md-12 nivelEstudio" id="tecnica">
                <div class="form-group">
                    <p>Carrera técnica</p>
                </div>
                <div class="form-inline">
                    <label for="siCT" class="col-md-1">Si</label>
                    <input type="radio" name="carreraTecnica" value="SI" id="siCT" class="col-md-1">
                    <input type="text" name="cualCarreraTecnica" value="" placeholder="¿Cuál?" class="col-md-10" id="cualCT">
                </div>
                <div class="form-inline">
                    <label for="noCT" class="col-md-1">No</label>
                    <input type="radio" name="carreraTecnica" value="NO" id="noCT" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio" id="licenciatura">
                <div class="form-group">
                    <p>Licenciatura</p>
                </div>
                <div class="form-inline">
                    <label for="siLI" class="col-md-1">Si</label>
                    <input type="radio" name="licenciatura" value="SI" id="siLI" class="col-md-1">
                    <input type="text" name="cualLicenciatura" value="" placeholder="¿Cuál?" class="col-md-10" id="cualLI">
                </div>
                <div class="form-inline">
                    <label for="noLI" class="col-md-1">No</label>
                    <input type="radio" name="licenciatura" value="NO" id="noLI" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio" id="maestria">
                <div class="form-group">
                    <p>Maestría</p>
                </div>
                <div class="form-inline">
                    <label for="siMA" class="col-md-1">Si</label>
                    <input type="radio" name="maestria" value="SI" id="siMA" class="col-md-1">
                    <input type="text" name="cualMaestria" value="" placeholder="¿Cuál?" class="col-md-10" id="cualMA">
                </div>
                <div class="form-inline">
                    <label for="noMA" class="col-md-1">No</label>
                    <input type="radio" name="maestria" value="NO" id="noMA" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio" id="doctorado">
                <div class="form-group">
                    <p>Doctorado</p>
                </div>
                <div class="form-inline">
                    <label for="siDO" class="col-md-1">Si</label>
                    <input type="radio" name="doctorado" value="SI" id="siDO" class="col-md-1">
                    <input type="text" name="cualDoctorado" value="" placeholder="¿Cuál?" class="col-md-10" id="cualDO">
                </div>
                <div class="form-inline">
                    <label for="noDO" class="col-md-1">No</label>
                    <input type="radio" name="doctorado" value="NO" id="noDO" class="col-md-1">
                </div>
            </div>
        </div>

        <!--ITEM 3-->
        <div class="item form-group col-md-12" data-number="2" id="nombramiento">
                        <div class="edificios">
                <label for="edif">Nombramiento</label>
                <select class="areaMayorPermanencia" id='puesto1' name="puesto">
                    <option value="">Elije una opción</option>
                    @foreach($nombramientos as $nombramiento)
                    <option name="puestos" required value="{{$nombramiento->id}}">{{$nombramiento->assignment}}</option>
                    @endforeach    
                </select>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-12 tipo_cont">
                    <p class="col-md-3">Tipo de contrato:</p>
                </div>
                <div class="form-group col-md-12 tipo_cont-elem">
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="definitivo">Definitivo</label>
                        <input class="col-md-1" type="radio" name="contrato" value="Definitivo" id="definitivo" required>
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="temporal">Temporal</label>
                        <input class="col-md-1" type="radio" name="contrato" value="Temporal" id="temporal">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="porContrato">Por contrato</label>
                        <input class="col-md-1" type="radio" name="contrato" value="Por contrato" id="porContrato">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="otroContrato">Otro</label>
                        <input class="col-md-1" type="radio" name="contrato" value="otro" id="otroContrato">
                        <input class="col-md-8" type="text" name="cualOtroContrato" value="" placeholder="¿Cuál?" id="cualOtroContrato">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-12 tipo_hor">
                    <p class="col-md-2">Horario:</p>
                </div>
                <div class="form-group col-md-12 tipo_hor-elem">
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="hMañana">Mañana</label>
                        <input class="col-md-1" type="radio" name="horario" value="Mañana" id="hMañana" required>
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="hTarde">Tarde</label>
                        <input class="col-md-1" type="radio" name="horario" value="Tarde" id="hTarde">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="hMañanaTarde">Mañana y tarde</label>
                        <input class="col-md-1" type="radio" name="horario" value="Mañana y tarde" id="hMañanaTarde">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="otroHorario">Otro</label>
                        <input class="col-md-1" type="radio" name="horario" value="" id="otroHorario">
                        <input class="col-md-8" type="text" name="cualOtroHorario" value="" placeholder="¿Cuál?" id="cualOtroHorario">
                    </div>
                </div>
            </div>

            <div class="edificios">
                <label for="edif">Área de mayor permanencia durante la jornada laboral</label>
                <select class="areaMayorPermanencia" id='edif' name="edificio_mayor_permanencia">
                    <option value="">Elije una opción</option>
                    @foreach($areas as $area)
                    <option required value="{{$area->id}}">{{$area->name_building}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-12">
                    <p class="col-md-5 antiguedad_p">Antigüedad en la institución</p>
                </div>
                <div class="form-inline col-md-12">
                    <input class="col-md-6" type="number" name="aniosAntiguedad" value="" placeholder="Años" min="0" required title="Sólo números enteros">
                    <input class="col-md-6" type="number" name="mesesAntiguedad" value="" placeholder="Meses" min="0" max="11" requiredtitle="Sólo números enteros">
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-12">
                    <p class="col-md-5 antiguedad_p">Días de incapacidad el año pasado</p>
                </div>
                <div class="form-inline col-md-12">
                    <input class="col-md-6" type="diasIncapacidad" name="diasIncapacidad" value="" placeholder="Días" min="0" required title="Sólo números enteros">
                </div>
            </div>

        </div>

        <div class="container-button">
            <button class="btn btn-info btn-block" type="submit">Guardar</button>
        </div>

    </div>

</div>

{!!Form::close() !!}
@endsection

@section('scripts')
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slpce/expMedicLab.js')}}"></script>
@endsection
