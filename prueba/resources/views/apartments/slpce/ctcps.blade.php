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

{!! Form::open(['action' => 'SlpceController@store']) !!}
<section class="m-wrapper">
  <div class="m-center">
    <div class="slpce__header">
      <div class="slpce__header-container">
        <h2 class="slpce__header-container_h1">Estudio de las condiciones de trabajo de carácter psicosocial "CTCPS-MAC"</h2>
      </div>
      <div class="slpce__header-container">
        <p class="slpce__header-container_p">Debes responder cada una de las preguntas según los siguientes criterios (selecciona tu respuesta)</p>
      </div>
      <div class="slpce__header-container">
        <p class="slpce__header-container_li"><a class="icon-sad face"></a> - Estoy completamente en desacuerdo <a class="icon-confused face"></a> - Estoy en desacuerdo <a class="icon-neutral face"></a> - No estoy ni de acuerdo ni en desacuerdo <a class="icon-wondering face"></a> - Estoy de acuerdo <a class="icon-smile face"></a> - Estoy completamente de acuerdo </p>
      </div>
    </div>
    <div class="buttons">
      <p class="msjBtn">Click para mostrar y ocultar preguntas</p>
      <div class="btn-group">
        <p class="btn btn-primary bot1" type="button">1-15</p>
        <p class="btn btn-primary bot2" type="button">16-30</p>
        <p class="btn btn-primary bot3" type="button">31-45</p>
        <p class="btn btn-primary bot4" type="button">46-60</p>
        <p class="btn btn-primary bot5" type="button">61-75</p>
      </div>
    </div>
    <!--<form class="container" method="post" action="">-->
      <div class="table-responsive contenedor">
        <table class="table table-bordered">
          <thead>
            <tr id="stick">
              <th class="num">Nº</th>
              <th>ESTUDIO DE LAS CONDICIONES DE TRABAJO DE CARÁCTER PSICOSOCIAL</th>
              <th class="opt"> <a class="icon-sad" title="completamente en desacuerdo"></a></th>
              <th class="opt"><a class="icon-confused" title="en desacuerdo"></a></th>
              <th class="opt"><a class="icon-neutral" title="neutral"></a></th>
              <th class="opt"><a class="icon-wondering" title="de acuerdo"></a></th>
              <th class="opt"> <a class="icon-smile" title="completamente de acuerdo"></a></th>
            </tr>
          </thead>
          <tbody>
            <tr class="tr oneButt">
              <td class="num let">1</td>
              <td class="let">Conozco el sistema de cambios de categorías de la Universidad</td>
              <td class="opt">
                <input type="radio" name="p1" value="1" required="required" title="Estoy completamente en desacuerdo"/>
              </td>
              <td class="opt">
                <input type="radio" name="p1" value="2" title="Estoy en desacuerdo"/>
              </td>
              <td class="opt">
                <input type="radio" name="p1" value="3" title="No estoy ni de acuerdo ni en desacuerdo"/>
              </td>
              <td class="opt">
                <input type="radio" name="p1" value="4" title="Estoy de acuerdo"/>
              </td>
              <td class="opt">
                <input type="radio" name="p1" value="5" title="Estoy completamente de acuerdo"/>
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">2</td>
              <td class="let">Mi trabajo me permite la relación con otros</td>
              <td class="opt">
                <input type="radio" name="p2" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p2" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p2" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p2" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p2" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">3</td>
              <td class="let">El CUSur tiene políticas que facilitan el equilibrio entre trabajo/familia</td>
              <td class="opt">
                <input type="radio" name="p3" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p3" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p3" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p3" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p3" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">4</td>
              <td class="let">Mi edad es un inconveniente para mi desarrollo profesional</td>
              <td class="opt">
                <input type="radio" name="p4" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p4" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p4" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p4" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p4" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">5</td>
              <td class="let">Tengo dificultades para desplazarme a mi lugar de trabajo</td>
              <td class="opt">
                <input type="radio" name="p5" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p5" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p5" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p5" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p5" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">6</td>
              <td class="let">En el úlyimo año he sentido frecuentemente tensión y dolor muscular</td>
              <td class="opt">
                <input type="radio" name="p6" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p6" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p6" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p6" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p6" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">7</td>
              <td class="let">A menudo siento ganas de llorar sin motivo</td>
              <td class="opt">
                <input type="radio" name="p7" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p7" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p7" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p7" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p7" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">8</td>
              <td class="let">Falta cooperación de jefes, compañeros o subordinados (diferentes metas)</td>
              <td class="opt">
                <input type="radio" name="p8" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p8" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p8" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p8" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p8" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">9</td>
              <td class="let">En mi puesto de trabajo me siento aislado</td>
              <td class="opt">
                <input type="radio" name="p9" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p9" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p9" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p9" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p9" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">10</td>
              <td class="let">El CUSur facilita que pueda responder a mis responsabilidades familiares</td>
              <td class="opt">
                <input type="radio" name="p10" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p10" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p10" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p10" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p10" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">11</td>
              <td class="let">Me siento intranquilo</td>
              <td class="opt">
                <input type="radio" name="p11" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p11" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p11" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p11" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p11" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">12</td>
              <td class="let">Las situaciones negativas tienen efecto sobre mi salud</td>
              <td class="opt">
                <input type="radio" name="p12" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p12" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p12" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p12" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p12" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">13</td>
              <td class="let">Mi trabajo me permite ser creativo</td>
              <td class="opt">
                <input type="radio" name="p13" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p13" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p13" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p13" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p13" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">14</td>
              <td class="let">Mis jefes, compañeros y/o subordinados me apoyan en mi trabajo</td>
              <td class="opt">
                <input type="radio" name="p14" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p14" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p14" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p14" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p14" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr oneButt">
              <td class="num let">15</td>
              <td class="let">Tengo las mismas oportunidades que mis compañeros</td>
              <td class="opt">
                <input type="radio" name="p15" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p15" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p15" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p15" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p15" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">16</td>
              <td class="let">Desconozco las metas y funciones en mi puesto de trabajo</td>
              <td class="opt">
                <input type="radio" name="p16" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p16" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p16" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p16" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p16" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">17</td>
              <td class="let">El CUSur está geográficamente bien ubicado</td>
              <td class="opt">
                <input type="radio" name="p17" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p17" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p17" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p17" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p17" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">18</td>
              <td class="let">Me falta tiempo para acabar mi trabajo</td>
              <td class="opt">
                <input type="radio" name="p18" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p18" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p18" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p18" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p18" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">19</td>
              <td class="let">Siento falta de ánimos para hacer las cosas</td>
              <td class="opt">
                <input type="radio" name="p19" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p19" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p19" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p19" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p19" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">20</td>
              <td class="let">Frecuentemente tengo pensamientos negativos</td>
              <td class="opt">
                <input type="radio" name="p20" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p20" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p20" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p20" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p20" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">21</td>
              <td class="let">Cuando estoy muy nervioso puedo presentar irritaciones en la piel</td>
              <td class="opt">
                <input type="radio" name="p21" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p21" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p21" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p21" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p21" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">22</td>
              <td class="let">Existe falta de claridad en el funcionamiento de la cadena de mando</td>
              <td class="opt">
                <input type="radio" name="p22" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p22" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p22" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p22" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p22" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">23</td>
              <td class="let">Trabajo con productos tóxicos</td>
              <td class="opt">
                <input type="radio" name="p23" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p23" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p23" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p23" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p23" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">24</td>
              <td class="let">las relaciones personales con mis compañeros son buenas</td>
              <td class="opt">
                <input type="radio" name="p24" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p24" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p24" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p24" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p24" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">25</td>
              <td class="let">Durante los últimos doce meses he sentido dificultades respiratorias</td>
              <td class="opt">
                <input type="radio" name="p25" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p25" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p25" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p25" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p25" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">26</td>
              <td class="let">Me siento muy cansado</td>
              <td class="opt">
                <input type="radio" name="p26" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p26" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p26" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p26" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p26" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">27</td>
              <td class="let">Soy una persona segura de sí misma</td>
              <td class="opt">
                <input type="radio" name="p27" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p27" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p27" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p27" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p27" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">28</td>
              <td class="let">Cuando estoy alterado siento picor en la piel</td>
              <td class="opt">
                <input type="radio" name="p28" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p28" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p28" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p28" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p28" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">29</td>
              <td class="let">Conozco exactamente la cadena de mando y jerarquías en el CUSur</td>
              <td class="opt">
                <input type="radio" name="p29" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p29" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p29" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p29" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p29" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr twoButt">
              <td class="num let">30</td>
              <td class="let">En mi lugar de trabajo hay contaminantes</td>
              <td class="opt">
                <input type="radio" name="p30" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p30" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p30" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p30" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p30" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">31</td>
              <td class="let">Conozco exactamente las normas y procedimientos para realizar mi tarea</td>
              <td class="opt">
                <input type="radio" name="p31" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p31" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p31" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p31" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p31" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">32</td>
              <td class="let">dispongo de tiempo suficiente para realizar mis tareas</td>
              <td class="opt">
                <input type="radio" name="p32" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p32" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p32" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p32" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p32" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">33</td>
              <td class="let">Utilizo frecuentemente los servicios de salud</td>
              <td class="opt">
                <input type="radio" name="p33" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p33" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p33" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p33" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p33" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">34</td>
              <td class="let">Mi jornada laboral habitualmente se alarga por encima del horario establecido</td>
              <td class="opt">
                <input type="radio" name="p34" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p34" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p34" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p34" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p34" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">35</td>
              <td class="let">Los conflictos con otras personas los resuelvo satisfactoriamente</td>
              <td class="opt">
                <input type="radio" name="p35" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p35" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p35" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p35" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p35" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">36</td>
              <td class="let">Soy una persona animosa y alegre</td>
              <td class="opt">
                <input type="radio" name="p36" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p36" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p36" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p36" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p36" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">37</td>
              <td class="let">Siempre busco lo positivo aún en las situaciones más adversas</td>
              <td class="opt">
                <input type="radio" name="p37" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p37" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p37" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p37" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p37" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">38</td>
              <td class="let">Acepto bien los cambios y me adapto con facilidad</td>
              <td class="opt">
                <input type="radio" name="p38" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p38" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p38" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p38" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p38" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">39</td>
              <td class="let">El CUSur no reconoce recompensa al trabajo bien hecho</td>
              <td class="opt">
                <input type="radio" name="p39" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p39" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p39" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p39" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p39" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">40</td>
              <td class="let">Dispongo de tiempo para participar en actividades ajenas al trabajo</td>
              <td class="opt">
                <input type="radio" name="p40" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p40" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p40" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p40" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p40" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">41</td>
              <td class="let">Me cuesta aceptar cambios</td>
              <td class="opt">
                <input type="radio" name="p41" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p41" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p41" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p41" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p41" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">42</td>
              <td class="let">Las tareas que realizo con monótonas</td>
              <td class="opt">
                <input type="radio" name="p42" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p42" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p42" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p42" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p42" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">43</td>
              <td class="let">El CUSur está situado en un lugar apartado</td>
              <td class="opt">
                <input type="radio" name="p43" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p43" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p43" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p43" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p43" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">44</td>
              <td class="let">El ritmo y cantidad de trabajo es adecuado a la jornada laboral</td>
              <td class="opt">
                <input type="radio" name="p44" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p44" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p44" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p44" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p44" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr threeButt">
              <td class="num let">45</td>
              <td class="let">Tengo control sobre la forma de realizar mi trabajo</td>
              <td class="opt">
                <input type="radio" name="p45" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p45" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p45" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p45" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p45" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">46</td>
              <td class="let">Me gustan las tareas que realizo en mi puesto de trabajo</td>
              <td class="opt">
                <input type="radio" name="p46" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p46" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p46" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p46" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p46" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">47</td>
              <td class="let">En mi puesto de trabajo hay ruido </td>
              <td class="opt">
                <input type="radio" name="p47" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p47" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p47" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p47" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p47" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">48</td>
              <td class="let">Soy una persona abierta y flexible</td>
              <td class="opt">
                <input type="radio" name="p48" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p48" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p48" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p48" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p48" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">49</td>
              <td class="let">Mi puesto de trabajo no me èrmite desarrollar todas mis capacidades</td>
              <td class="opt">
                <input type="radio" name="p49" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p49" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p49" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p49" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p49" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">50</td>
              <td class="let">Me siento orgulloso de trabajar en el CUSur</td>
              <td class="opt">
                <input type="radio" name="p50" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p50" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p50" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p50" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p50" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">51</td>
              <td class="let">El CUSur valora mi trabajo</td>
              <td class="opt">
                <input type="radio" name="p51" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p51" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p51" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p51" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p51" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">52</td>
              <td class="let">Durante mi horario de trabajo puedo desarrollar adecuadamente mis tareas</td>
              <td class="opt">
                <input type="radio" name="p52" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p52" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p52" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p52" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p52" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">53</td>
              <td class="let">Durante los últimos doce meses he tenido úlceras o alteraciones digestivas</td>
              <td class="opt">
                <input type="radio" name="p53" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p53" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p53" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p53" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p53" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">54</td>
              <td class="let">En situaciones difíciles siempre busco el aspecto positivo</td>
              <td class="opt">
                <input type="radio" name="p54" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p54" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p54" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p54" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p54" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">55</td>
              <td class="let">Mi trabajo cumple mis expectativas y aspiraciones</td>
              <td class="opt">
                <input type="radio" name="p55" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p55" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p55" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p55" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p55" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">56</td>
              <td class="let">En mi puesto de trabajo se producen cambios respecto a la carga de trabajo</td>
              <td class="opt">
                <input type="radio" name="p56" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p56" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p56" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p56" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p56" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">57</td>
              <td class="let">La cantidad de trabajo que tengo asignada es muy superior al tiempo que dispongo para realizarla</td>
              <td class="opt">
                <input type="radio" name="p57" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p57" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p57" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p57" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p57" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">58</td>
              <td class="let">Mi trabajo no me satisface</td>
              <td class="opt">
                <input type="radio" name="p58" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p58" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p58" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p58" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p58" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">59</td>
              <td class="let">Tengo el apoyo de las personas que me rodean</td>
              <td class="opt">
                <input type="radio" name="p59" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p59" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p59" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p59" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p59" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fourButt">
              <td class="num let">60</td>
              <td class="let">En mi trabajo existe peligro de accidentes</td>
              <td class="opt">
                <input type="radio" name="p60" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p60" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p60" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p60" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p60" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">61</td>
              <td class="let">El ritmo de trabajo en mi puesto es muy elevado</td>
              <td class="opt">
                <input type="radio" name="p61" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p61" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p61" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p61" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p61" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">62</td>
              <td class="let">Cuando hago esfuerzo siento sensación de ahogo</td>
              <td class="opt">
                <input type="radio" name="p62" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p62" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p62" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p62" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p62" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">63</td>
              <td class="let">En el CUSur existen canales adecuados de participación y comunicación</td>
              <td class="opt">
                <input type="radio" name="p63" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p63" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p63" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p63" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p63" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">64</td>
              <td class="let">Tengo un horario flexible compatible con mis responsabilidades familiares</td>
              <td class="opt">
                <input type="radio" name="p64" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p64" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p64" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p64" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p64" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">65</td>
              <td class="let">En el último año me he enfermado con más frecuencia</td>
              <td class="opt">
                <input type="radio" name="p65" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p65" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p65" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p65" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p65" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">66</td>
              <td class="let">En general estoy satisfecho con mi vida laboral</td>
              <td class="opt">
                <input type="radio" name="p66" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p66" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p66" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p66" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p66" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">67</td>
              <td class="let">El CUSur me da facilidades para acudir a una emergencia familiar</td>
              <td class="opt">
                <input type="radio" name="p67" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p67" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p67" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p67" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p67" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">68</td>
              <td class="let">En mi puesto de trabajo la temperatura es fría</td>
              <td class="opt">
                <input type="radio" name="p68" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p68" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p68" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p68" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p68" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">69</td>
              <td class="let">Mis competencias y responsabilidades están claramente definidas </td>
              <td class="opt">
                <input type="radio" name="p69" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p69" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p69" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p69" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p69" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">70</td>
              <td class="let">Mi horario de trabajo dificulta mi vida social y personal</td>
              <td class="opt">
                <input type="radio" name="p70" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p70" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p70" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p70" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p70" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">71</td>
              <td class="let">Trabajo con sustancias tóxicas y peligrosas</td>
              <td class="opt">
                <input type="radio" name="p71" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p71" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p71" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p71" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p71" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">72</td>
              <td class="let">Los equipos y herramientas que utilizo para desarrollar mi trabajo son seguros</td>
              <td class="opt">
                <input type="radio" name="p72" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p72" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p72" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p72" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p72" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">73</td>
              <td class="let">Desconozco como debo realizar mi trabajo exactamente</td>
              <td class="opt">
                <input type="radio" name="p73" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p73" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p73" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p73" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p73" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">74</td>
              <td class="let">En mi puesto de trabajo hay un alto grado de humedad</td>
              <td class="opt">
                <input type="radio" name="p74" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p74" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p74" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p74" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p74" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
            <tr class="tr fiveButt">
              <td class="num let">75</td>
              <td class="let">En mi puesto de trabajo estoy sometido a vibraciones</td>
              <td class="opt">
                <input type="radio" name="p75" value="1" required="required" title="Estoy completamente en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p75" value="2" title="Estoy en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p75" value="3" title="No estoy ni de acuerdo ni en desacuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p75" value="4" title="Estoy de acuerdo" />
              </td>
              <td class="opt">
                <input type="radio" name="p75" value="5" title="Estoy completamente de acuerdo" />
              </td>
            </tr>
          </tbody>
        </table>
        <div class="comentarios container">
          <div class="comentarios__tit">
            <h3>Comentarios: </h3>
          </div>
          <div class="comentarios__txt">
            <textarea name="comentariosCuest" placeholder="Utiliza éste espacio si desea comentar alguna situación que no haya ido tratada en ésta evaluación"></textarea>
          </div>
        </div>
        <div class="p76 container contenedor">
          <div class="p76__tit">
            <h3>76. Arrastra el número a la tabla según la prioridad del taller, en caso de ser uno distinto arrastrarlo al campo de texto y describirlo.</h3>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="tabOpt">
              <tr>
                <td class="let">Alimentación-Nutrición</td>
                <td class="num">
                  <li class="op1" name="ALNU" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
                <td class="let">Habilidades sociales</td>
                <td class="num">
                  <li class="op2" name="HASO" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
              </tr>
              <tr>
                <td class="let">Activación física</td>
                <td class="num">
                  <li class="op3" name="ACFI" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
                <td class="let">Manejo de estrés</td>
                <td class="num">
                  <li class="op4" name="MAES" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
              </tr>
              <tr>
                <td class="let">Plan integral de vida</td>
                <td class="num">
                  <li class="op5" name="PLIN" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
                <td class="let">Sistema de pensión y seguro</td>
                <td class="num">
                  <li class="op6" name="SIPE" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
              </tr>
              <tr>
                <td class="let">Dinámica familiar</td>
                <td class="num">
                  <li class="op7" name="DIFA" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
                <td class="let">Manejo de la adversidad (resiliencia)</td>
                <td class="num">
                  <li class="op8" name="MAAD" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
                </td>
              </tr>
            </table>
          </div>
          <div class="dragable contDragDrop" ondrop="drop(event)" ondragover="allowDrop(event)"><input value="1" draggable="true" ondragstart="drag(event)" type="text" disabled id="drag1" class="dragable-item"></input>
