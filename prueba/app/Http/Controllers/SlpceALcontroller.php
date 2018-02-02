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

        /**
       count how many jobs do they have
       $workNumber =  (int) $request->get('cantPTA') + (int)$request->get('cantPTAI');
       echo $workNumber;

       $arrayRequest = $request->all();

       echo $arrayRequest["cantPTA"];
       echo $arrayRequest["empAntInm"];

       echo dd($arrayRequest);
       */
       $codigoUsuario = '214413693';

        //insert current work
        for ($i = 1 ; $i <= (int) $request->get('cantPTA'); $i++) {
            $work                = new Work;

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

            $work->compilation_id=$codigoUsuario;
            $work->save();

            for ($j=0; $j < sizeof($request->get('agentes'.(String)$i))-1; $j++) {
                $factor = new Factor();

                $factor->conceptofactor = $request->get('agentes'.(String)$i)[$j];

                $id_work = Work::where('compilation_id', $codigoUsuario)
                               ->where('type','A'.(String)$i)
                               ->first();
                $factor->work_id = $id_work->id;

                $factor->save();
            }
        }

        //if has a second current job, inserts it
        if($request->has('segEmpAct')){
            $work                = new Work;

            $work->type          = 'A3';
            $work->center_work   = $request->get('ct2_1');
            $work->work_position = $request->get('pt2_1');
            $work->antiquity     = $request->get('tpa2_1').".".
                                   $request->get('tpm2_1');

            $activities = [
              $request->get('pa2_1_1'),
              $request->get('pa2_1_2'),
              $request->get('pa2_1_3')
            ];

            $activitiesStr =  implode(', ', $activities);
            $work->activities    = $activitiesStr;
            $work->EPP           = $request->get('epp2_1');

            $work->accidents     = 'No se registraron accidentes';


            $work->compilation_id=$codigoUsuario;
            $work->save();

            for ($j=0; $j < sizeof($request->get('agentes2_2'))-1; $j++) {
                $factor = new Factor();

                $factor->conceptofactor = $request->get('agentes2_2')[$j];

                $id_work = Work::where('compilation_id', $codigoUsuario)
                               ->where('type','A3')
                               ->first();
                $factor->work_id = $id_work->id;

                $factor->save();
            }

        }
        //Inserts an immediate previous job
        if($request->has('empAntInm')){
            for ($i = 1 ; $i <= (int) $request->get('cantPTAI'); $i++) {
                $work                = new Work;

                $work->type          = 'AI'.(String)$i;
                $work->center_work   = $request->get('ct3_'.(String)$i);
                $work->work_position = $request->get('pt3_'.(String)$i);
                $work->antiquity     = $request->get('tpa3_'.(String)$i).".".
                                       $request->get('tpm3_'.(String)$i);

                $activities = [
                  $request->get('pa3_'.(String)$i.'_1'),
                  $request->get('pa3_'.(String)$i.'_2'),
                  $request->get('pa3_'.(String)$i.'_3')
                ];

                $activitiesStr =  implode(', ', $activities);
                $work->activities    = $activitiesStr;
                $work->EPP           = $request->get('epp3_'.(String)$i);


                $work->accidents     = 'No se registraron accidentes';


                $work->compilation_id=$codigoUsuario;
                $work->save();

                for ($j=0; $j < sizeof($request->get('agentesAI'.(String)$i))-1; $j++) {
                    $factor = new Factor();

                    $factor->conceptofactor = $request->get('agentesAI'.(String)$i)[$j];

                    $id_work = Work::where('compilation_id', $codigoUsuario)
                                   ->where('type','A3'.(String)$i)
                                   ->first();
                    $factor->work_id = $id_work->id;

                    $factor->save();
                }
            }
        }

        //INserts the last job
        if($request->has('empAnt')){
            $work                = new Work;

            $work->type          = 'AAI';
            $work->center_work   = $request->get('ct4_1');
            $work->work_position = $request->get('pt4_1');
            $work->antiquity     = $request->get('tpa4_1').".".
                                   $request->get('tpm4_1');

            $activities = [
              $request->get('pa4_1_1'),
              $request->get('pa4_1_2'),
              $request->get('pa4_1_3')
            ];

            $activitiesStr =  implode(', ', $activities);
            $work->activities    = $activitiesStr;
            $work->EPP           = $request->get('epp4_1');

            $work->accidents     = 'No se registraron accidentes';


            $work->compilation_id=$codigoUsuario;
            $work->save();


            for ($j=0; $j < sizeof($request->get('agentes4'))-1; $j++) {
                $factor = new Factor();

                $factor->conceptofactor = $request->get('agentes4')[$j];

                $id_work = Work::where('compilation_id', $codigoUsuario)
                               ->where('type','AAI')
                               ->first();
                $factor->work_id = $id_work->id;

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
