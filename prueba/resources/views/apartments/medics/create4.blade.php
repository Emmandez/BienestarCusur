


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



  {!! Form::open(['action' => 'MedicsController@store']) !!}


  <section class="m-wrapper container-fluid">
    <div class="m-center container">
      <div class="headerMedics carousel_indicators container links">
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#heredoFamiliar" data-target="#myCarousel" data-slide-to="0">Antecedentes heredo-familiares</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#patologicas" data-target="#myCarousel" data-slide-to="1">Antecedentes patológicos</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#noPatologicas" data-target="#myCarousel" data-slide-to="2">Antecedentes no patológicos</h2>
        </div>
        <div class="headerMedics__arrowContainer"><i class="headerMedics__arrowContainer-arrow fa fa-arrow-right"></i></div>
        <div class="headerMedics__titleContainer">
          <h2 class="indicator headerMedics__titleContainer-title" href="#gineco-obst" data-target="#myCarousel" data-slide-to="3">Antecedentes gineco-obstétricos</h2>
        </div>
      </div>
      <div class="carousel slide carousel-inner col-md-12" data-interval="false" id="myCarousel">
        <ol class="carousel-indicators">
          <li class="indicator active" data-target="#myCarousel" data-slide-to="0"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="1"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="2"></li>
          <li class="indicator" data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="heredofam item active col-md-12" data-number="0" id="heredoFamiliar">
          <div class="heredofam__title">
            <div class="heredofam__title-container">
              <div class="heredofam__title-container__icon"><i class="heredofam__title-container__icon-ico fa fa-medkit"></i></div>
              <div class="heredofam__title-container__tit">
                <h2 class="heredofam__title-container__tit-h2">Antecedentes heredo-familiares</h2>
              </div>
            </div>
          </div>
          <div class="heredofam__form">
            <form class="heredofam__form-container container" id="hFamiliar">
              <div class="div-container form-group">
                <div class="heredofam__form-container__item">
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Diabetes mellitus:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="siDiab" type="radio" name="diabetes" value="DIME"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="noDiab" type="radio" name="diabetes" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="diabOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="diabLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="diabLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Sobrepeso:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="siSp" type="radio" name="sobrepeso" value="SOBR"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="noSp" type="radio" name="sobrepeso" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="spOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="spLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="spLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Cardiopatías:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="siCp" type="radio" name="cardiopatias" value="CARD"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="noCp" type="radio" name="cardiopatias" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="cpOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="cardioLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="cardioLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Malformaciones:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="siMf" type="radio" name="malformaciones" value="MALF"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required id="noMf" type="radio" name="malformaciones" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="mfOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="malfLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="malfLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="heredofam__form-container__item">
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Cáncer:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="siCancer" name="cancer" value="CANC"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="noCancer" name="cancer" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="cancerOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="cancerLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="cancerLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Hipertensión arterial:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="siHipertension" name="hipertension" value="HIAR"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="noHipertension" name="hipertension" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="hipOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="hipertensionLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="hipertensionLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Enfermedades respiratorias:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="siEnfResp" name="enfRespiratorias" value="ENRE"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="noEnfResp" name="enfRespiratorias" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="enfResOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="enfRespLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="enfRespLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc">
                      <h3>Nefropatías:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="siNefropatias" name="nefropatías" value="NEFR"> si </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt1-in"><input required type="radio" id="noNefropatias" name="nefropatías" value=""> no </input></div>
                      </div>
                      <div class="opt2 heredofam__form-container__item-wrap__response-opt2" id="nefroOpt">
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="nefropatiasLevel" value="PRLI"> Primera línea </input></div>
                        <div class="heredofam__form-container__item-wrap__response-opt2-in"><input type="radio" name="nefropatiasLevel" value="SELI"> Segunda línea </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="heredofam__form-container__item-wrap">
                    <div class="heredofam__form-container__item-wrap__desc" id="other">
                      <h3>Otro:</h3>
                    </div>
                    <div class="heredofam__form-container__item-wrap__response" id="textarea">
                      <div class="heredofam__form-container__item-wrap__response-opt1">
                        <div class="heredofam__form-container__item-wrap__response-opt1-in">
                          <textarea name="descOtro" placeholder="descripción opcional"></textarea>
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
        <div class="patologicas item" data-number="1" id="patologicas">
          <div class="patologicas__title">
            <div class="patologicas__title-container">
              <div class="patologicas__title-container__icon"><i class="patologicas__title-container__icon-ico fa fa-user-md"></i></div>
              <div class="patologicas__title-container__tit">
                <h2 class="patologicas__title-container__tit-h2">Antecedentes patológicos</h2>
              </div>
            </div>
          </div>
          <div class="patologicas__form">
            <form class="patologicas__form-container" id="patologics">
              <div class="div">
                <div class="patologicas__form-container__item">
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Enfermedades de la infancia:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siInf" type="radio" name="infancia" value="ENIN"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noInf" type="radio" name="infancia" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="infOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in"><input type="text" name="enfInfancia"  placeholder="¿Cuál?"></input>
                          <textarea name="descEnfInfancia" placeholder="descríbela"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Hospitalizaciones:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siHosp" type="radio" name="hospitalizaciones" value="HOSP"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noHosp" type="radio" name="hospitalizaciones" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="hospOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descHospitalizaciones" placeholder="descríbela"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Cirugías:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siCir" type="radio" name="cirugias" value="CIRU"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noCir" type="radio" name="cirugias" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="cirOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descCirugias" placeholder="descríbela"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Transfusiones:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siTf" type="radio" name="transfuciones" value="TRAN"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noTf" type="radio" name="transfuciones" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="tfOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descTransfuciones" placeholder="descríbela"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="patologicas__form-container__item">
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Fracturas:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="fracturas" value="FRAC"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="fracturas" value=""> no </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Accidentes/Traumatismo:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="traumaticos" value="ACTR"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="traumaticos" value=""> no </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Medicación:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siMedicacion" type="radio" name="medicacion" value="MEDI"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noMedicacion" type="radio" name="medicacion" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="medicacionOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descMedicacion" placeholder="descríbela"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="patologicas__form-container__item-wrap">
                    <div class="patologicas__form-container__item-wrap__desc">
                      <h3>Otra enfermedad:</h3>
                    </div>
                    <div class="patologicas__form-container__item-wrap__response">
                      <div class="patologicas__form-container__item-wrap__response-opt1">
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="siOE" type="radio" name="otaEnf" value="OTEN"> si </input></div>
                        <div class="patologicas__form-container__item-wrap__response-opt1-in"><input required id="noOE" type="radio" name="otaEnf" value=""> no </input></div>
                      </div>
                      <div class="opt2 patologicas__form-container__item-wrap__response-opt2" id="oeOpt">
                        <div class="patologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descOtraEnfermedad" placeholder="descripción opcional"></textarea>
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
        <div class="noPatologicas item" data-number="2" id="noPatologicas">
          <div class="noPatologicas__title">
            <div class="noPatologicas__title-container">
              <div class="noPatologicas__title-container__icon"><i class="noPatologicas__title-container__icon-ico fa fa-user-md"></i></div>
              <div class="noPatologicas__title-container__tit">
                <h2 class="noPatologicas__title-container__tit-h2">Antecedentes no patológicos</h2>
              </div>
            </div>
          </div>
          <div class="noPatologicas__form">
            <form class="noPatologicas__form-container" id="noPatologics">
              <div class="div">
                <div class="noPatologicas__form-container__item">
                  <div class="noPatologicas__form-container__item-wrap">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Tabaquismo:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="siTab" type="radio" name="tabaquismo" value="TABA"> si </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="noTab" type="radio" name="tabaquismo" value=""> no </input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="tabOpt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in"><input class="numbers" type="number" name="cigXDia" min="0" placeholder="por día"></input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="tabOpt2">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in"><input class="numbers" type="number" name="cigXAnio" min="0" placeholder="años de consumo"></input></div>
                      </div>
                      <div class="noPatologicas__form-container__item-wrap__response-opt2">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in">
                          <label>ex fumador</label>
                          <select>
                            <option value="EXFU" name="ex-fumador" required="required">si</option>
                            <option value="" name="ex-fumador" required="required" selected="selected">no</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="noPatologicas__form-container__item-wrap">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Alcoholismo:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="siAlc" type="radio" name="alcoholismo" value="ALCO"> si </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="noAlc" type="radio" name="alcoholismo" value=""> no </input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="alcOpt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in"><input class="numbers" type="number" name="copasXSemana" min="0" placeholder="copas por semana"></input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="alcOpt2">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in"><input class="numbers" type="number" name="copasXAnio" min="0" placeholder="años de consumo"></input></div>
                      </div>
                      <div class="noPatologicas__form-container__item-wrap__response-opt2">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in">
                          <label>ex alcoholico</label>
                          <select>
                            <option value="EXAL" name="ex-alcoholico" required="required">si</option>
                            <option value="" name="ex-alcoholico" required="required" selected="selected">no</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="noPatologicas__form-container__item-wrap">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Alergias:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="siAlerg" type="radio" name="alergias" value="ALER"> si </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="noAlerg" type="radio" name="alergias" value=""> no </input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="alergOpt">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in">
                          <textarea name="descAlergias" placeholder="descripción"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="noPatologicas__form-container__item-wrap">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Alimentacion adecuada:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="alimentacion" value="ALAD"> si </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required type="radio" name="alimentacion" value=""> no </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="sangre noPatologicas__form-container__item-wrap">
                    <div class="sangreDesc noPatologicas__form-container__item-wrap__desc">
                      <h3>Tipo de sangre:</h3>
                    </div>
                    <div class="sangreRes noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in">
                          <select>
                            <option name="tipoSangre" required="required" value="A+">A+</option>
                            <option name="tipoSangre" required="required" value="A-">A-</option>
                            <option name="tipoSangre" required="required" value="B+">B+</option>
                            <option name="tipoSangre" required="required" value="B-">B-</option>
                            <option name="tipoSangre" required="required" value="C+">C+</option>
                            <option name="tipoSangre" required="required" value="C-">C-</option>
                            <option name="tipoSangre" required="required" value="AB+">AB+</option>
                            <option name="tipoSangre" required="required" value="AB-">AB-</option>
                            <option name="tipoSangre" required="required" value="SEDE" selected="selected">Se desconoce</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="noPatologicas__form-container__item">
                  <div class="noPatologicas__form-container__item-wrap" id="vivienda">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Vivienda con los siguientes servicios:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input type="radio" name="luz" value="LUZ"> Luz </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input type="radio" name="agua" value="AGPO"> Agua potable </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input type="radio" name="drenaje" value="DREN"> Drenaje </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input type="radio" name="piso" value="PIFI"> Piso firme </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input type="radio" name="movilidad" value="MOVI"> Movilidad </input></div>
                      </div>
                    </div>
                  </div>
                  <div class="noPatologicas__form-container__item-wrap">
                    <div class="noPatologicas__form-container__item-wrap__desc">
                      <h3>Toxicomanias:</h3>
                    </div>
                    <div class="noPatologicas__form-container__item-wrap__response">
                      <div class="noPatologicas__form-container__item-wrap__response-opt1">
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="siTox" type="radio" name="taxicomanias" value="TOXI"> si </input></div>
                        <div class="noPatologicas__form-container__item-wrap__response-opt1-in"><input required id="noTox" type="radio" name="taxicomanias" value=""> no </input></div>
                      </div>
                      <div class="opt2 noPatologicas__form-container__item-wrap__response-opt2" id="toxOpt">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in"><input class="numbers" type="number" name="añosConsumoDrogas" min="0" placeholder="años de consumo"></input></div>
                      </div>
                      <div class="noPatologicas__form-container__item-wrap__response-opt2">
                        <div class="noPatologicas__form-container__item-wrap__response-opt2-in">
                          <label>ex drogadicto</label>
                          <select>
                            <option value="EXDR" name="ex-drogadicto" required="required">si</option>
                            <option value="" name="ex-drogadicto" required="required" selected="selected">no</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tatuajes">
                    <div class="tatuajes-item">
                      <div class="tatuajes-item__tit">
                        <h3>Tatuajes</h3>
                      </div>
                      <div class="tatuajes-item__desc">
                        <textarea placeholder="descripcion opcional" name="descTatuajes"></textarea>
                      </div>
                    </div>
                    <div class="tatuajes-item">
                      <div class="tatuajes-item__tit">
                        <h3>Inmunizaciones</h3>
                      </div>
                      <div class="tatuajes-item__desc">
                        <textarea placeholder="descripcion opcional" name="descInmunizaciones"></textarea>
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
        <div class="gineco item" data-number="3" id="gineco-obst">
          <div class="gineco__title">
            <div class="gineco__title-container">
              <div class="gineco__title-container__icon"><i class="gineco__title-container__icon-ico fa fa-female"></i></div>
              <div class="gineco__title-container__tit">
                <h2 class="gineco__title-container__tit-h2">Antecedentes gineco-obstétricos</h2>
              </div>
            </div>
          </div>
          <div class="gineco__form">
            <form class="gineco__form-container" id="ginObs">
              <div class="div">
                <div class="gineco__form-container__item">
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Menarca:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input type="date" name="menarca"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Ciclos regulares:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <select>
                        <option name="cicloRegular" value="CIRE">si</option>
                        <option name="cicloRegular" value="" selected="selected">no</option>
                      </select>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Ritmo:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input class="ritmo" id="ritmo" name="ritmo" type="text" placeholder="Ej. 31/05"/>
                      <div class="msjError"><i class="fa fa-exclamation-triangle"></i>
                        <p class="msj">Ingresa datos válidos!!</p>
                      </div>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Últ. menstruación:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input type="date" name="ultMenstruacion"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Polimenorrea:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <select>
                        <option required="required" name="polimenorrea" value="POLI">si</option>
                        <option selected="selected" required="required" name="polimenorrea" value="">no</option>
                      </select>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Hipermenorrea:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <select>
                        <option required="required" name="hipermenorrea" value="HIPE">si</option>
                        <option selected="selected" required="required" name="hipermenorrea" value="">no</option>
                      </select>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Dismenorrea:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <select>
                        <option required="required" name="dismenorrea" value="DISM">si</option>
                        <option selected="selected" required="required" name="dismenorrea" value="">no</option>
                      </select>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="ivsaDesc gineco__form-container__item-wrap__desc">
                      <h3>Inicio de vida sexual activa:</h3>
                    </div>
                    <div class="ivsaRes gineco__form-container__item-wrap__response">
                      <input type="number" min="0" name="ivsa"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Parejas sexuales:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input required="required" type="number" min="0" name="parejasSexuales"/>
                    </div>
                  </div>
                  <div class="planFam gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Método de planificación familiar:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <textarea required="required" name="planFamiliar" placeholder="Descríbelo"></textarea>
                    </div>
                  </div>
                </div>
                <div class="gineco__form-container__item">
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Gestaciones:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input required="required" type="number" min="0" name="gestaciones"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Abortos:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input required="required" type="number" min="0" name="abortos"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Partos:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input required="required" type="number" min="0" name="partos"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Cesáreas:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input required="required" type="number" min="0" name="cesareas"/>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Últ. citología:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input type="date" name="ultCitologia"/>
                      <textarea placeholder="Resultados" name="resultCitologia"></textarea>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="gineco__form-container__item-wrap__desc">
                      <h3>Últ. mastografía:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <input type="date" name="ultMastografia"/>
                      <textarea placeholder="Resultados" name="resultMastografia"></textarea>
                    </div>
                  </div>
                  <div class="gineco__form-container__item-wrap">
                    <div class="vph gineco__form-container__item-wrap__desc">
                      <h3>Detección de VPH:</h3>
                    </div>
                    <div class="gineco__form-container__item-wrap__response">
                      <select class="vphSelect" id="vph">
                        <option id="siVPH" required="required" name="vph" value="si">si</option>
                        <option id="noVPH" required="required" name="vph" value="no" selected="selected">no</option>
                      </select>
                      <textarea class="txtA opt2" name="resVPH" placeholder="Resultado" id="vphDesc"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-button">
                <button class="button" onclick="expRegular()" type="submit" id="gin">Guardar</button>
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
    <script  src="{{asset('node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script  src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/wow.js/dist/wow.min.js')}}"></script>


    <script src="{{asset('js/medics/miApp.js')}}"> </script>
  @endsection
