<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\MedicalForecast;

class DiagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('apartments.diagnostic.diagnosticos_tratamientos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        si todos están llenos, insertar primero los del splce y nutricion, ya que son los que
        coinciden en campos.
        Para el de médicos, insertarlo fuera del clico for, ya que tiene un campo de más
        */
        $checks = [
            $request->get(),
            $request->get(),
            $request->get()
        ];

        $observations = [
        ];

        $treatments = [
        ];

        for ($i=0; $i <2 ; $i++) { 
            if(!empty($checks[$i])){
                $treatment = new Treatment;
                $treatment = fillData($observations[$i], $treatement[$i]);


            }
        }


    }

    private function fillData($Observation, $Recomendation){
        $treatement = new Treatment;
        $treatement->observation  = $Observation;
        $treatement->treatment = $Recomendation;

        return $treatement;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
