{{-- Inherits from partial layout 'layouts' --}}
@extends('layouts.app')
{{-- Inherited layout --}}
@section('content')
    <h2 class="text-center">Registros</h2>
    <br>
    @if(count($records) == 0)
        <h3 class="text-center">No hay registros aún..</h3>
        {{-- FILL OUT TABLE  --}}
    @else
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th class="text-center">#</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $patient)
                @foreach($patient->VitalSigns as $item)
                    <tr>
                        <td class="text-center">{{count($records)}}</td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{url('nutriology/create')}}" class="btn btn-success">Capturar nuevo</a>

@endsection
