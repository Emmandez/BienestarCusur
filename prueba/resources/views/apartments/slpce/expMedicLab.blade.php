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

{!! Form::open(['action' => 'SlpceEMLController@store']) !!}

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
                    <input type="text" required name="nombre" value="" placeholder="Nombre">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="codigo" value="" pattern="[0-9]{9}" placeholder="Código" title="Ingresa los 9 números del código">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="lugarNamicimiento" value="" placeholder="Lugar de nacimiento">
                </div>
                <br></br>
                <div class="form-group col-md-12">
                    <input type="text" required name="domicilio" value="" placeholder="Domicilio">
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="form-inline col-md-12">
                    <input type="date" id="fechaEva" name="fechaEvaluacion" value="" title="Fecha de evaluación" required>
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
                    <input class="col-md-8" type="date" id="fechaEva" name="fechaNacimiento" value="" title="Fecha de nacimiento" required>
                    <input class="col-md-4" min="0" type="number" name="edad" value="" placeholder="edad" required>
                </div>
                <br></br>
                <div class="form-inline col-md-12">
                    <input type="text" name="numTelefono" value="" placeholder="Teléfono" pattern="[0-9]{7,10}" title="Introduce número de teléfono 7 a 10 dígitos(sólo números)">
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
                <div class="form-group col-md-2">
                    <p>Primaria</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroPr">1º</label>
                        <input type="radio" name="gradoPrimaria" value="PRIM" id="primeroPr" required>
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoPr">2º</label>
                        <input type="radio" name="gradoPrimaria" value="SEGU" id="segundoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroPr">3º</label>
                        <input type="radio" name="gradoPrimaria" value="TERC" id="terceroPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="cuartoPr">4º</label>
                        <input type="radio" name="gradoPrimaria" value="CUAR" id="cuartoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="quintoPr">5º</label>
                        <input type="radio" name="gradoPrimaria" value="QUIN" id="quintoPr">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="sextoPr">6º</label>
                        <input type="radio" name="gradoPrimaria" value="SEXT" id="sextoPr">
                    </div>
                </div>
            </div>
            <br></br>
            <div class="form-inline container col-md-12">
                <div class="form-group col-md-2">
                    <p>Secundaria</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroSec">1º</label>
                        <input type="radio" name="gradoSecundaria" value="PRIM" id="primeroSec">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoSec">2º</label>
                        <input type="radio" name="gradoSecundaria" value="SEGU" id="segundoSec">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroSec">3º</label>
                        <input type="radio" name="gradoSecundaria" value="TERC" id="terceroSec">
                    </div>
                </div>
            </div>
            <br></br>
            <div class="form-inline container col-md-12">
                <div class="form-group col-md-2">
                    <p>Bachillerato</p>
                </div>
                <div class="form-group col-md-10 grados-cont">
                    <div class="form-inline col-md-2">
                        <label for="primeroBa">1º</label>
                        <input type="radio" name="gradoBachillerato" value="PRIM" id="primeroBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="segundoBa">2º</label>
                        <input type="radio" name="gradoBachillerato" value="SEGU" id="segundoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="terceroBa">3º</label>
                        <input type="radio" name="gradoBachillerato" value="TERC" id="terceroBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="cuartoBa">4º</label>
                        <input type="radio" name="gradoBachillerato" value="CUAR" id="cuartoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="quintoBa">5º</label>
                        <input type="radio" name="gradoBachillerato" value="QUIN" id="quintoBa">
                    </div>
                    <div class="form-inline col-md-2">
                        <label for="sextoBa">6º</label>
                        <input type="radio" name="gradoBachillerato" value="SEXT" id="sextoBa">
                    </div>
                </div>
            </div>
            <br></br>
            <br></br>
            <div class="form-group col-md-12 nivelEstudio">
                <div class="form-group">
                    <p>Carrera técnica</p>
                </div>
                <div class="form-inline">
                    <label for="siCT" class="col-md-1">Si</label>
                    <input type="radio" name="carreraTecnica" value="SICT" id="siCT" class="col-md-1">
                    <input type="text" name="cualCarreraTecnica" value="" placeholder="¿Cuál?" class="col-md-10" id="cualCT">
                </div>
                <div class="form-inline">
                    <label for="noCT" class="col-md-1">No</label>
                    <input type="radio" name="carreraTecnica" value="NOCT" id="noCT" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio">
                <div class="form-group">
                    <p>Licenciatura</p>
                </div>
                <div class="form-inline">
                    <label for="siLI" class="col-md-1">Si</label>
                    <input type="radio" name="licenciatura" value="SILI" id="siLI" class="col-md-1">
                    <input type="text" name="cualLicenciatura" value="" placeholder="¿Cuál?" class="col-md-10" id="cualLI">
                </div>
                <div class="form-inline">
                    <label for="noLI" class="col-md-1">No</label>
                    <input type="radio" name="licenciatura" value="NOLI" id="noLI" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio">
                <div class="form-group">
                    <p>Maestría</p>
                </div>
                <div class="form-inline">
                    <label for="siMA" class="col-md-1">Si</label>
                    <input type="radio" name="maestria" value="SIMA" id="siMA" class="col-md-1">
                    <input type="text" name="cualMaestria" value="" placeholder="¿Cuál?" class="col-md-10" id="cualMA">
                </div>
                <div class="form-inline">
                    <label for="noMA" class="col-md-1">No</label>
                    <input type="radio" name="maestria" value="NOMA" id="noMA" class="col-md-1">
                </div>
            </div>
            <div class="form-group col-md-12 nivelEstudio">
                <div class="form-group">
                    <p>Doctorado</p>
                </div>
                <div class="form-inline">
                    <label for="siDO" class="col-md-1">Si</label>
                    <input type="radio" name="doctorado" value="SIDO" id="siDO" class="col-md-1">
                    <input type="text" name="cualDoctorado" value="" placeholder="¿Cuál?" class="col-md-10" id="cualDO">
                </div>
                <div class="form-inline">
                    <label for="noDO" class="col-md-1">No</label>
                    <input type="radio" name="doctorado" value="NODO" id="noDO" class="col-md-1">
                </div>
            </div>
        </div>

        <!--ITEM 3-->
        <div class="item form-group col-md-12" data-number="2" id="nombramiento">
            <div class="form-inline col-md-12">

                <div class="form-group col-md-6 nombramientos_container">
                    <div class="form-inline col-md-12">
                        <label for="n1" class="col-md-10">Prof. TC Investigador Asociado</label>
                        <input type="radio" name="nombramiento" value="A" class="col-md-2" id="n1" required>
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n2" class="col-md-10">Prof. TC Investigador Titular</label>
                        <input type="radio" name="nombramiento" value="B" class="col-md-2" id="n2">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n3" class="col-md-10">Prof. TC Docente Asociado</label>
                        <input type="radio" name="nombramiento" value="C" class="col-md-2" id="n3">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n4" class="col-md-10">Prof. TC Docente Titular</label>
                        <input type="radio" name="nombramiento" value="D" class="col-md-2" id="n4">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n5" class="col-md-10">Prof. Investigador y Directivo</label>
                        <input type="radio" name="nombramiento" value="E" class="col-md-2" id="n5">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n6" class="col-md-10">Prof. Docente y Directivo</label>
                        <input type="radio" name="nombramiento" value="F" class="col-md-2" id="n6">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n7" class="col-md-10">Técnico Académico</label>
                        <input type="radio" name="nombramiento" value="G" class="col-md-2" id="n7">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n8" class="col-md-10">Prof. Asignatura A < 10 hrs</label>
                        <input type="radio" name="nombramiento" value="H" class="col-md-2" id="n8">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n9" class="col-md-10">Prof. Asignatura A > 10 hrs</label>
                        <input type="radio" name="nombramiento" value="I" class="col-md-2" id="n9">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n10" class="col-md-10">Prof. Asignatura B < 10 hrs</label>
                        <input type="radio" name="nombramiento" value="J" class="col-md-2" id="n10">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n11" class="col-md-10">Prof. Asignatura B > 10 hrs</label>
                        <input type="radio" name="nombramiento" value="K" class="col-md-2" id="n11">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n12" class="col-md-10">Prof. Asignatura y Directivo</label>
                        <input type="radio" name="nombramiento" value="L" class="col-md-2" id="n12">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n13" class="col-md-10">Prof. Asignatura, Admvo o Cfza</label>
                        <input type="radio" name="nombramiento" value="M" class="col-md-2" id="n13">
                    </div>
                </div>

                <div class="form-group col-md-6 nombramientos_container">
                    <div class="form-inline col-md-12">
                        <label for="n14" class="col-md-10">Mandos Superiores(R. Srio, D, JD)</label>
                        <input type="radio" name="nombramiento" value="N" class="col-md-2" id="n14">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n15" class="col-md-10">Jefe de Unidad</label>
                        <input type="radio" name="nombramiento" value="Ñ" class="col-md-2" id="n15">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n16" class="col-md-10">Coor. Área, carr, posgrado</label>
                        <input type="radio" name="nombramiento" value="O" class="col-md-2" id="n16">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n17" class="col-md-10">Admvo coor, apoyo, aux gral</label>
                        <input type="radio" name="nombramiento" value="P" class="col-md-2" id="n17">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n18" class="col-md-10">Técnico de coor.</label>
                        <input type="radio" name="nombramiento" value="Q" class="col-md-2" id="n18">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n19" class="col-md-10">Jefe apoyo Admvo, téc. optvo</label>
                        <input type="radio" name="nombramiento" value="R" class="col-md-2" id="n19">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n20" class="col-md-10">Téc Admvo, esp, prof, y optvo</label>
                        <input type="radio" name="nombramiento" value="S" class="col-md-2" id="n20">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n21" class="col-md-10">Auxiliar Admvo</label>
                        <input type="radio" name="nombramiento" value="T" class="col-md-2" id="n21">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n22" class="col-md-10">Auxiliar optvo</label>
                        <input type="radio" name="nombramiento" value="U" class="col-md-2" id="n22">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n23" class="col-md-10">Civil Académico</label>
                        <input type="radio" name="nombramiento" value="V" class="col-md-2" id="n23">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n24" class="col-md-10">Civil Admvo</label>
                        <input type="radio" name="nombramiento" value="W" class="col-md-2" id="n24">
                    </div>
                    <div class="form-inline col-md-12">
                        <label for="n25" class="col-md-10">Civil Operativo</label>
                        <input type="radio" name="nombramiento" value="X" class="col-md-2" id="n25">
                    </div>
                    <div class="form-inline col-md-12 n26">
                        <label for="n26" class="col-md-10">Otro</label>
                        <input type="radio" name="nombramiento" value="" class="col-md-2" id="n26">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="cualNombramiento" value="" class="col-md-12" id="cual26" placeholder="¿Cuál?">
                    </div>
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-12 tipo_cont">
                    <p class="col-md-3">Tipo de contrato:</p>
                </div>
                <div class="form-group col-md-12 tipo_cont-elem">
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="definitivo">Definitivo</label>
                        <input class="col-md-1" type="radio" name="tipoContrato" value="" id="definitivo" required>
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="temporal">Temporal</label>
                        <input class="col-md-1" type="radio" name="tipoContrato" value="" id="temporal">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="porContrato">Por contrato</label>
                        <input class="col-md-1" type="radio" name="tipoContrato" value="" id="porContrato">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="otroContrato">Otro</label>
                        <input class="col-md-1" type="radio" name="tipoContrato" value="" id="otroContrato">
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
                        <input class="col-md-1" type="radio" name="horario" value="" id="hMañana" required>
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="hTarde">Tarde</label>
                        <input class="col-md-1" type="radio" name="horario" value="" id="hTarde">
                    </div>
                    <div class="form-inline col-md-12">
                        <label class="col-md-3" for="hMañanaTarde">Mañana y tarde</label>
                        <input class="col-md-1" type="radio" name="horario" value="" id="hMañanaTarde">
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
                    <option name="edificio_mayor_permanencia" required value="edificio_z">Edificio Z</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_y">Edificio Y</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_x">Edificio X</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_w">Edificio W</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_estancia_infantil_cusur">Edificio Estancia Infantil CUSur</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_v">Edificio V</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_p">Edificio P</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_q">Edificio Q</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_r">Edificio R</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_s">Edificio S</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_t">Edificio T</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_i">Edificio I</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_u">Edificio U</option>
                    <option name="edificio_mayor_permanencia" required value="hospital_veterinario_de_pequeñas_y_grandes_especies">Hospital veterinario de pequeñas y grandes especies</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_a">Edificio A</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_m">Edificio M</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_b">Edificio B</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_j">Edificio J</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_d">Edificio D</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_c">Edificio C</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_l">Edificio L</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_g">Edificio G</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_f">Edificio F</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_de_radio_universidad">Edificio de Radio Universidad</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_casa">Edificio CASA (Biblioteca)</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_lca">Edificio LCA (Centro Acuático)</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_tienda_insignia_universitaria_cusur">Edificio Tienda Insignia Universitaria CUSur</option>
                    <option name="edificio_mayor_permanencia" required value="bodega_de_electricista_y_fontanero">Bodega de electricista y fontanero</option>
                    <option name="edificio_mayor_permanencia" required value="edificio_h_dietología">Edificio H Dietología</option>
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