<input value="2" draggable="true" ondragstart="drag(event)" type="text" disabled id="drag2" class="dragable-item"></input>
<input value="3" draggable="true" ondragstart="drag(event)" type="text" disabled id="drag3" class="dragable-item"></input>
          </div>
          <div class="p76__otro container">
            <div class="p76__otro-li">
              <li class="opOtro" name="OTRO" ondrop="drop(event)" ondragover="allowDrop(event)"></li>
            </div>
            <textarea class="otro76" placeholder="Otro, especificar" name="p76Otro"></textarea>
          </div>
        </div>
        <div class="p77 container contenedor">
          <div class="p77__txt">
            <h3>77. Me doy cuenta que se realizan acciones para ser un centro saludable, incluyente, seguro y sustentable.</h3>
          </div>
          <div class="p77__opt">
            <div class="p77__opt-item"><input type="radio" name="p77" value="SI" required> SI </input></div>
            <div class="p77__opt-item"><input type="radio" name="p77" value="NO" require> NO </input></div>
          </div>
        </div>
        <div class="p78 container contenedor">
          <div class="p78__txt">
            <h3>78. En mi opinión lo que ahora nos hace falta en el CUSur es:</h3>
          </div>
          <div class="p78__desc">
            <textarea name="p78Desc" placeholder="Descripción opcional"></textarea>
          </div>
        </div>
        <div class="form-button">
          <button class="button btnslpce" type="submit">Guardar</button>
        </div>
      </div>
    <!--</form>-->
  </div>
</section>
{!!Form::close() !!}
@endsection

@section('scripts')
    <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('node_modules/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/slpce/tableOpt.js')}}"></script>
  @endsection
