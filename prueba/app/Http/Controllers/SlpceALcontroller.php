<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Factor;

class SlpceALcontroller extends Controller
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
        return view('apartments.slpce.antecLab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert current work
        for ($i = 1 ; $i <= (int) $request->get('cantPTA'); $i++) { 
            $work                = new Work;

            dd($request->all());
        
            $work->type          = 'A'.(String)$i;
            $work->center_work   = $request->get('ct1_'.(String)$i);
            $work->work_position = $request->get('pt1_'.(String)$i);
            $work->antiquity     = $request->get('tpa1_'.(String)$i).".".
                                   $request->get('tpm1_'.(String)$i);

                                   
            $activities = [
              $request->get('pa1_'.(String)$i.'_1'),  
              $request->get('pa1_'.(String)$i.'_2'),  
              $request->get('pa1_'.(String)$i.'_3')  
            ];

            $activitiesStr =  implode(', ', $activities);

            $work->activities    = $activitiesStr;
            $work->EPP           = $request->get('epp1_'.(String)$i);
            

            if(!empty($request->get('cualesAccidentes'))){
                $work->accidents     = $request->get('cualesAccidentes');
            }else{
                $work->accidents     = 'No se registraron accidentes';
            }

            $work->compilations_id='214413693';
            $work->save();
            
            for ($j=0; $j < sizeof($request->get('agentes'.(String)$i))-1; $j++) { 
                $factor = new Factor();

                $factor->conceptofactor = $request->get('agentes'.(String)$i)[$j];

                $id_work = Work::where('compilations_id', '214413693')
                               ->where('type','A'.(String)$i)
                               ->first();
                $factor->works_id = $id_work->id;

                $factor->save();
            }

            
            
        }

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
