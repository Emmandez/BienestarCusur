<?php
# DRY URLS
$NurseryURL = url('nursery/create');
$MedicsURL = url('medics/create');
$SlpceURL = url('slpce/create');
$NutURL = url('nutriology/create');
$LabsURL = url('laboratory/create');
$ReportsURL = url('reports/create');
?>
<div class="list-group sidebar-list">
    <li><a href="{{url('/')}}" class="{{ active('/') }} list-group-item text-center"><i class="fa fa-home"></i>
            Inicio</a></li>
    <li><a href="{{ $NurseryURL }}" class="{{ active('nursery.*') }} list-group-item text-center"><i
                    class="fa fa-stethoscope"></i> Enfermería</a>
    </li>
    <li class="dropdown">
        <a class="{{ active('medics.*') }} list-group-item text-center dropdown-toggle btn" data-toggle="dropdown">
            <i class="fa fa-user-md"></i>
            Médicos
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="{{ $MedicsURL }}">Antecedentes</a></li>
            <li class="divider"></li>
            <li><a href="#">Exploraciones</a></li>
        </ul>
    </li>
    <li><a href="{{ $SlpceURL }}" class="{{ active('slpce.*') }} list-group-item text-center"><i
                    class="fa fa-ambulance"></i>
            SLPCE</a></li>
    <li><a href="{{ $NutURL }}" class="{{ active('nutriology.*') }} list-group-item text-center"><i
                    class="fa fa-cutlery"></i>
            Nutriología</a></li>
    <li><a href="{{ $LabsURL }}" class="{{ active('labs.*') }} list-group-item text-center"><i
                    class="fa fa-flask"></i>
            Laboratoriales</a></li>
    <li><a href="{{ $ReportsURL }}" class="{{ active('reports.*') }} list-group-item text-center"><i
                    class="fa fa-folder"></i>
            Reportes</a></li>
</div>
