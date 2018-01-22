<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cuestionario;
use App\Models\Workshop;
use App\Models\Dimension;
use App\Models\FactorDim;
use App\Models\Respuesta;

class SlpceController extends Controller
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
        return view('apartments.slpce.ctcps');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $cuestionario = new Cuestionario;
        $workshop     = new Workshop;



        /*first we need to calculate the results and then insert them into
        the psychosocialResults table. Next we need to insert data into
        the psychosocial, namesFactor, workshops, recomendations tables
        to link that data to the psychosocialresult inserted before at the
        beggining

        foreach ($answersArray as $ans) {
            echo $ans;
        }
        */

        $cuestionario->Comments        = $request->get('comentariosCuest');
        $cuestionario->Answer          = $request->get('p77');
        $cuestionario->personalOpinion = $request->get('p78Desc');
        $cuestionario->compilations_id = '214413693';
        $cuestionario->save();

        $workshop->T1               = $request->get('oculto1');
        $workshop->T2               = $request->get('oculto2');
        $workshop->T3               = $request->get('oculto3');
        //hacer un if
        $workshop->cuestionarios_id = Cuestionario::where('compilations_id','214413693')
                                        ->pluck('id')
                                        ->first();

        $workshop->save();

        //it will have to insert 4 dimensions, then the factors and link the corresponding factors with the dimensions

        /*Each factor is located into the corresponding dimension.
        Example: to access to factor 1 from dimension A we use the following syntaxis
            $DimensionA[0]

        */
        $answersArray = $request->all();
        $AnswersInverted = SlpceController::invertAnswer($answersArray);

        $DimensionA = SlpceController::divideInDimensionA($AnswersInverted);
        $DimensionB = SlpceController::divideInDimensionB($AnswersInverted);
        $DimensionC = SlpceController::divideInDimensionC($AnswersInverted);
        $DimensionD = SlpceController::divideInDimensionD($AnswersInverted);

        for ($i=0; $i <sizeof($DimensionA[1]) ; $i++) {
          echo $DimensionA[1][$i][2];
        }



        $dimensions = [
            $DimensionA,
            $DimensionB,
            $DimensionC,
            $DimensionD
        ];

        $dimConcepts = [
            'Contexto de Trabajo',
            'Contenido de Trabajo',
            'Factores Individuales',
            'Desgaste Psíquico'
        ];

        $dimRecomendations = [
            'No exige ningún cambio',
            'Pueden establecerse acciones para la mejora',
            'Se recomienda promocionar acciones de mejora',
            'Planificación e intervención con acciones reparadoras',
            'Intervención inmediata con acciones para evitar el daño'
        ];

        $gradeFactors = [
            'MUY BUENO',
            'BUENO',
            'NORMAL',
            'REGULAR',
            'NOCIVO'
        ];

        $numbFactor = [
            'FACTOR 1',
            'FACTOR 2',
            'FACTOR 3',
            'FACTOR 4'
        ];
        /*
        echo "Tamaño primer factor";
        echo sizeof($dimensions[0]);

        /*
        * First we need to calculate the IV for each factor, add them up and obtain the
        IV for each dimension.

        then with that value obtain the grade(1 muy bueno,2 bueno ...) and obtain the
        recomendation.
        */

        //Dimension A
        $dimension          = new Dimension;
        $dimension->Concept = $dimConcepts[0];

