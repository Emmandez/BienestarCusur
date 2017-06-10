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

{!! Form::open(['action' => 'LabsController@store']) !!}

    <div class="container col-md-6 col-md-offset-3 img-responsive title-container">
        <i class="fa fa-flask" aria-hidden="true"></i>
        <h2 class="title">
            Exámenes de Laboratorio Practicados
        </h2>
    </div>

    <div class="container col-md-8 col-md-offset-2 container_wrap">

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Biometría Hemática</h3>
                <input type="checkbox" name="biometricaHematica" value="SIBH" id="bioHe">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content bhcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="status">Estado</label>
                    <select class="" name="BHnormal/anormal" id="status">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaBH">Fecha del exámen</label>
                    <input type="date" name="fechaBH" value="" id="fechaBH">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultBH">Resultados</label>
                    <select class="" name="BHresultados" id="resultBH">
                        <option value="HB">HB</option>
                        <option value="HTO">HTO</option>
                        <option value="LEUC">LEUC</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Glucosa</h3>
                <input type="checkbox" name="glucosa" value="SIGL" id="glucosa">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content glcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusGL">Estado</label>
                    <select class="" name="GLnormal/anormal" id="statusGL">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaGL">Fecha del exámen</label>
                    <input type="date" name="fechaBH" value="" id="fechaGL">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultGL">Resultados</label>
                    <input type="text" name="resultGL" value="" id="resultGL" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-8 col-md-offset-2 container_wrap">
        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Urea</h3>
                <input type="checkbox" name="urea" value="SIUR" id="urea">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content urcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusUR">Estado</label>
                    <select class="" name="URnormal/anormal" id="statusUR">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaUR">Fecha del exámen</label>
                    <input type="date" name="fechaUR" value="" id="fechaUR">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultUR">Resultados</label>
                    <input type="text" name="resultUR" value="" id="resultUR" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Creatinina</h3>
                <input type="checkbox" name="creatinina" value="SICR" id="creatinina">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content crcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusCR">Estado</label>
                    <select class="" name="CRnormal/anormal" id="statusCR">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaCR">Fecha del exámen</label>
                    <input type="date" name="fechaCR" value="" id="fechaCR">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultCR">Resultados</label>
                    <input type="text" name="resultCR" value="" id="resultCR" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-8 col-md-offset-2 container_wrap">
        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Exámen General de Orina</h3>
                <input type="checkbox" name="orina" value="SIOR" id="orina">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content orcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusOR">Estado</label>
                    <select class="" name="ORnormal/anormal" id="statusOR">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaOR">Fecha del exámen</label>
                    <input type="date" name="fechaOR" value="" id="fechaOR">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultOR">Resultados</label>
                    <input type="text" name="resultOR" value="" id="resultOR" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Colesterol</h3>
                <input type="checkbox" name="colesterol" value="SICO" id="colesterol">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content cocont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusCO">Estado</label>
                    <select class="" name="COnormal/anormal" id="statusCO">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaCO">Fecha del exámen</label>
                    <input type="date" name="fechaCO" value="" id="fechaCO">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultCO">Resultados</label>
                    <input type="text" name="resultCO" value="" id="resultCO" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-8 col-md-offset-2 container_wrap">
        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Triglicéridos</h3>
                <input type="checkbox" name="trigliceridos" value="SITR" id="trigliceridos">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content trcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusTR">Estado</label>
                    <select class="" name="TRnormal/anormal" id="statusTR">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaTR">Fecha del exámen</label>
                    <input type="date" name="fechaTR" value="" id="fechaTR">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultTR">Resultados</label>
                    <input type="text" name="resultTR" value="" id="resultTR" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Antígeno Prostático Específico</h3>
                <input type="checkbox" name="antigenoProstatico" value="SIAP" id="antigenoProstatico">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content apcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusAP">Estado</label>
                    <select class="" name="APnormal/anormal" id="statusAP">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaAP">Fecha del exámen</label>
                    <input type="date" name="fechaAP" value="" id="fechaAP">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultAP">Resultados</label>
                    <input type="text" name="resultAP" value="" id="resultAP" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-8 col-md-offset-2 container_wrap">
        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Citología Vaginal</h3>
                <input type="checkbox" name="citologiaVaginal" value="SICV" id="citologiaVaginal">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content cvcont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusCV">Estado</label>
                    <select class="" name="CVnormal/anormal" id="statusCV">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaCV">Fecha del exámen</label>
                    <input type="date" name="fechaCV" value="" id="fechaCV">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultCV">Resultados</label>
                    <input type="text" name="resultCV" value="" id="resultCV" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>

        <div class="col-md-12 wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
            <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
                <h3>Ácido Úrico</h3>
                <input type="checkbox" name="acidoUrico" value="SIAU" id="acidoUrico">
            </div>
            <div class="form-inline col-md-12 wrap_elp-content aucont"><!--RESTO DEL CONTENIDO-->
                <div class="norm_anorm wrap_elp-content_div">
                    <label for="statusAU">Estado</label>
                    <select class="" name="AUnormal/anormal" id="statusAU">
                        <option value="NORM">Normal</option>
                        <option value="ANOR">Anormal</option>
                    </select>
                </div>
                <div class="fechaExamen wrap_elp-content_div">
                    <label for="fechaAU">Fecha del exámen</label>
                    <input type="date" name="fechaAU" value="" id="fechaAU">
                </div>
                <div class="result wrap_elp-content_div">
                    <label for="resultAU">Resultados</label>
                    <input type="text" name="resultAU" value="" id="resultAU" placeholder="Ingrese los resultados">
                </div>
            </div>
        </div>
    </div>

    <div class="container col-md-8 col-md-offset-2 cb">
        <div class="container-button">
            <button class="btn btn-info btn-block" type="submit">Guardar</button>
        </div>
    </div>

{!!Form::close() !!}
@endsection

@section('scripts')
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/labs/_labs.js')}}"></script>
@endsection
