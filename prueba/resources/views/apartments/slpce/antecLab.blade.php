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
                                <input type="text" name="ct1_1" value="">
                            </td>
                            <td class="colTwo">
                                <input type="text" name="ct1_2" value="">
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
                                <input class="noRequired" class="checkbox" type="checkbox" name="ruido1_1" value="RU1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ruido1_2" value="RU1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="vibraciones1_1" value="VI1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="vibraciones1_2" value="VI1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="temp_extrema1_1" value="TE1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="temp_extrema1_2" value="TE1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="iluminacion1_1" value="IL1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="iluminacion1_2" value="IL1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="radiacion1_1" value="RA1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="radiacion1_2" value="RA1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="quimicos1_1" value="QU1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="quimicos1_2" value="QU1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="biologicos1_1" value="BI1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="biologicos1_2" value="BI1_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td class="colOne">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ergonomicos1_1" value="ER1_1">
                            </td>
                            <td class="colTwo">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ergonomicos1_2" value="ER1_2">
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
                            <option name="segEmpAct" value="No" selected>No</option>
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
                                <input class="checkbox noRequired" type="checkbox" name="ruido2_1" value="RU2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="vibracionnes2_1" value="VI2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="temp_extrema2_1" value="TE2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="iluminacion2_1" value="IL2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="radiacion2_1" value="RA2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="quimicos2_1" value="QU2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="biologicos2_1" value="BI2_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="ergonomicos2_1" value="ER2_1">
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
                            <option name="empAntInm" value="No" selected>No</option>
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
                                <input class="noRequired" class="checkbox" type="checkbox" name="ruido3_1" value="RU3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ruido3_2" value="RU3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="vibraciones3_1" value="VI3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="vibraciones3_2" value="VI3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="temp_extrema3_1" value="TE3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="temp_extrema3_2" value="TE3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="iluminacion3_1" value="IL3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="iluminacion3_2" value="IL3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="radiacion3_1" value="RA3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="radiacion3_2" value="RA3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="quimicos3_1" value="QU3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="quimicos3_2" value="QU3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="biologicos3_1" value="BI3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="biologicos3_2" value="BI3_2">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td class="colUno">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ergonomicos3_1" value="ER3_1">
                            </td>
                            <td class="colDos">
                                <input class="noRequired" class="checkbox" type="checkbox" name="ergonomicos3_2" value="ER3_2">
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
                            <option name="empAnt" value="No" selected>No</option>
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
                                <input class="checkbox noRequired" type="checkbox" name="ruido4_1" value="RU4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Vibraciones</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="vibracionnes4_1" value="VI4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Temperatura extrema</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="temp_extrema4_1" value="TE4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Iluminación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="iluminacion4_1" value="IL4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Radiación</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="radiacion4_1" value="RA4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Químicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="quimicos4_1" value="QU4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Biológicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="biologicos4_1" value="BI4_1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Ergonómicos</p>
                            </td>
                            <td>
                                <input class="checkbox noRequired" type="checkbox" name="ergonomicos4_1" value="ER4_1">
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
