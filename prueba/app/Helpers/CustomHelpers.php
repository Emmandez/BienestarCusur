<?php

use App\Models\Work;


/**
* Insert a job
*
*
* @param $
*
*
*
*
*
*
*/


function insertJob(){
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



?>

