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

    <div class="col-md-10 col-md-offset-1 wrap_elp container"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Biometría Hemática</h3>
            <input type="checkbox" name="biometricaHematica" value="SIBH" id="bioHe">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault bhcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaBH">Fecha del exámen</label>
                <input type="date" name="fechaBH" value="" id="fechaBH">
            </div>
            <div class="HB wrap_elp-content_div">
                <label for="hemoglobina">Hemoglobina (mg/dl)</label>
                <input type="number" min="0" step="0.01" name="hemoglobina" value="" id="hemoglobina"placeholder="Resultado, ej: 15.2">
            </div>
            <div class="HTO wrap_elp-content_div">
                <label for="hematocrito">Hematocrito (%)</label>
                <input type="number" min="0" step="0.01" name="hematocrito" value="" id="hematocrito" placeholder="Resultado, ej: 40">
            </div>
            <div class="LEUC wrap_elp-content_div">
                <label for="leucocitos">Leucocitos (cel/mmᵌ)</label>
                <input type="number" min="0" step="0.01" name="leucocitos" value="" id="leucocitos" placeholder="Resultado, ej: 66">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagBH">Descripción</label>
                <input type="text" name="diagBH" id="diagBH"></input>
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Glucosa</h3>
            <input type="checkbox" name="glucosa" value="SIGL" id="glucosa">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault glcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaGL">Fecha del exámen</label>
                <input type="date" name="fechaBH" value="" id="fechaGL">
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultGL">Resultado (mg/dl)</label>
                <input type="text" pattern="[0-9]{0,10}" title="Sólo números enteros" name="resultGL" value="" id="resultGL" placeholder="Ingrese el resultado">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusGL">Estado</label>
                <input type="text" name="statusGLUCOSA" value="" disabled id="statusGL">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagGL">Descripción</label>
                <input type="text" name="diagGL" id="diagGL"></input>
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Urea</h3>
            <input type="checkbox" name="urea" value="SIUR" id="urea">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault urcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaUR">Fecha del exámen</label>
                <input type="date" name="fechaUR" value="" id="fechaUR">
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultUR">Resultado (mg/dl)</label>
                <input type="text" pattern="[0-9]{0,10}" title="Sólo números enteros" name="resultUR" value="" id="resultUR" placeholder="Ingrese el resultado">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusUR">Estado</label>
                <input type="text" name="statusUREA" value="" disabled id="statusUR">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagUR">Descripción</label>
                <input type="text" name="diagUR" id="diagUR"></input>
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Creatinina</h3>
            <input type="checkbox" name="creatinina" value="SICR" id="creatinina">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault crcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaCR">Fecha del exámen</label>
                <input type="date" name="fechaCR" value="" id="fechaCR">
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultCR">Resultado (mg/dl)</label>
                <input type="text" pattern="[0-9 . ]{0,10}" title="Sólo números, admite punto decimal" name="resultCR" value="" id="resultCR" placeholder="Ingrese el resultado">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusCR">Estado</label>
                <input type="text" name="statusCREATININA" value="" disabled id="statusCR">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagCR">Descripción</label>
                <input type="text" name="diagCR" id="diagCR"></input>
            </div>
        </div>
    </div>


    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Exámen General de Orina</h3>
            <input type="checkbox" name="orina" value="SIOR" id="orina">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault orcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaOR">Fecha del exámen</label>
                <input type="date" name="fechaOR" value="" id="fechaOR">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusOR">Estado</label>
                <select class="" name="ORnormal/anormal" id="statusOR">
                    <option value="NORM">Normal</option>
                    <option value="ANOR">Anormal</option>
                </select>
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultOR">Descripción</label>
                <input type="text" name="resultOR" value="" id="resultOR">
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Colesterol</h3>
            <input type="checkbox" name="colesterol" value="SICO" id="colesterol">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault cocont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaCO">Fecha del exámen</label>
                <input type="date" name="fechaCO" value="" id="fechaCO">
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultCO">Resultado (mg/dl)</label>
                <input type="text" pattern="[0-9 . ]{0,10}" title="Sólo números, admite punto decimal" name="resultCO" value="" id="resultCO" placeholder="Ingrese el valor">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusCO">Estado</label>
                <input type="text" name="statusCOLESTEROL" value="" disabled id="statusCO">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagCO">Descripción</label>
                <input type="text" name="diagCO" value="" id="diagCO">
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Triglicéridos</h3>
            <input type="checkbox" name="trigliceridos" value="SITR" id="trigliceridos">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault trcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaTR">Fecha del exámen</label>
                <input type="date" name="fechaTR" value="" id="fechaTR">
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultTR">Resultado (mg/dl)</label>
                <input type="text" pattern="[0-9 . ]{0,10}" title="Sólo números, admite punto decimal" name="resultTR" value="" id="resultTR" placeholder="Ingrese el valor">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusTR">Estado</label>
                <input type="text" name="statusTRIGLICERIDOS" value="" disabled id="statusTR">
            </div>
            <div class="descrip wrap_elp-content_div">
                <label for="diagTR">Descripción</label>
                <input type="text" name="diagTR" value="" id="diagTR">
            </div>
        </div>
    </div>

    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Antígeno Prostático Específico</h3>
            <input type="checkbox" name="antigenoProstatico" value="SIAP" id="antigenoProstatico">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault apcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaAP">Fecha del exámen</label>
                <input type="date" name="fechaAP" value="" id="fechaAP">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusAP">Estado</label>
                <select class="" name="APnormal/anormal" id="statusAP">
                    <option value="NORM">Normal</option>
                    <option value="ANOR">Anormal</option>
                </select>
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultAP">Descripción</label>
                <input type="text" name="resultAP" value="" id="resultAP">
            </div>
        </div>
    </div>


    <div class="col-md-10 col-md-offset-1 container wrap_elp"><!--SECCION CONTENEDORA DE CADA EXAMEN-->
        <div class="form-inline col-md-12 wrap_elp-head"><!--ENCABEZADO-->
            <h3>Citología Vaginal</h3>
            <input type="checkbox" name="citologiaVaginal" value="SICV" id="citologiaVaginal">
        </div>
        <div class="form-inline col-md-12 wrap_elp-content hideDefault cvcont"><!--RESTO DEL CONTENIDO-->
            <div class="fechaExamen wrap_elp-content_div">
                <label for="fechaCV">Fecha del exámen</label>
                <input type="date" name="fechaCV" value="" id="fechaCV">
            </div>
            <div class="norm_anorm wrap_elp-content_div">
                <label for="statusCV">Estado</label>
                <select class="" name="CVnormal/anormal" id="statusCV">
                    <option value="NORM">Normal</option>
                    <option value="ANOR">Anormal</option>
                </select>
            </div>
            <div class="result wrap_elp-content_div">
                <label for="resultCV">Descripción</label>
                <input type="text" name="resultCV" value="" id="resultCV">
            </div>
        </div>
    </div>

    <div class="clone">
        <!--
            Aquí se agregarán los nuevos elementos dinámicos cuando
            se quiera agregar un nuevo exámen de laboratorio.

            Los name de los input serán dinámicos:

            :: Para el input del nombre del nuevo exámen será: 'nombreOtro<NúmeroExamenNuevo>' ,
            :: Para el input de la fecha será: 'fechaOtro<NúmeroExamenNuevo>',
            :: Para el input del resultado será: 'resultadoOtro<NúmeroExamenNuevo>',
            :: Para el input del estado será: 'estadoOtro<NúmeroExamenNuevo>',
            :: Para el input de la descripción será: 'descOtro<NúmeroExamenNuevo>'

            ejemplo:

            nombreOtro1
            fechaOtro1
            resultadoOtro1
            estadoOtro1
            descOtro1

            nombreOtro2
            fechaOtro2
            resultadoOtro2
            estadoOtro2
            descOtro2

            ....... sucesivamente, si se elimina un elemento el contador decrementa y el número volverá
            a ser el mismo anterior, ejemplo: si existen tres nuevos elementos, el contador vale 3, si se
            eliminan dos elementos y luego se agrega uno el contador valdrá 2, osea vale el número de elementos
            nuevos existentes.
        -->
    </div>

    <div class="plus">
        <button type="button" id='btnPlus'>Añadir otro</button>
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
    <script src="{{asset('js/labs/btnPlus.js')}}"></script>
@endsection