//Obtiene el indice de valoracion de cada Dimension (suma los indices de los factores de una dimension)

        // for ($i=0; $i <4 ; $i++) {
        //     $IVDimension += $DimensionA[1][$i][2];  //ver hojita
        // }
        //echo $IVDimension;

        $ivDim = 0;
        for ($i=0; $i <sizeof($DimensionA[3]) ; $i++) {
            $ivDim +=$DimensionA[3][$i];
        }

        $specs                       = SlpceController::evaluateDimensionA($ivDim);
        $dimension->IV               = $specs[2];
        $dimension->Recomendation    = $specs[0];
        $dimension->Grade            = $specs[1];
        $dimension->puntuacion       = $ivDim;
        $dimension->cuestionarios_id = Cuestionario::where('compilations_id','214413693')
                                        ->pluck('id')
                                        ->last();

        $dimension->save();

        //Insert factors from dimensionA with the last id dimension
        //Factor 1
        $factorConcepts = [
            'Cultura de organización y gestión',
            'Papel o rol en la organización',
            'Interrelación trabajo con problemas familiares o sociales',
            'Relaciones interpersonales en el trabajo'
        ];


        for ($i=0; $i<4 ; $i++) {
            $factor                = new FactorDim;
            $factor->Type          = $numbFactor[$i];
            $factor->Concept       = $factorConcepts[$i];
            //dimension [arrayIVFactor][numeroFactor][Recomendation0/Calif1/IV2]
            $factor->Recomendation = $DimensionA[1][$i][0];
            $factor->Grade         = $DimensionA[1][$i][1];
            $factor->IV            = $DimensionA[1][$i][2];
            $factor->puntuacion    = $DimensionA[3][$i];
            $factor->dimensions_id = $dimension->id;
            $factor->save();
        }

        //Dimension B
        $dimension = new Dimension;
        $dimension->Concept = $dimConcepts[1];

        // $IVDimension=0;
        // for ($i=0; $i <4 ; $i++) {
        //     $IVDimension += $DimensionB[1][$i][2];
        // }
        // $dimension->IV               = $IVDimension;

        $ivDim = 0;
        for ($i=0; $i <sizeof($DimensionB[3]); $i++) {
            $ivDim +=$DimensionB[3][$i];
        }

        $specs                       = SlpceController::evaluateDimensionB($ivDim);
        $dimension->IV               = $specs[2];
        $dimension->Recomendation    = $specs[0];
        $dimension->Grade            = $specs[1];
        $dimension->puntuacion       = $ivDim;
        $dimension->cuestionarios_id = Cuestionario::where('compilations_id','214413693')
                                        ->pluck('id')
                                        ->last();



        $dimension->save();
        //Factors dimensionB
        $factorConcepts = [
            'Carga y Ritmo de Trabajo',
            'Ambientes laborales',
            'Equipos y agentes físicos',
            'Concepción de las tareas del puesto de trabajo'
        ];
        for ($i=0; $i<4 ; $i++) {
            $factor                = new FactorDim;
            $factor->Type          = $numbFactor[$i];
            $factor->Concept       = $factorConcepts[$i];
            //dimension [arrayIVFactor][numeroFactor][Recomendation0/Calif1/IV2]
            $factor->Recomendation = $DimensionB[1][$i][0];
            $factor->Grade         = $DimensionB[1][$i][1];
            $factor->IV            = $DimensionB[1][$i][2];
            $factor->puntuacion    = $DimensionB[3][$i];
            $factor->dimensions_id = $dimension->id;
            $factor->save();
        }

        //Dimension C
        $dimension = new Dimension;
        $dimension->Concept = $dimConcepts[2];

        // $IVDimension=0;
        // for ($i=0; $i <4 ; $i++) {
        //     $IVDimension += $DimensionC[1][$i][2];
        // }
        // $dimension->IV = $IVDimension;

        $ivDim = 0;
        for ($i=0; $i <sizeof($DimensionC[3]) ; $i++) {
            $ivDim +=$DimensionC[3][$i];
        }

        $specs                       = SlpceController::evaluateDimensionC($ivDim);
        $dimension->IV               = $specs[2];
        $dimension->Recomendation    = $specs[0];
        $dimension->Grade            = $specs[1];
        $dimension->puntuacion       = $ivDim;
        $dimension->cuestionarios_id = Cuestionario::where('compilations_id','214413693')
                                        ->pluck('id')
                                        ->last();

        $dimension->save();
        //Factors dimensionC
        $factorConcepts = [
            'Amortiguadores del riesgo psíquico',
            'Características de la Empresa',
            'Características Personales'
        ];
        for ($i=0; $i<3 ; $i++) {
            $factor                = new FactorDim;
            $factor->Type          = $numbFactor[$i];
            $factor->Concept       = $factorConcepts[$i];
            //dimension [arrayIVFactor][numeroFactor][Recomendation0/Calif1/IV2]
            $factor->Recomendation = $DimensionC[1][$i][0];
            $factor->Grade         = $DimensionC[1][$i][1];
            $factor->IV            = $DimensionC[1][$i][2];
            $factor->puntuacion    = $DimensionC[3][$i];
            $factor->dimensions_id = $dimension->id;
            $factor->save();
        }

        //Dimension D
        $dimension = new Dimension;
        $dimension->Concept = $dimConcepts[3];

        // $IVDimension=0;
        // for ($i=0; $i <4 ; $i++) {
        //     $IVDimension += $DimensionC[1][$i][2];
        // }
        // $dimension->IV               = $IVDimension;
        $ivDim = 0;
        for ($i=0; $i <sizeof($DimensionD[3]) ; $i++) {
            $ivDim +=$DimensionD[3][$i];
        }

        $specs                       = SlpceController::evaluateDimensionD($ivDim);
        $dimension->IV               = $specs[2];
        $dimension->Recomendation    = $specs[0];
        $dimension->Grade            = $specs[1];
        $dimension->puntuacion       = $ivDim;
        $dimension->cuestionarios_id = Cuestionario::where('compilations_id','214413693')
                                        ->pluck('id')
                                        ->last();

        $dimension->save();
        //Factors dimensionD
        $factorConcepts = [
            'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta Cognitivo-emocional',
            'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta Conductal',
            'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta fisiológica'
        ];
        for ($i=0; $i<3 ; $i++) {
            $factor                = new FactorDim;
            $factor->Type          = $numbFactor[$i];
            $factor->Concept       = $factorConcepts[$i];
            //dimension [arrayIVFactor][numeroFactor][Recomendation0/Calif1/IV2]
            $factor->Recomendation = $DimensionD[1][$i][0];
            $factor->Grade         = $DimensionD[1][$i][1];
            $factor->IV            = $DimensionD[1][$i][2];
            $factor->puntuacion    = $DimensionD[3][$i];
            $factor->dimensions_id = $dimension->id;
            $factor->save();
        }

        //FALTA2: INGRESAR RESPUESTAS Y RELACIONARLAS CON LOS FACTORES CORRESPONDIENTES
        $answersArray = $request->all();

        $DimensionA = SlpceController::divideInDimensionA($answersArray);
        $DimensionB = SlpceController::divideInDimensionB($answersArray);
        $DimensionC = SlpceController::divideInDimensionC($answersArray);
        $DimensionD = SlpceController::divideInDimensionD($answersArray);

        $dimensions = [
            $DimensionA,
            $DimensionB,
            $DimensionC,
            $DimensionD
        ];

        $factors = [
          'Cultura de organización y gestión',
          'Papel o rol en la organización',
          'Interrelación trabajo con problemas familiares o sociales',
          'Relaciones interpersonales en el trabajo',
          'Carga y Ritmo de Trabajo',
          'Ambientes laborales',
          'Equipos y agentes físicos',
          'Concepción de las tareas del puesto de trabajo',
          'Amortiguadores del riesgo psíquico',
          'Características de la Empresa',
          'Características Personales',
          'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta Cognitivo-emocional',
          'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta Conductal',
          'Síntomas subjetivos y alteraciones de la salud - Estados psicológicos - Respuesta fisiológica'
        ];

        $cont =0;
        for ($i=0; $i < sizeof($dimensions); $i++) {
          $dimensiones = Dimension::all();
          $dimension1 = $dimensiones->where('cuestionarios_id',$cuestionario->id)->where('concept',$dimConcepts[$i])->pluck('id'); //indice representa dimension a,b,c, d
          //echo "Dimension";
          //echo $dimension1[0];
          //dd($dimension1);
            for ($j=0; $j < sizeof($dimensions[$i][2]); $j++) {
              $factores    = FactorDim::all();
              $factor = $factores->where('dimensions_id',$dimension1[0])->where('Concept',$factors[$cont])->pluck('id');
            $x = $factor[0];
              echo "contador: ";

              echo $cont;

              $cont++;
              for($k =0; $k < sizeof($dimensions[$i][2][$j]); $k++){
                $respuesta                 = new Respuesta;
                $respuesta->question       = intval($dimensions[$i][2][$j][$k]);
                $respuesta->answer         = intval($dimensions[$i][0][$j][$k]);
                $respuesta->factor_dims_id = $x;
                $respuesta->save();
              }
            }
        }
    }

    private static function evaluateFactorG1($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 8 &&  $result <= 15){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 16 && $result <= 23) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 24){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=25 && $result <= 32){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=33 && $result <= 40){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;
        return $results;
    }

    private static function evaluateFactorG2($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 7 &&  $result <= 13){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 14 && $result <= 20) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 21){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=22 && $result <= 28){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=29 && $result <= 35){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateFactorG3($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 4 &&  $result <= 7){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 8 && $result <= 11) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 12){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=13 && $result <= 16){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=17 && $result <= 20){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateFactorG4($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 3 &&  $result <= 5){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 6 && $result <= 8) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 9){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=10 && $result <= 12){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=13 && $result <= 15){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateFactorG5($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 6 &&  $result <= 11){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 12 && $result <= 17) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 18){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=19 && $result <= 24){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=25 && $result <= 30){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateFactorG6($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 2 &&  $result <= 3){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 4 && $result <= 5) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 6){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=7 && $result <= 8){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=9 && $result <= 10){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateFactorG7($result){
        $recomendation ="";
        $evaluation = "";
        $indiceValoracion = 0;

        if($result >= 5 &&  $result <= 9){
            $recomendation = "No exige ningún cambio";
            $evaluation = "MUY BUENO";
            $indiceValoracion = 1;
        }
        elseif ($result >= 10 && $result <= 14) {
            $recomendation = "Pueden establecerse acciones para la mejora";
            $evaluation = "BUENO";
            $indiceValoracion = 2;
        }
        elseif($result == 15){
            $recomendation = "Se recomienda proporcionar acciones de mejora";
            $evaluation = "NORMAL";
            $indiceValoracion = 3;
        }
        elseif($result>=16 && $result <= 20){
            $recomendation = "Planificación e intervención con acciones reparadoras";
            $evaluation = "REGULAR";
            $indiceValoracion = 4;
        }
        elseif($result>=21 && $result <= 25){
            $recomendation = "Intervención inmediata con acciones para evitar el daño";
            $evaluation = "NOCIVO";
            $indiceValoracion = 5;
        }

        $results[0] = $recomendation;
        $results[1] = $evaluation;
        $results[2] = $indiceValoracion;

        return $results;
    }

    private static function evaluateDimensionA($value){
        $grade          = '';
        $recomen        = '';
        $iv             =0;

        if($value >= 22 &&  $value <= 43){
            $recomen = "No exige ningún cambio";
            $grade = "MUY BUENO";
            $iv = 1;
        }
        else if($value >= 44 &&  $value <= 65){
            $recomen = "Pueden establecerse acciones para la mejora";
            $grade = "BUENO";
            $iv = 2;
        }
        else if($value == 66){
            $recomen = "Se recomienda promocionar acciones de mejora";
            $grade = "NORMAL";
            $iv = 3;
        }
        else if($value >= 67 &&  $value <= 88){
            $recomen = "Planificación e intervención con acciones reparadoras";
            $grade = "REGULAR";
            $iv = 4;
        }
        else if($value >= 89 &&  $value <= 110){
            $recomen = "Intervención inmediata con acciones para evitar el daño";
            $grade = "NOCIVO";
            $iv = 5;
        }

        $results[0] = $recomen;
        $results[1] = $grade;
        $results[2] = $iv;

        return $results;
    }

    private static function evaluateDimensionB($value){
        $grade   = '';
        $recomen = '';
        $iv      = 0;

        if($value >= 19 &&  $value <= 37){
            $recomen = "No exige ningún cambio";
            $grade = "MUY BUENO";
            $iv = 1;
        }
        else if($value >= 38 &&  $value <= 56){
            $recomen = "Pueden establecerse acciones para la mejora";
            $grade = "BUENO";
            $iv = 2;
        }
        else if($value == 57){
            $recomen = "Se recomienda promocionar acciones de mejora";
            $grade = "NORMAL";
            $iv = 3;
        }
        else if($value >= 58 &&  $value <= 76){
            $recomen = "Planificación e intervención con acciones reparadoras";
            $grade = "REGULAR";
            $iv = 4;
        }
        else if($value >= 77 &&  $value <= 95){
            $recomen = "Intervención inmediata con acciones para evitar el daño";
            $grade = "NOCIVO";
            $iv = 5;
        }

        $results[0] = $recomen;
        $results[1] = $grade;
        $results[2] = $iv;

        return $results;
    }

    public static function evaluateDimensionC($value){
        $grade   = '';
        $recomen = '';
        $iv      = 0;

        if($value >= 14 &&  $value <= 27){
            $recomen = "No exige ningún cambio";
            $grade = "MUY BUENO";
            $iv      = 1;
        }
        else if($value >= 28 &&  $value <= 41){
            $recomen = "Pueden establecerse acciones para la mejora";
            $grade = "BUENO";
            $iv      = 2;
        }
        else if($value == 42){
            $recomen = "Se recomienda promocionar acciones de mejora";
            $grade = "NORMAL";
            $iv      = 3;
        }
        else if($value >= 43 &&  $value <= 56){
            $recomen = "Planificación e intervención con acciones reparadoras";
            $grade = "REGULAR";
            $iv      = 4;
        }
        else if($value >= 57 &&  $value <= 70){
            $recomen = "Intervención inmediata con acciones para evitar el daño";
            $grade = "NOCIVO";
            $iv      = 5;
        }

        $results[0] = $recomen;
        $results[1] = $grade;
        $results[2] = $iv;

        return $results;

    }

    private static function evaluateDimensionD($value){
        $grade   = '';
        $recomen = '';
        $iv      = 0;

        if($value >= 20 &&  $value <= 39){
            $recomen = "No exige ningún cambio";
            $grade = "MUY BUENO";
            $iv      = 1;
        }
        else if($value >= 40 &&  $value <= 59){
            $recomen = "Pueden establecerse acciones para la mejora";
            $grade = "BUENO";
            $iv      =2 ;
        }
        else if($value == 60){
            $recomen = "Se recomienda promocionar acciones de mejora";
            $grade = "NORMAL";
            $iv      =3 ;
        }
        else if($value >= 61 &&  $value <= 80){
            $recomen = "Planificación e intervención con acciones reparadoras";
            $grade = "REGULAR";
            $iv      = 4;
        }
        else if($value >= 81 &&  $value <= 100){
            $recomen = "Intervención inmediata con acciones para evitar el daño";
            $grade = "NOCIVO";
            $iv      = 5;
        }

        $results[0] = $recomen;
        $results[1] = $grade;
        $results[2] = $iv;

        return $results;

    }

    private static function invertAnswer($Answers){

        $posicionesInvert =[
            'p1',
            'p2',
            'p3',
            'p10',
            'p13',
            'p14',
            'p15',
            'p17',
            'p24',
            'p27',
            'p29',
            'p31',
            'p32',
            'p35',
            'p36',
            'p37',
            'p38',
            'p40',
            'p44',
            'p45',
            'p46',
            'p48',
            'p50',
            'p51',
            'p52',
            'p54',
            'p55',
            'p59',
            'p63',
            'p64',
            'p66',
            'p67',
            'p69',
            'p72'];

        $invert = [
            '1' =>  '5',
            '2' =>  '4',
            '3' =>  '3',
            '4' =>  '2',
            '5' =>  '1'];

        for ($i=0; $i <sizeof($posicionesInvert); $i++) {
            $Answers[$posicionesInvert[$i]] = $invert[$Answers[$posicionesInvert[$i]]];
        }

        return $Answers;
    }

    /*
    Divide all the answers into dimensions and then into di
    */
    public static function divideInDimensionA($Answers){

        $f1           = ['3', '8', '10', '14', '22', '39', '51', '63'];
        $f2           = ['1', '16', '29', '31', '45', '69', '73'];
        $f3           = ['40', '64', '67', '70'];
        $f4           = ['2', '9', '24'];
        $indicesArray = [$f1,$f2,$f3,$f4];

        $f1a             = [];
        $f2a             = [];
        $f3a             = [];
        $f4a             = [];
        $arrayRespuestas = [$f1a, $f2a, $f3a, $f4a];
        $countNumbers    = [];

        //this has a 4 column 1 row array
        $ivFactor        = [];



        for ($i=0; $i <sizeof($indicesArray) ; $i++) {
            for ($j=0; $j <sizeof($indicesArray[$i]) ; $j++) {
                $arrayRespuestas[$i][$j] = $Answers['p'.$indicesArray[$i][$j]];
            }
        }

        //obtain values from each factor to calculate the IV after this
        for ($i=0; $i <sizeof($arrayRespuestas); $i++) {
            $countNumbers[$i] = SlpceController::countNumbers($arrayRespuestas[$i]);
        }

        //calculating IV for eachFactor
        $ivFactor[0] = SlpceController::evaluateFactorG1($countNumbers[0]);
        $ivFactor[1] = SlpceController::evaluateFactorG2($countNumbers[1]);
        $ivFactor[2] = SlpceController::evaluateFactorG3($countNumbers[2]);
        $ivFactor[3] = SlpceController::evaluateFactorG4($countNumbers[3]);



        //return IV value from each factor to calculate afterwards the IV fr
        // division de las preguntas por factores y dimensiones
        $return = [
            $arrayRespuestas,  //la respuesta de la pregunta sin invertir
            $ivFactor,    //
            $indicesArray,
            $countNumbers
          ];
        return $return;
    }

    /*
    Divide all the answers into dimensions and then into factors
    */
    public static function divideInDimensionB($Answers){
        $f1 = ['18', '32', '34', '44', '52', '57', '61'];
        $f2 = ['23', '30', '47', '56', '60', '71'];
        $f3 = ['68', '72', '74', '75'];
        $f4 = ['42', '49'];
        $indicesArray = [$f1,$f2,$f3,$f4];

        $f1a =[];
        $f2a =[];
        $f3a =[];
        $f4a =[];
        $arrayRespuestas = [$f1a, $f2a, $f3a, $f4a];

        for ($i=0; $i <sizeof($indicesArray) ; $i++) {
            for ($j=0; $j <sizeof($indicesArray[$i]) ; $j++) {
                $arrayRespuestas[$i][$j] = $Answers['p'.$indicesArray[$i][$j]];
                //echo $arrayRespuestas[$i][$j];
            }
            //echo "\n";
        }

        //obtain values from each factor to calculate the IV after this
        for ($i=0; $i <sizeof($arrayRespuestas); $i++) {
            $countNumbers[$i] = SlpceController::countNumbers($arrayRespuestas[$i]);
        }

        //calculating IV for eachFactor
        $ivFactor[0] = SlpceController::evaluateFactorG2($countNumbers[0]);
        $ivFactor[1] = SlpceController::evaluateFactorG5($countNumbers[1]);
        $ivFactor[2] = SlpceController::evaluateFactorG3($countNumbers[2]);
        $ivFactor[3] = SlpceController::evaluateFactorG6($countNumbers[3]);

        $result = [
            $arrayRespuestas,
            $ivFactor,
            $indicesArray,
            $countNumbers
        ];

        return $result;
    }

    /*
    Divide all the answers into dimensions and then into factors
    */
    public static function divideInDimensionC($Answers){
        $f1 = ['13', '15', '50', '55', '66'];
        $f2 = ['4', '5', '17', '43', '59'];
        $f3 = ['38', '41', '48', '54'];
        $indicesArray = [$f1,$f2,$f3];

        $f1a =[];
        $f2a =[];
        $f3a =[];
        $arrayRespuestas = [$f1a, $f2a, $f3a];

        for ($i=0; $i <sizeof($indicesArray) ; $i++) {
            for ($j=0; $j <sizeof($indicesArray[$i]) ; $j++) {
                $arrayRespuestas[$i][$j] = $Answers['p'.$indicesArray[$i][$j]];
                //echo $arrayRespuestas[$i][$j];
            }
            //echo "\n";
        }

        //obtain values from each factor to calculate the IV after this
        for ($i=0; $i <sizeof($arrayRespuestas); $i++) {
            $countNumbers[$i] = SlpceController::countNumbers($arrayRespuestas[$i]);
        }

        //calculating IV for eachFactor
        $ivFactor[0] = SlpceController::evaluateFactorG7($countNumbers[0]);
        $ivFactor[1] = SlpceController::evaluateFactorG7($countNumbers[1]);
        $ivFactor[2] = SlpceController::evaluateFactorG3($countNumbers[2]);

        $result = [
            $arrayRespuestas,
            $ivFactor,
            $indicesArray,
            $countNumbers
        ];

        return $result;
    }

    /*
    Divide all the answers into dimensions and then into factors
    */
    public static function divideInDimensionD($Answers){
        $f1 = ['6', '7', '11', '12', '19', '20', '26'];
        $f2 = ['27', '35', '36', '37', '46', '58'];
        $f3 = ['21', '25', '28', '33', '53', '62', '65'];
        $indicesArray = [$f1,$f2,$f3];

        $f1a =[];
        $f2a =[];
        $f3a =[];
        $arrayRespuestas = [$f1a, $f2a, $f3a];

        for ($i=0; $i <sizeof($indicesArray) ; $i++) {
            for ($j=0; $j <sizeof($indicesArray[$i]) ; $j++) {
                $arrayRespuestas[$i][$j] = $Answers['p'.$indicesArray[$i][$j]];
                //echo $arrayRespuestas[$i][$j];
            }
            //echo "\n";
        }

        //obtain values from each factor to calculate the IV after this
        for ($i=0; $i <sizeof($arrayRespuestas); $i++) {
            $countNumbers[$i] = SlpceController::countNumbers($arrayRespuestas[$i]);
        }

        //calculating IV for eachFactor
        $ivFactor[0] = SlpceController::evaluateFactorG2($countNumbers[0]);
        $ivFactor[1] = SlpceController::evaluateFactorG5($countNumbers[1]);
        $ivFactor[2] = SlpceController::evaluateFactorG2($countNumbers[2]);

        $ivDim = 0;
        foreach ($countNumbers as $nu) {
            $ivDim +=$nu;
        }

        $result = [
            $arrayRespuestas,
            $ivFactor,
            $indicesArray,
            $countNumbers
        ];

        return $result;
    }

    /*
    calculates the factorNumber of a factor.
    */
    public static function countNumbers($Factor){
        $number = [
            '1'=>0,
            '2'=>0,
            '3'=>0,
            '4'=>0,
            '5'=>0
        ];

        /*
        echo "Count numbers";
        echo $Factor[0];
        echo $Factor[1];
        echo $Factor[2];
        echo $Factor[3];
        */

        for($i=0; $i<sizeof($Factor); $i++){
            switch ($Factor[$i]) {
                case '1':
                    $number['1']+=1;
                    break;
                case '2':
                    $number['2']+=1;
                    break;
                case '3':
                    $number['3']+=1;
                    break;
                case '4':
                    $number['4']+=1;
                    break;
                case '5':
                    $number['5']+=1;
                    break;
                default:
                    break;
            }
        }
        /*
        echo "NUMBER";
        echo $number['1'];
        echo $number['2'];
        echo $number['3'];
        echo $number['4'];
        echo $number['5'];
        */
        $result=0;
        $i=1;
        foreach ($number as $num){
            $result += $num * $i;
            $i++;
        }

        //echo "ESTO ES EL FACTOR";
        //echo $result;

        return $result;
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
