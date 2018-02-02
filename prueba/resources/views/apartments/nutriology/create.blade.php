<!-- Formularios de evaluación antropométrica e impedancia bioelectrica -->
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

   {!! Form::open(['action' => 'NutriologyController@store']) !!}
    <section class="m-wrapper container-fluid">
        <div class="m-center container">
            <div class="headerMedics carousel_indicators container links">
                <div class="headerMedics__titleContainer">
                  <h2 class="indicator headerMedics__titleContainer-title" href="#evaAntro" data-target="#myCarousel" data-slide-to="0">Evaluación Antropométrica</h2>
                </div>
                <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
                <div class="headerMedics__titleContainer">
                  <h2 class="indicator headerMedics__titleContainer-title" href="#evaAntroDos" data-target="#myCarousel" data-slide-to="1">Evaluación Antropométrica Pt. 2</h2>
                </div>
                <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
                <div class="headerMedics__titleContainer">
                  <h2 class="indicator headerMedics__titleContainer-title" href="#actFisica" data-target="#myCarousel" data-slide-to="2">Actividad Física</h2>
                </div>
                <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
                <div class="headerMedics__titleContainer">
                  <h2 class="indicator headerMedics__titleContainer-title" href="#recordatorio" data-target="#myCarousel" data-slide-to="3">Recordatorio de 24 horas</h2>
                </div>
            </div>

      <div class="carousel slide carousel-inner col-md-12" data-interval="false" id="myCarousel">
          <ol class="carousel-indicators">
            <li class="indicator active" data-target="#myCarousel" data-slide-to="0"></li>
            <li class="indicator" data-target="#myCarousel" data-slide-to="1"></li>
            <li class="indicator" data-target="#myCarousel" data-slide-to="2"></li>
            <li class="indicator" data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

        <!--Primer item del carrousel FALTA etiqueta de cierre-->
        <div class="heredofam item active col-md-12" data-number="0" id="evaAntro">
            <div class="heredofam__title">
               <div class="heredofam__title-container">
                  <div class="heredofam__title-container__icon">
                    <i class="heredofam__title-container__icon-ico fa fa-universal-access"></i>
                  </div>
                  <div class="heredofam__title-container__tit">
                    <h2 class="heredofam__title-container__tit-h2">Evaluación antropométrica</h2>
                  </div>
               </div>
            </div>

          <!--Parte izquierda del formulario. Se ingresan datos-->
          <div class="heredofam__form">
            <form class="heredofam__form-container container" id="hFamiliar">
              <div class="div-container form-group">
                <div class="heredofam__form-container__item">

                  <div class="form-group">
                     <label for="height" class="control-label">Talla</label>
                     <div class="input-group">
                        <div class="input-group-addon independent"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="height" id="talla" class="form-control" placeholder="Ingresa la talla del paciente en metros" step="0.1" min="0" required="">
                      </div>
                      @if ($errors->has('talla'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('talla') }}</strong>
                        </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label for="current-weight" class="control-label">Peso Actual</label>
                     <div class="input-group">
                        <div class="input-group-addon independent"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="current_weight" id="pesoActual" class="form-control" placeholder="Ingresa el peso del paciente en Kg" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('current-weight'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('current-weight') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="habitual-weight" class="control-label">Peso Habitual</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="habitual_weight" class="form-control" placeholder="Ingresa el peso habitual del paciente en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('habitual'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('habitual') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                    <label for="hip_circumference" class="control-label">Circunferencia de cadera</label>
                      <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" id="hip_circumference" name="hip_c" class="form-control" placeholder="Circunferencia de cadera en cm." step="0.1" min="0" required>
                      </div>
                     @if ($errors->has('hip_circumference'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('hip_circumference') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="waist_circumference" class="control-label">Circunferencia de cintura</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" id="waist_circumference" name="waist_c" class="form-control" placeholder="Circunferencia de cintura en cm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('size'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('size') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="hand_circumference" class="control-label">Circunferencia de muñeca</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" id="hand_circumference" name="wrist_c" class="form-control" placeholder="Circunferencia de la muñeca en cm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('hand_circumference'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('hand_circumference') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="cmb" class="control-label">CMB</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="cmb" class="form-control" placeholder="Ingresa la CMB del paciente en centimetros" step="0.1" min="0" required="">
                      </div>
                      @if ($errors->has('cmb'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('cmb') }}</strong>
                        </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label for="pcb" class="control-label">PCB</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="pcb" class="form-control" placeholder="Ingresa el PCB en mm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('pcb'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('pcb') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="pct" class="control-label">PCT</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="pct" class="form-control" placeholder="Ingresa el PCT en mm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('pct'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('pct') }}</strong>
                      </span>
                     @endif
                  </div>


                </div>
                <!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha
                Se calculan los datos de la parte izquierda
              -->
                <div class="heredofam__form-container__item">

                  <div class="form-group">
                     <label for="IMC" class="control-label">Indice de masa corporal</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" id="imc" name="indicemc" class="form-control" placeholder="Ingresa el indice de masa corporal" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('imc'))
                      <span class="text-danger">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <strong>{{ $errors->first('imc') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="weight_category" class="control-label">Categoría de peso</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                          <select class="form-control" name="categoPeso" id="categPeso" placeholder="Elije una opción" required>
                            <option value="">Elige una opción</option>
                            <option value="Peso Bajo">Peso Bajo</option>
                            <option value="Peso Normal">Peso Normal</option>
                            <option value="Sobrepeso">Sobrepeso</option>
                            <option value="Obesidad grado 1">Obesidad grado 1</option>
                            <option value="Obesidad grado 2">Obesidad grado 2</option>
                            <option value="Obesidad grado 3">Obesidad grado 3</option>
                          </select>
                        </div>
                     @if ($errors->has('categPeso'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('categPeso') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="ideal_weight" class="control-label">Peso Ideal</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" id="idealWeitght" name="ideal_weight" class="form-control" placeholder="Ingresa el peso ideal del paciente en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('idealWeitght'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('idealWeitght') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="habitual_weight_percentage" class="control-label">Peso habitual %</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" id="habitual_weight_percentage" name="habitual_wP" class="form-control" placeholder="Porcentaje peso habitual" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('habitual_weight_percentage'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('habitual_weight_percentage') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="icc" class="control-label">ICC</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="indicecc" id="icc" class="form-control" placeholder="Indice cadera cintura" step="0.1" min="0" required>
                      </div>
                     @if ($errors->has('icc'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('icc') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="waist_danger" class="control-label">Riesgo por Circunferencia de cintura</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <select class="form-control" name="ccrisk" id="waist_danger" placeholder="Elije una opción" required>
                          <option value="">Elige una opción</option>
                          <option value="1">Sí</option>
                          <option value="2">No</option>
                        </select>
                     </div>
                     @if ($errors->has('size'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('size') }}</strong>
                        </span>
                     @endif
                  </div>

                   <div class="form-group">
                     <label for="risk_icc" class="control-label">Riesgo ICC</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <select class="form-control" name="riskIcc" id="risk_icc" placeholder="Elije una opción" required>
                          <option value="">Elige una opción</option>
                          <option value="bajo">Bajo</option>
                          <option value="medio">Medio</option>
                          <option value="alto">Alto</option>
                        </select>
                      </div>
                     @if ($errors->has('risk_icc'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('risk_icc') }}</strong>
                        </span>
                     @endif
                  </div>



                  <div class="form-group">
                    <label for="mass_distribution" class="control-label">Distribución de Masa</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                      <select class="form-control" name="mass_distribution" id="mass_distribution" placeholder="Elije una opción" required>
                        <option value="">Elige una opción</option>
                        <option value="Androide">Androide</option>
                        <option value="Ginecoide">Ginecoide</option>
                      </select>
                    </div>
                    @if ($errors->has('mass_distribution'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('mass_distribution') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                     <label for="complexity" class="control-label">Complexión</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <select class="form-control" name="complexity" id="complexity" placeholder="Elije una opción" required>
                          <option value="">Elige una opción</option>
                          <option value="1">Pequeña</option>
                          <option value="2">Mediana</option>
                          <option value="3">Grande</option>
                        </select>
                     </div>
                     @if ($errors->has('complexity'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('complexity') }}</strong>
                        </span>
                     @endif
                  </div>
                </div>
              </div>
              <div class="form-button">
                <button class="button" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div> <!--Etiqueta de cierre del primer item del carrousel-->


        <!--Segundo item del carrousel FALTA etiqueta de cierre-->
        <div class="heredofam item " data-number="1" id="evaAntroDos">
            <div class="heredofam__title">
               <div class="heredofam__title-container">
                  <div class="heredofam__title-container__icon">
                    <i class="heredofam__title-container__icon-ico fa fa-universal-access"></i>
                  </div>
                  <div class="heredofam__title-container__tit">
                    <h2 class="heredofam__title-container__tit-h2">Evaluación antropométrica Pt.2 </h2>
                  </div>
               </div>
            </div>

          <!--Parte izquierda del formulario.-->
          <div class="patologicas__form col-md-12">
            <form class="patologicas__form-container container" id="hFamiliar">
              <div class="div-container form-group">
                <div class="patologicas__form-container__item col-md-6">

                  <div class="form-group">
                     <label for="pcse" class="control-label">PCSE</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="pcse" class="form-control" placeholder="Ingresa el PCSE en mm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('pcse'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('pcse') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="pcsi" class="control-label">PCSI</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="pcsi" class="form-control" placeholder="Ingresa el PCSI en mm." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('pcsi'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('pcsi') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="totalMuscMassKg" class="control-label">Masa Muscular total kg</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="totalMuscMassKg" class="form-control" placeholder="Ingresa la masa muscular en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('totalMuscMassKg'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('totalMuscMassKg') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="leanMassKg" class="control-label">Masa Magra total kg</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="leanMassKg" class="form-control" placeholder="Ingresa la masa magra total en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('leanMassKg'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('leanMassKg') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="leanMassKgTani" class="control-label">Masa magra Kg (Tanita)</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="leanMassKgTani" class="form-control" placeholder="Ingresa la masa magra en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('leanMassKgTani'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('leanMassKgTani') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="total_water" class="control-label">Agua total (Tanita)</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="total_water" class="form-control" placeholder="Ingresa el agua total en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('total_water'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('total_water') }}</strong>
                      </span>
                     @endif
                  </div>

                </div>
                <!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha-->
                <div class="patologicas__form-container__item col-md-6">

                  <div class="form-group">
                     <label for="desnutrition_grade" class="control-label">Desnutrición</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                          <select class="form-control" name="desnutritionGrade" id="categPeso" placeholder="Elije una opción" required>
                            <option value="">Elige una opción</option>
                            <option value="1">No aplica / Normal</option>
                            <option value="2">Desnutrición leve</option>
                            <option value="3">Desnutrición moderada</option>
                            <option value="4">Desnutrición grave</option>
                          </select>
                        </div>
                     @if ($errors->has('categPeso'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('categPeso') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="fatPercentage" class="control-label">Porcentaje de grasa</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="fatPercentage" class="form-control" placeholder="Ingresa el porcentaje de grasa." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('fatPercentage'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('fatPercentage') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="fatMassKg" class="control-label">Masa grasa Kg</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="fatMassKg" class="form-control" placeholder="Ingresa la cantidad de grasa en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('fatMassKg'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('fatMassKg') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="corpWater" class="control-label">Agua Corporal total</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="corpWater" class="form-control" placeholder="Ingresa el agua corporal total en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('corpWater'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('corpWater') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="grease%" class="control-label">Masa grasa % (Tanita)</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="greasePercentTani" class="form-control" placeholder="Ingresa el porcentaje de masa grasa." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('grease%'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('grease%') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="grease_mass" class="control-label">Masa grasa Kg (Tanita)</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="number" name="grease_massKGTani" class="form-control" placeholder="Ingresa la masa grasa en Kg." step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('grease_mass'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('grease_mass') }}</strong>
                      </span>
                     @endif
                  </div>
                </div>
              </div>


              <div class="form-button">
                <button class="button" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div> <!--Etiqueta de cierre del segundo item del carrousel-->


        <!--Tercer item del carrousel-->
        <div class="heredofam item " data-number="2" id="actFisica">
            <div class="heredofam__title">
               <div class="heredofam__title-container">
                  <div class="heredofam__title-container__icon">
                    <i class="heredofam__title-container__icon-ico fa fa-heartbeat"></i>
                  </div>
                  <div class="heredofam__title-container__tit">
                    <h2 class="heredofam__title-container__tit-h2">Actividad Física</h2>
                  </div>
               </div>
            </div>

          <!--Parte izquierda del formulario.-->
          <div class="patologicas__form">
            <form class="patologicas__form-container container" id="hFamiliar">
              <div class="div-container form-group">
                <div class="patologicas__form-container__item">
                    <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc__Exc">
                      <h3>¿Realiza actividad física?</h3>
                    </div>

                    <div class="heredofam__form-container__item-wrap__response__Exc">
                      <div class="heredofam__form-container__item-wrap__response__Exc-opt1">
                        <div class="heredofam__form-container__item-wrap__response__Exc-opt1-in"><input required id="siActFi" type="radio" name="is_active" value="SI"> Sí </input></div>
                        <div class="heredofam__form-container__item-wrap__response__Exc-opt1-in"><input required id="noActFi" type="radio" name="is_active" value="NO" checked> No </input></div>
                      </div>

                      <div class="heredofam__form-container__item-wrap__response__Exc-opt2 opt2 " id="ActFOpt">
                        <div class="form-group">
                           <label for="exercise_intensity" class="control-label">Intensidad</label>
                           <div class="input-group">
                              <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                              <select class="form-control" name="exercise_intensity" id="exercise_intensity" placeholder="Elije una opción" required>
                                <option value="">Intensidad</option>
                                <option value="ML">Muy ligera</option>
                                <option value="L">Ligera</option>
                                <option value="M">Moderada</option>
                                <option value="P">Pesada</option>
                                <option value="E">Excepcional</option>
                              </select>
                            </div>
                           @if ($errors->has('exercise_intensity'))
                              <span class="text-danger">
                                 <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                 <strong>{{ $errors->first('exercise_intensity') }}</strong>
                              </span>
                           @endif
                        </div>

                      </div>
                    </div>
                  </div>



                </div>





                <!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha-->
                <div class="patologicas__form-container__item">

                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>¿Realiza ejercicio?</h3>
                    </div>

                    <div class="heredofam__form-container__item-wrap__response__Exc">
                      <div class="heredofam__form-container__item-wrap__response__Exc-opt1">
                        <div class="heredofam__form-container__item-wrap__response__Exc-opt1-in"><input required id="siExcer" type="radio" name="does_exercise" value="SI"> Sí </input></div>
                        <div class="heredofam__form-container__item-wrap__response__Exc-opt1-in"><input required id="noExcer" type="radio" name="does_exercise" value="NO" checked> No </input></div>
                      </div>

                      <div class="opt2 heredofam__form-container__item-wrap__response__Exc-opt2" id="ExcOpt">

                        <div class="form-group">
                         <label for="exercise_type" class="control-label">Tipo de ejercicio</label>
                           <div class="input-group">
                             <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                             <input type="text" name="exercise_type" class="form-control" placeholder="Ejercicio" step="0.1" min="0" required>
                           </div>
                           @if ($errors->has('exercise_type'))
                              <span class="text-danger">
                                 <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                 <strong>{{ $errors->first('exercise_type') }}</strong>
                            </span>
                           @endif
                        </div>

                        <div class="form-group">
                           <label for="exercise_frecuency" class="control-label">Frecuencia del ejercicio</label>
                             <div class="input-group">
                               <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                               <input type="number" name="exercise_frecuency" class="form-control" placeholder="Días a la semana" step="1" min="0" max="7" required>
                             </div>
                             @if ($errors->has('exercise_frecuency'))
                                <span class="text-danger">
                                   <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                   <strong>{{ $errors->first('exercise_frecuency') }}</strong>
                              </span>
                             @endif
                        </div>

                        <div class="form-group">
                           <label for="exercise_duration" class="control-label">Duración del ejercicio</label>
                             <div class="input-group">
                               <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                               <input type="number" name="exercise_duration" class="form-control" placeholder="Horas por sesión" step="1" min="0" max="24" required>
                             </div>
                             @if ($errors->has('exercise_duration'))
                                <span class="text-danger">
                                   <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                   <strong>{{ $errors->first('exercise_duration') }}</strong>
                              </span>
                             @endif
                        </div>

                        <div class="form-group">
                           <label for="star_date" class="control-label">¿Cuándo inició?</label>
                             <div class="input-group">
                               <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                               <input type="date" name="start_date" class="form-control" placeholder="Fecha de inicio del ejercicio"  required>
                             </div>
                             @if ($errors->has('star_date'))
                                <span class="text-danger">
                                   <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                   <strong>{{ $errors->first('star_date') }}</strong>
                              </span>
                             @endif
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-button">
                <button class="button" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div> <!--Etiqueta de cierre del Tercer item del carrousel-->

        <!--Cuarto item del carrousel-->
        <div class="heredofam item " data-number="3" id="recordatorio">
            <div class="heredofam__title">
               <div class="heredofam__title-container">
                  <div class="heredofam__title-container__icon">
                    <i class="heredofam__title-container__icon-ico fa fa-universal-access"></i>
                  </div>
                  <div class="heredofam__title-container__tit">
                    <h2 class="heredofam__title-container__tit-h2">Recordatorio de 24 horas</h2>
                  </div>
               </div>
            </div>


          <div class="patologicas__form col-md-12">
            <form class="patologicas__form-container container" id="hFamiliar">
              <div class="div-container form-group">
                <!--Parte izquierda del formulario.-->
                <div class="recordatorioComidas__form-container__item col-md-8 ">
                  <label  class="control-label">Comidas</label>

                  <!--Apartado desayuno-->
                  <div class="form-group comidaDiv">
                    <label for="desayuno" class="control-label">Desayuno</label>
                     <div class="input-group">
                       <!--div grande-->
                       <div >
                        <!--div arriba-->
                        <div class="row desayunoDiv">
                          <!--Div 1,1-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Fruta</p>
                            <input type="checkbox" value="fruta" name="desayuno[]" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,2-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Cereal</p>
                            <input type="checkbox" name="desayuno[]" value="cereal" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,3-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Frijoles</p>
                            <input type="checkbox" name="desayuno[]" value="frijoles" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,4-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Huevo</p>
                            <input type="checkbox" name="desayuno[]" value="huevo" class="desayunoCheck"  />
                          </div>

                          <!--Div 1,5-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Chilaquiles</p>
                            <input type="checkbox" name="desayuno[]" value="chilaquiles" class="desayunoCheck"  />
                          </div>

                        </div>
                        <!--Div abajo-->
                        <div class="row desayunoDiv-otro">
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Otro</p>
                            <input type="text" name="desayunoOtro" placeholder="Ingrese valores separados por comas."  />
                          </div>
                        </div>
                       </div>
                     </div>
                      @if ($errors->has('desayuno'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('desayuno') }}</strong>
                        </span>
                      @endif
                  </div>

                  <!--Apartado Colación matutina-->
                  <div class="form-group comidaDiv">
                    <label for="colacionM" class="control-label">Colación Matutina</label>
                     <div class="input-group">


                        <!--div arriba-->
                        <div class="row desayunoDiv">
                          <!--Div 1,1-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Fruta</p>
                            <input type="checkbox" name="colacionM[]" value="fruta" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,2-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Verduras</p>
                            <input type="checkbox" name="colacionM[]" value="verduras" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,3-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Yogurt</p>
                            <input type="checkbox" name="colacionM[]" value="yogurt" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,4-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Pan</p>
                            <input type="checkbox" name="colacionM[]" value="pan" class="desayunoCheck"  />
                          </div>


                        </div>
                        <!--Div abajo-->
                        <div class="row desayunoDiv-otro">
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Otro</p>
                            <input type="text" name="colacionMOtro" placeholder="Ingrese valores separados por comas."  />
                          </div>
                        </div>
                     </div>
                      @if ($errors->has('colacionM'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('colacionM') }}</strong>
                        </span>
                      @endif
                  </div>

                  <!--Apartado Comida-->
                  <div class="form-group comidaDiv">
                     <div class="input-group ">
                      <label for="comida" class="control-label">Comida</label>
                       <!--div grande-->
                       <div>
                        <!--div arriba-->
                        <div class="row desayunoDiv">
                          <!--Div 1,1-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Verduras</p>
                            <input type="checkbox" name="comida[]" value="verduras" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,2-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Arroz</p>
                            <input type="checkbox" name="comida[]" value="arroz" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,3-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Tostadas</p>
                            <input type="checkbox" name="comida[]" value="tostadas" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,4-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Pasta</p>
                            <input type="checkbox" name="comida[]" value="pasta" class="desayunoCheck"  />
                          </div>

                          <!--Div 1,5-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Guisado</p>
                            <input type="checkbox" name="comida[]" value="guisado" class="desayunoCheck"  />
                          </div>
                        </div>
                        <!--Div abajo-->
                        <div class="row desayunoDiv-otro">
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Otro</p>
                            <input type="text" name="comidaOtro" placeholder="Ingrese valores separados por comas."  />
                          </div>
                        </div>
                       </div>
                     </div>
                      @if ($errors->has('comida'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('comida') }}</strong>
                        </span>
                      @endif
                  </div>

                  <!--Apartado Colación Vespertina-->
                  <div class="form-group comidaDiv">
                    <label for="colacionV" class="control-label">Colación Vespertina</label>
                     <div class="input-group">


                        <!--div arriba-->
                        <div class="row desayunoDiv">
                          <!--Div 1,1-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Fruta</p>
                            <input type="checkbox" name="colacionV[]" value="fruta" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,2-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Verduras</p>
                            <input type="checkbox" name="colacionV[]" value="verduras" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,3-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Yogurt</p>
                            <input type="checkbox" name="colacionV[]" value="yogurt" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,4-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Pan</p>
                            <input type="checkbox" name="colacionV[]" value="pan" class="desayunoCheck"  />
                          </div>

                        </div>
                        <!--Div abajo-->
                        <div class="row desayunoDiv-otro">
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Otro</p>
                            <input type="text" name="colacionVOtro" placeholder="Ingrese valores separados por comas."  />
                          </div>
                        </div>
                     </div>
                      @if ($errors->has('colacionV'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('colacionV') }}</strong>
                        </span>
                      @endif
                  </div>

                  <!--Apartado Comida-->
                  <div class="form-group comidaDiv">
                     <div class="input-group ">
                      <label for="cena" class="control-label">Cena</label>
                       <!--div grande-->
                       <div>
                        <!--div arriba-->
                        <div class="row desayunoDiv">
                          <!--Div 1,1-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Fruta</p>
                            <input type="checkbox" name="cena[]" value="fruta" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,2-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Leche</p>
                            <input type="checkbox" name="cena[]" value="leche" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,3-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Tostadas</p>
                            <input type="checkbox" name="cena[]" value="tostadas" class="desayunoCheck"  />
                          </div>
                          <!--Div 1,4-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Verduras</p>
                            <input type="checkbox" name="cena[]" value="verduras" class="desayunoCheck"  />
                          </div>

                          <!--Div 1,5-->
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Tacos</p>
                            <input type="checkbox" name="cena[]" value="tacos" class="desayunoCheck"  />
                          </div>
                        </div>
                        <!--Div abajo-->
                        <div class="row desayunoDiv-otro">
                          <div class="desayunoDiv-opcion">
                            <p class="desayunoP">Otro</p>
                            <input type="text" name="cenaOtro" placeholder="Ingrese valores separados por comas."  />
                          </div>
                        </div>
                       </div>
                     </div>
                      @if ($errors->has('cena'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('cena') }}</strong>
                        </span>
                      @endif
                  </div>






                </div>
                <!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha--><!--Parte derecha-->
                <div class="recordatorioHoras__form-container__item col-md-4">
                  <label  class="control-label">Horarios</label>

                  <div class="form-group horaComida">
                     <label for="breakfastHour" class="control-label">Desayuno</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="text" name="breakfastHour" class="form-control" placeholder="9:00" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('breakfastHour'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('breakfastHour') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group horaComida">
                     <label for="morningCollationHour" class="control-label">Colación Matutina</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="text" name="morningCollationHour" class="form-control" placeholder="9:00" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('morningCollationHour'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('morningCollationHour') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group horaComida">
                     <label for="mealHour" class="control-label">Comida</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="text" name="mealHour" class="form-control" placeholder="9:00" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('mealHour'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('mealHour') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group horaComida">
                     <label for="EvenCollationHour" class="control-label">Colación Vespertina</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="text" name="EvenCollationHour" class="form-control" placeholder="9:00" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('EvenCollationHour'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('EvenCollationHour') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group horaComida">
                     <label for="dinnerHour" class="control-label">Cena</label>
                     <div class="input-group">
                       <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                       <input type="text" name="dinnerHour" class="form-control" placeholder="9:00" step="0.1" min="0" required>
                     </div>
                     @if ($errors->has('dinnerHour'))
                        <span class="text-danger">
                           <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                           <strong>{{ $errors->first('dinnerHour') }}</strong>
                      </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <label for="totalMeals" class="control-label">Total de comidas consumidas</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="totalMeals" class="form-control" placeholder="Número de comidas" step="1" min="1"  required=>
                      </div>
                      @if ($errors->has('totalMeals'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('totalMeals') }}</strong>
                        </span>
                      @endif
                  </div>

                  <div class="form-group">
                     <label for="totalMeals" class="control-label">Total de calorias</label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="" aria-hidden="true"></i></div>
                        <input type="number" name="totalCalories" class="form-control" placeholder="Total de calorias" step="100" min="500"  required=>
                      </div>
                      @if ($errors->has('totalCalories'))
                        <span class="text-danger">
                          <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                          <strong>{{ $errors->first('totalCalories') }}</strong>
                        </span>
                      @endif
                  </div>



                </div>
              </div>


              <div class="form-button">
                <button class="button" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div> <!--Etiqueta de cierre del cuarto item del carrousel-->








      </div>
   </div>






    </div>
        <div class="control">
            <div class="control-Left"><i class="left fa fa-chevron-left" href="#myCarousel" role="button" data-slide="prev" id="left"></i></div>
            <div class="control-Right"><i class="right fa fa-chevron-right" href="#myCarousel" role="button" data-slide="next" id="right"></i></div>
        </div>
    </section>



    <div class="input-group input-group-md">
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/nutriology/getValues.js')}}"></script>

@endsection
