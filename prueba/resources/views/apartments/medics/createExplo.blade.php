<!-- Formulario de interrogatorio de aparatos, sistemas y exploración física -->
  {{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}

@section ('complementos')
  <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css"/>
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
  <!--<link rel="stylesheet" href="/css/medics/main.css"/>-->
  {!!Html::style ('/css/apartments/main.css')!!}
  <!--<title>Exploraciones médicas</title>-->
@endsection
@section('content')



  {!! Form::open(['action' => 'MedicsExpController@store']) !!}
  <section class="m-wrapper container-fluid">
    <div class="m-center container"><!--
      <div class="headerMedicsExp carousel-indicators container">
        <div class="headerMedicsExp__titleContainer">
          <h2 class="indicator headerMedicsExp__titleContainer-title" href="#interrogatorio" data-target="#myCarousel" data-slide-to="0">Interrogatorio por aparatos y sistemas</h2>
        </div>
        <div class="headerMedicsExp__arrowContainer"><i class="headerMedicsExp__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedicsExp__titleContainer">
          <h2 class="indicator headerMedicsExp__titleContainer-title" href="#expFisica1" data-target="#myCarousel" data-slide-to="1">Exploración física (1)</h2>
        </div>
        <div class="headerMedicsExp__arrowContainer"><i class="headerMedicsExp__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedicsExp__titleContainer">
          <h2 class="indicator headerMedicsExp__titleContainer-title" href="#expFisica1-1" data-target="#myCarousel" data-slide-to="2">Exploración física (1.1)</h2>
        </div>
        <div class="headerMedicsExp__arrowContainer"><i class="headerMedicsExp__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedicsExp__titleContainer">
          <h2 class="indicator headerMedicsExp__titleContainer-title" href="#expFisica1-2" data-target="#myCarousel" data-slide-to="3">Exploración física (1.2)</h2>
        </div>
      </div>-->
      <div class="links headerMedics carousel_indicators container">
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#interrogatorio" data-target="#myCarousel" data-slide-to="0">Interrogatorio por aparatos y sistemas</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#expFisica1" data-target="#myCarousel" data-slide-to="1">Exploración física (1)</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#expFisica1-1" data-target="#myCarousel" data-slide-to="2">Exploración física (1.1)</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#expFisica1-2" data-target="#myCarousel" data-slide-to="3">Exploración física (1.2)</h2>
        </div>
      </div>
      <div class="carousel slide carousel-inner container" data-interval="false" id="myCarousel">
        <ol class="carousel-indicators">
          <li class="indicator active" data-target="#myCarousel" data-slide-to="0"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="1"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="2"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="interrog item active" data-number="0" id="interrogatorio">
          <div class="interrog__title">
            <div class="interrog__title-container">
              <div class="interrog__title-container__icon"><i class="interrog__title-container__icon-ico fa fa-heartbeat"></i></div>
              <div class="interrog__title-container__tit">
                <h2 class="interrog__title-container__tit-h2">Interrogatorio por aparatos y sistemas</h2>
              </div>
            </div>
          </div>
          <div class="interrog__form">
            <form class="interrog__form-container container" id="interrogatorioApSis" method="post" action="">
              <div class="div-container form group">
                <div class="interrog__form-container__item">
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Respiratorio/Cardiovascular:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="RECA"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Digestivo:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="DIGE"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Endócrino:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="ENDO"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Músculo-Esquelético:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="MUES"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Genito-Urinario:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="GEUR"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Hematopoyético-Linfático:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="HELI"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Piel y anexos:</h3>
                    </div>
                    <div class="interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="PIAN"></textarea>
                    </div>
                  </div>
                  <div class="interrog__form-container__item-wrap">
                    <div class="interrog__form-container__item-wrap__desc">
                      <h3>Neurológico y Psiquiátricos:</h3>
                    </div>
                    <div class="ivsaRes interrog__form-container__item-wrap__response">
                      <textarea placeholder="Descripción opcional" name="NEPS"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-button">
                <button class="button" type="submit">Guardar</button>
              </div>
            </form>
          </div>
        </div>

        <div class="expF1 item" data-number="1" id="expFisica1">
          <div class="expF1__title">
            <div class="expF1__title-container">
              <div class="expF1__title-container__icon"><i class="expF1__title-container__icon-ico fa fa-male"></i></div>
              <div class="expF1__title-container__tit">
                <h2 class="expF1__title-container__tit-h2">Exploración física (1)</h2>
              </div>
            </div>
          </div>
          <div class="expF1__form">
            <form class="expF1__form-container" id="exploracion1" action="" method="post">
              <div class="div">
                <div class="expF1__form-container__item">
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Tórax</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Corazón</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opCorazon" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opCorazon">normal</option>
                            <option value="ANOR" name="opCorazon">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoCorazon"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Pulmones</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opPulmones" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opPulmones">normal</option>
                            <option value="ANOR" name="opPulmones">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoPulmones"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Abdomen</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Pared abdominal</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opParedAbdominal" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opParedAbdominal">normal</option>
                            <option value="ANOR" name="opParedAbdominal">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosPA"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Vísceras</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opVisceras" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opVisceras">normal</option>
                            <option value="ANOR" name="opVisceras">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosVisceras"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Genitales</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Genitales</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opGenitales" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opGenitales">normal</option>
                            <option value="ANOR" name="opGenitales">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosGenitales"></textarea>
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
        </div>

        <div class="expF1 item" data-number="2" id="expFisica1-1">
          <div class="expF1__title">
            <div class="expF1__title-container">
              <div class="expF1__title-container__icon"><i class="expF1__title-container__icon-ico fa fa-male"></i></div>
              <div class="expF1__title-container__tit">
                <h2 class="expF1__title-container__tit-h2">Exploración física (1.1)</h2>
              </div>
            </div>
          </div>
          <div class="expF1__form">
            <form class="expF1__form-container" id="exploracion1-1" method="post" action="">
              <div class="div">
                <div class="expF1__form-container__item">
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Extremidades</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Miembros superiores</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opMS" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opMS">normal</option>
                            <option value="ANOR" name="opMS">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoMS"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Miembros inferiores</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opMI" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opMI">normal</option>
                            <option value="ANOR" name="opMI">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoMI"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Neurológicos</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Columna</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opColumna" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opColumna">normal</option>
                            <option value="ANOR" name="opColumna">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosColumna"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Otros</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opOtro" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opOtro">normal</option>
                            <option value="ANOR" name="opOtro">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosOtro"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Piel</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Piel</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opPiel" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opPiel">normal</option>
                            <option value="ANOR" name="opPiel">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosPiel"></textarea>
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
        </div>

        <div class="expF1 item" data-number="3" id="expFisica1-2">
          <div class="expF1__title">
            <div class="expF1__title-container">
              <div class="expF1__title-container__icon"><i class="expF1__title-container__icon-ico fa fa-male"></i></div>
              <div class="expF1__title-container__tit">
                <h2 class="expF1__title-container__tit-h2">Exploración física (1.2)</h2>
              </div>
            </div>
          </div>
          <div class="expF1__form">
            <form class="expF1__form-container" id="exploracion1-2" method="post" action="">
              <div class="div">
                <div class="expF1__form-container__item">
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Cabeza y Cuello</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Tiroides</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opTiroides" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opTiroides">normal</option>
                            <option value="ANOR" name="opTiroides">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoTiroides"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Otros</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opOtro" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opOtro">normal</option>
                            <option value="ANOR" name="opOtro">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgoOtro"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Ojos</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Conjuntivas</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opConjuntivas" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opConjuntivas">normal</option>
                            <option value="ANOR" name="opConjuntivas">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosConjuntivas"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Córneas</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opCorneas" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opCorneas">normal</option>
                            <option value="ANOR" name="opCorneas">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosCorneas"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Oídos</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">C. auditivo</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opCAud" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opCAud">normal</option>
                            <option value="ANOR" name="opCAud">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosCAud"></textarea>
                        </div>
                      </div>
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Tímpanos</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opTimpano" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opTimpano">normal</option>
                            <option value="ANOR" name="opTimpano">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosTimpano"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expF1__form-container__item-wrapper">
                    <div class="expF1__form-container__item-wrapper-titApartado">
                      <h2 class="expF1__form-container__item-wrapper-titApartado-h2">Orofaringe</h2>
                    </div>
                    <div class="expF1__form-container__item-wrapper-boxCont">
                      <div class="expF1__form-container__item-wrapper-boxCont__content">
                        <div class="expF1__form-container__item-wrapper-boxCont__content-subtitle">
                          <h3 class="expF1__form-container__item-wrapper-boxCont__content-subtitle_h3">Orofaringe</h3>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-opt">
                          <select>
                            <option value="" name="opOrofaringe" selected="selected">Elije una opción..</option>
                            <option value="NORM" name="opOrofaringe">normal</option>
                            <option value="ANOR" name="opOrofaringe">anormal</option>
                          </select>
                        </div>
                        <div class="expF1__form-container__item-wrapper-boxCont__content-desc">
                          <textarea placeholder="Hallazgos" name="hallazgosOrofaringe"></textarea>
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
        </div>
      </div>
      <div class="control">
        <div class="control-Left"><i class="left fa fa-chevron-left" href="#myCarousel" role="button" data-slide="prev" id="left"></i></div>
        <div class="control-Right"><i class="right fa fa-chevron-right" href="#myCarousel" role="button" data-slide="next" id="right"></i></div>
      </div>
    </div>
  </section>
{!!Form::close() !!}


@endsection

@section('scripts')
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('js/medics/miApp.js')}}"></script>


@endsection
