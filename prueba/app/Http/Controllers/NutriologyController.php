<?php

namespace App\Http\Controllers;
 
use App\Models\Patient;
use App\Models\Compilation;
use App\Models\AnthropometricEvaluation;
use App\Models\Exercise;
use App\Models\Reminder;
use App\Models\ReminderDetail;
use App\Models\PhysicalActivity;


use Illuminate\Http\Request;

class NutriologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Patient::all();
        return view('apartments.nutriology.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.nutriology.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the data validate it and and fill the new entry...
        # Output debug
        echo dd($request->all());

        $anthroEval = new AnthropometricEvaluation;

        $anthroEval->height                  = $request->get('height');
        $anthroEval->current_weight          = $request->get('current_weight');
        $anthroEval->habitual_weight         = $request->get('habitual_weight');
        $anthroEval->hip_circumference       = $request->get('hip_c');
        $anthroEval->waist_circumference     = $request->get('waist_c');
        $anthroEval->wrist_circumference     = $request->get('wrist_c');
        $anthroEval->cmb                     = $request->get('cmb');
        $anthroEval->pcb                     = $request->get('pcb');
        $anthroEval->pct                     = $request->get('pct');
        $anthroEval->imc                     = $request->get('indicemc');
        $anthroEval->weight_category         = $request->get('categoPeso');
        $anthroEval->ideal_weight            = $request->get('ideal_weight');
        $anthroEval->habitual_weightPercent  = $request->get('habitual_wP');
        $anthroEval->icc                     = $request->get('indicecc');
        $anthroEval->waist_danger            = $request->get('ccrisk');
        $anthroEval->iccRisk                 = $request->get('riskIcc');
        $anthroEval->mass_distribution       = $request->get('mass_distribution');
        $anthroEval->complexity              = $request->get('complexity');
        $anthroEval->pcse                    = $request->get('pcse');
        $anthroEval->pcsi                    = $request->get('pcsi');
        $anthroEval->muscleKG                = $request->get('totalMuscMassKg');
        $anthroEval->lean_MassKG             = $request->get('leanMassKg');
        $anthroEval->lean_MassKGTanita       = $request->get('leanMassKgTani');
        $anthroEval->total_water_tanita      = $request->get('total_water');
        $anthroEval->desnutrition_grade      = $request->get('desnutritionGrade');
        $anthroEval->greasePercent           = $request->get('fatPercentage');
        $anthroEval->grease_massKG           = $request->get('fatMassKg');
        $anthroEval->total_corporal_water    = $request->get('corpWater');
        $anthroEval->masa_grasaTanitaPercent = $request->get('greasePercentTani');
        $anthroEval->masa_grasaTanitaKG      = $request->get('grease_massKGTani');
        $anthroEval->physicalActivity        = $request->get('is_active');
        $anthroEval->exercise                = $request->get('does_exercise');
        $antroEval->compilation_id          = '214413693';

        $anthroEval->save();

        if($request->get('is_active').equals('SI')){
            $pA = new PhysicalActivity;
            $pA->intensity = $request->get('exercise_intensity');
            //Buscar llave
            $fk = AnthropometricEvaluation::where('compilation_id','214413693')->first()->get();
            $pA->anthropometricEvaluation_id = $fk->id;

            $pA->save();
        }

        if($request->get('does_exercise').equals('SI')){
            $ex = new Exercise;
            
            $ex->type       = $request->get('exercise_type');
            $ex->frecuency  = $request->get('exercise_frecuency');
            $ex->duration   = $request->get('exercise_duration');
            $ex->start_date = $request->get('start_date');

            $fk = AnthropometricEvaluation::where('compilation_id','214413693')->first()->get();

            $ex->anthropometricEvaluation_id = $fk->id();
            $ex->save();

        }

        $reminder = new Reminder;

        $reminder->totalFoods                  = $request->get('totalMeals');
        $reminder->totalCaloriesDay            = $request->get('totalCalories');
        $reminder->breakfastHour               = $request->get('breakfastHour');
        $reminder->foodHour                    = $request->get('mealHour');
        $reminder->dinnerHour                  = $request->get('dinnerHour');
        $reminder->morningCollationHour        = $request->get('morningCollationHour');
        $reminder->eveningCollationHour        = $request->get('EvenCollationHour');
        $fk = AnthropometricEvaluation::find('compilation_id','214413693')->first()->get();
        $reminder->anthropometricEvaluation_id =$fk->id;

        $reminder->save();

        //Desayuno
        if($request->get('desayuno')>0){
            $desayunoStr = implode(', ', $request->get('desayuno'));
            if($request->has('desayunoOtro')){
                $desayunoStr .= $request->get('desayunoOtro');
            }
        }
        //Colación matutina
        if($request->get('colacionM')>0){
            $colacionMStr = implode(', ', $request->get('colacionM'));
            if($request->has('colacionMOtro')){
                $colacionMStr .= $request->get('colacionMOtro');
            }
        }
        //Comida
        if($request->get('comida')>0){
            $comidaStr = implode(', ', $request->get('comida'));
            if($request->has('desayunoOtro')){
                $comidaStr .= $request->get('comidaOtro');
            }
        }
        //Colación Vespertina
        if($request->get('colacionV')>0){
            $colacionVStr = implode(', ', $request->get('colacionV'));
            if($request->has('colacionVOtro')){
                $colacionVStr .= $request->get('colacionVOtro');
            }
        }
        //Cena
        if($request->get('cena')>0){
            $cenaStr = implode(', ', $request->get('cena'));
            if($request->has('cenaOtro')){
                $cenaStr .= $request->get('cenaOtro');
            }
        }

        $reminderConcept = [
            'Desayuno',
            'Colación Matutina',
            'Comida',
            'Colación Vespertina',
            'Cena'
        ];

        $detailStr =[
            $desayunoStr,
            $colacionMStr,
            $comidaStr,
            $colacionVStr,
            $cenaStr
        ];

        for($i=0; $i<sizeof($reminderConcept); $i++){
            if(!empty($detailStr[$i])){
                $reminderDetail = new ReminderDetail;

                $reminderDetail->concept = $reminderConcept[$i];
                $reminderDetail->detail  = $detailStr[$i];

                $fk = Reminder::find('compilation_id','214413693')->first()->get();
                $reminderDetail->reminder_id = $fk->id;

                $reminderDetail->save();
            }
        }

        return redirect('nutriology/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
