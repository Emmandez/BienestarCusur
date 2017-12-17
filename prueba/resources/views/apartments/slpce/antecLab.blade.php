<!-- Formulario de antecedentes laborales. Se toman en cuenta el trabajo actual y anteriores -->
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

{!! Form::open(['action' => 'SlpceALController@store']) !!}

    <div class="container col-md-4 col-md-offset-4 title-container">
        <i class="fa fa-file-text-o" aria-hidden="true"></i>
        <h2 class="title">
            Antecedentes Laborales
        </h2>
    </div>

    <div class="container col-md-8 col-md-offset-2">
        <ol class="container links form-inline" id="navigation">
            <div class="container-indicator form-group">
                <p class="itemActive" data-target="#myCarousel" href="#actual" data-slide-to="0">Actual</p>
            </div>
            <div class="form-group">
                <i class="fa fa-arrow-right"></i>
            </div>
            <div class="container-indicator form-group">
                <p name="segundoEmpleo" data-target="#myCarousel" href="#segundoEmpleo" data-slide-to="1">2º Empleo actual</p>
            </div>
            <div class="form-group">
                <i class="fa fa-arrow-right"></i>
            </div>
            <div class="container-indicator form-group">
                <p name="anteriorInmediato" data-target="#myCarousel" href="#anteriorInmediato" data-slide-to="2">Anterior inmediato</p>
            </div>
            <div class="form-group">
                <i class="fa fa-arrow-right"></i>
            </div>
            <div class="container-indicator form-group">
                <p name="anterior" data-target="#myCarousel" href="#anterior" data-slide-to="3">Anterior</p>
            </div>
        </ol>
        <div id="myCarousel" class="carousel slide carousel-inner m-center" data-interval="false" data-ride="carousel">


            <!--ITEM 1-->
            <div class="item active table-responsive table-container col-md-12" data-number="0" id="actual">
                <div class="container form-inline pregunta">
                    <div class="form-group">
                        <label>Cantidad de puestos en el trabajo actual</label>
                        <select class="cantPTA" name="cantPTA" required>
                            <option value="Elije..">Elije..</option>
                            <option name="cantPTA" required value="1">1</option>
                            <option name="cantPTA" required value="2">2</option>
                        </select>
                    </div>
                </div>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                            </th>
                            <th class="colOne">
                                <p>Primero</p>
                            </th>
                            <th class="colTwo">
                                <p>Segundo</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Centro de trabajo</p>
                            </td>
                            <td class="colOne">
                                <input id="primerCentro" type="text" name="ct1_1" value="">
                            </td>
                            <td class="colTwo">
                                <input id="segundoCentro" type="text" name="ct1_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Puesto de trabajo</p>
                            </td>
                            <td class="colOne">
                                <input type="text" name="pt1_1" value="">
                            </td>
                            <td class="colTwo">
                                <input type="text" name="pt1_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tiempo en el puesto</p>
                            </td>
                            <td class="colOne">
                                <input type="number" name="tpa1_1" value="" min="0" placeholder="años">
                                <input type="number" name="tpm1_1" value="" min="0" max="11" placeholder="meses">
                            </td>
                            <td class="colTwo">
                                <input type="number" name="tpa1_2" value="" min="0" placeholder="años">
                                <input type="number" name="tpm1_2" value="" min="0" max="11" placeholder="meses">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>3 principales actividades</p>
                            </td>
                            <td class="colOne">
                                <input type="text" name="pa1_1_1" value="">
                                <input type="text" name="pa1_1_2" value="">
                                <input type="text" name="pa1_1_3" value="">
                            </td>
                            <td class="colTwo">
                                <input type="text" name="pa1_2_1" value="">
                                <input type="text" name="pa1_2_2" value="">
                                <input type="text" name="pa1_2_3" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ruido</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="RUIDO">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="RUIDO">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="VIBRACIONES">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="VIBRACIONES">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="TEMPERATURA EXTREMA">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="TEMPERATURA EXTREMA">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="ILUMINACIÓN">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="ILUMINACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="RADIACIÓN">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="RADIACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="QUÍMICOS">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="QUÍMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="BIOLÓGICOS">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="BIOLÓGICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes1[]" value="ERGONÓMICOS">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentes2[]" value="ERGONÓMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Otros agentes</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" type="text" name="otros_agentes1_1" value="">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" type="text" name="otros_agentes1_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>EPP que utiliza</p>
                            </td>
                            <td class="colOne">
                                <input type="text" name="epp1_1" value="">
                            </td>
                            <td class="colTwo">
                                <input type="text" name="epp1_2" value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container form-inline pregunta2">
                    <div class="form-group">
                        <label>¿Accidentes en el lugar de trabajo actual?</label>
                        <select class="accidTA" name="acciTA" required>
                            <option name="acciTA" required value="Si">Si</option>
                            <option name="acciTA" required value="No" selected>No</option>
                        </select>
                    </div>
                    <div class="form-group cont-txt">
                        <textarea name="cualesAccidentes" class="txtAccidente" placeholder="Descríbelo(s)"></textarea>
                    </div>
                </div>
            </div>

            <!--ITEM 2-->
            <div class="item table-responsive table-container carousel-inner" data-number="1" id="segundoEmpleo">
                <div class="container form-inline preguntaSegundo">
                    <div class="form-group">
                        <label>¿Cuenta con un 2º empleo actual?</label>
                        <select class="segundoEmpleoActual" name="segEmpAct">
                            <option name="segEmpAct" value="Si">Si</option>
                            <option name="segEmpAct" value="" selected>No</option>
                        </select>
                    </div>
                </div>
                <br>
                <table class="table table-bordered table-hover tab_segundo">
                    <tbody>
                        <tr>
                            <td>
                                <p>Centro de trabajo</p>
                            </td>
                            <td>
                                <input type="text" name="ct2_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Puesto de trabajo</p>
                            </td>
                            <td>
                                <input type="text" name="pt2_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tiempo en el puesto</p>
                            </td>
                            <td>
                                <input type="number" name="tpa2_1" value="" min="0" placeholder="años">
                                <input type="number" name="tpm2_1" value="" min="0" max="11" placeholder="meses">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>3 principales actividades</p>
                            </td>
                            <td>
                                <input type="text" name="pa2_1_1" value="">
                                <input type="text" name="pa2_1_2" value="">
                                <input type="text" name="pa2_1_3" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ruido</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="RUIDO">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="VIBRACIONES">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="TEMPERATURA EXTREMA">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="ILUMINACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="RADIACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="QUÍMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="BIOLÓGICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes2_2[]" value="ERGONÓMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Otros agentes</p>
                            </td>
                            <td>
                                <input class="noRequired" type="text" name="otros_agentes2_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>EPP que utiliza</p>
                            </td>
                            <td>
                                <input type="text" name="epp2_1" value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--ITEM 3-->
            <div class="item table-responsive table-container col-md-12" data-number="2" id="anteriorInmediato">
                <div class="container form-inline preguntaTercero">
                    <div class="form-group">
                        <label>Empleo anterior inmediato</label>
                        <select class="empleoAnteriorInmediato" name="empAntInm">
                            <option name="empAntInm" value="Si">Si</option>
                            <option name="empAntInm" value="" selected>No</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="container form-inline preguntaCPTAI">
                    <div class="form-group">
                        <label>Cantidad de puestos en el trabajo anterior inmediato</label>
                        <select class="cantPTAI" name="cantPTAI">
                            <option value="Elije..">Elije..</option>
                            <option name="cantPTAI" value="1">1</option>
                            <option name="cantPTAI" value="2">2</option>
                        </select>
                    </div>
                </div>
                <br class="preguntaCPTAI">
                <table class="table table-bordered table-hover tabCPTAI">
                    <thead>
                        <tr>
                            <th>
                            </th>
                            <th class="colUno">
                                <p>Primero</p>
                            </th>
                            <th class="colDos">
                                <p>Segundo</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Centro de trabajo</p>
                            </td>
                            <td class="colUno">
                                <input type="text" name="ct3_1" value="">
                            </td>
                            <td class="colDos">
                                <input type="text" name="ct3_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Puesto de trabajo</p>
                            </td>
                            <td class="colUno">
                                <input type="text" name="pt3_1" value="">
                            </td>
                            <td class="colDos">
                                <input type="text" name="pt3_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tiempo en el puesto</p>
                            </td>
                            <td class="colUno">
                                <input type="number" name="tpa3_1" value="" min="0" placeholder="años">
                                <input type="number" name="tpm3_1" value="" min="0" max="11" placeholder="meses">
                            </td>
                            <td class="colDos">
                                <input type="number" name="tpa3_2" value="" min="0" placeholder="años">
                                <input type="number" name="tpm3_2" value="" min="0" max="11" placeholder="meses">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>3 principales actividades</p>
                            </td>
                            <td class="colUno">
                                <input type="text" name="pa3_1_1" value="">
                                <input type="text" name="pa3_1_2" value="">
                                <input type="text" name="pa3_1_3" value="">
                            </td>
                            <td class="colDos">
                                <input type="text" name="pa3_2_1" value="">
                                <input type="text" name="pa3_2_2" value="">
                                <input type="text" name="pa3_2_3" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ruido</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="RUIDO">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="RUIDO">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="VIBRACIONES">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="VIBRACIONES">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="TEMPERATURA EXTREMA">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="TEMPERATURA EXTREMA">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="ILUMINACIÓN">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="ILUMINACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="RADIACIÓN">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="RADIACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="QUÍMICOS">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="QUÍMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="BIOLÓGICOS">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="BIOLÓGICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI1[]" value="ERGONÓMICOS">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="agentesAI2[]" value="ERGONÓMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Otros agentes</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" type="text" name="otros_agentes3_1" value="">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" type="text" name="otros_agentes3_2" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>EPP que utiliza</p>
                            </td>
                            <td class="colUno">
                                <input type="text" name="epp3_1" value="">
                            </td>
                            <td class="colDos">
                                <input type="text" name="epp3_2" value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--ITEM 4-->
            <div class="item table-responsive table-container carousel-inner" data-number="3" id="anterior">
                <div class="container form-inline preguntaCuatro">
                    <div class="form-group">
                        <label>Empleo anterior</label>
                        <select class="empAnt" name="empAnt">
                            <option name="empAnt" value="Si">Si</option>
                            <option name="empAnt" value="" selected>No</option>
                        </select>
                    </div>
                </div>
                <br>
                <table class="table table-bordered table-hover tab_cuarto">
                    <tbody>
                        <tr>
                            <td>
                                <p>Centro de trabajo</p>
                            </td>
                            <td>
                                <input type="text" name="ct4_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Puesto de trabajo</p>
                            </td>
                            <td>
                                <input type="text" name="pt4_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tiempo en el puesto</p>
                            </td>
                            <td>
                                <input type="number" name="tpa4_1" value="" min="0" placeholder="años">
                                <input type="number" name="tpm4_1" value="" min="0" max="11" placeholder="meses">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>3 principales actividades</p>
                            </td>
                            <td>
                                <input type="text" name="pa4_1_1" value="">
                                <input type="text" name="pa4_1_2" value="">
                                <input type="text" name="pa4_1_3" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ruido</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[]" value="RUIDO">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[]" value="VIBRACIONES">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[]" value="TEMPERATURA EXTREMA">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[][]" value="ILUMINACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4" value="RADIACIÓN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[][]" value="QUÍMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[][]" value="BIOLÓGICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="agentes4[]" value="ERGONÓMICOS">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Otros agentes</p>
                            </td>
                            <td>
                                <input class="noRequired" type="text" name="otros_agentes4_1" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>EPP que utiliza</p>
                            </td>
                            <td>
                                <input type="text" name="epp4_1" value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    <script src="{{asset('js/slpce/antecLab.js')}}"></script>
@endsection
