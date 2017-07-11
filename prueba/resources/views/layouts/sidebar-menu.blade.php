<?php
# DRY URLS
$NurseryURL     = url('nursery/create');
$MedicsURL      = url('medics/create');
$MedicsExpURL   = url('medicsExp/create');
$SlpceURL_CTCPS = url('slpce/create');
$SlpceURL_AL    = url('slpceAL/create');
$SlpceURL_EML   = url('slpceEML/create');
$NutURL         = url('nutriology/create');
$LabsURL        = url('laboratory/create');
$ReportsURL     = url('reports/create');
$DiagURL        = url('diagnostic/create');
?>
<div class="list-group sidebar-list">
    <li>
        <a href="{{url('/')}}" class="{{ active('/') }} list-group-item text-center">
            <i class="fa fa-home"></i>
            Inicio
        </a>
    </li>

    <li>
        <a href="{{ $NurseryURL }}" class="{{ active('nursery.*') }} list-group-item text-center">
            <i class="fa fa-stethoscope"></i>
            Enfermería
        </a>
    </li>

    <!--barra de navegación con menú desplegable para apartado de médicos-->
    <li class="dropdown">
        <a id="togController" class="{{ active('medics.*') }} btn dropdown-toggle list-group-item text-center" data-toggle="dropdown">
            <i class="fa fa-user-md"></i>
            Médicos
        </a>
        <ul id="itemTog" class="dropdown-menu dropdown-menu-right">
            <li><a href="{{ $MedicsURL }}">Antecedentes</a></li>
            <li class="divider"></li>
            <li><a href="{{ $MedicsExpURL }}">Exploraciones</a></li>
        </ul>
    </li>

    <!--barra de navegación con menú desplegable para apartado de slpce-->
    <li class="dropdown">
        <a id="slpceTogController" class="{{ active('slpce.*') }} btn dropdown-toggle list-group-item text-center" data-toggle="dropdown">
            <i class="fa fa-ambulance"></i>
            SLPCE
        </a>
        <ul id="slpceItemTog" class="dropdown-menu dropdown-menu-right" >
            <li><a href="{{ $SlpceURL_AL }}">Antecedentes laborales</a></li>
            <li class="divider"></li>
            <li><a href="{{ $SlpceURL_EML }}">Expediente médico laboral</a></li>
            <li class="divider"></li>
            <li><a href="{{ $SlpceURL_CTCPS }}">CTCPS-MAC</a></li>
        </ul>
    </li>

    <li><a href="{{ $NutURL }}" class="{{ active('nutriology.*') }} list-group-item text-center"><i
                    class="fa fa-cutlery"></i>
            Nutriología</a></li>
    <li><a href="{{ $LabsURL }}" class="{{ active('laboratory.*') }} list-group-item text-center"><i
                    class="fa fa-flask"></i>
            Laboratoriales</a></li>
    <li><a href="{{ $ReportsURL }}" class="{{ active('reports.*') }} list-group-item text-center"><i
                    class="fa fa-folder"></i>
            Reportes</a></li>
    <li><a href="{{ $DiagURL }}" class="{{ active('diagnostic.*') }} list-group-item text-center"><i
                    class="fa fa-file-text"></i>
            Diagnósticos y Tratamientos</a></li>
</div>
