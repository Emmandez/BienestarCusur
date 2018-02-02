<?php

/*DELETE ALL $codigoUsuario and replace it with functional code.
    this 214413693 code is just for executing the program without looking
    for the compilation id in the DB.

    To do this, you have to send a request using ajax and passing the id from
    the compilation object to the frame(?) below (the one where there are field to
    add the information)
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GynecoResult;
use App\Models\VphResult;
use App\Models\NonPathHist;
use App\Models\Desc_Toxico;
use App\Models\Frecuency;
use App\Models\NonPathHistDescription;


use App\Models\Compilation;
//Related with Compilation
use App\Models\FamilyHistory;
use App\Models\PathologicalHistory;
use App\Models\NonPathologicalHistory;
use App\Models\GinecoObstetricHistory;
use App\Models\GeneralGynecoData;
use App\Models\DatosGineco;
use App\Models\Patient;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class MedicsController extends Controller
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
        //return 'WIP';


        return view('apartments.medics.create4');
    }


    /**<
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date       = getdate();
        $formatDate = $date['year'].'-'.$date['mon'].'-'.$date['mday'].'-'.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds'];
        $codigoUsuario = '214413693';

        //Updating compilation table.
        //Searching the tuple we want to update
        //$compilation = Compilation::find($request->get('patientCode'));
        $compilation = Compilation::find($codigoUsuario);
        //$compilation = new Compilation;

        $compilation->delete();


        //Changing data's field we want to update
        $compilation->medicalData     = 'Y';
        $compilation->idResponsibleM  = Auth::user()->UDG_Code;
        $compilation->aplicationDateM = $formatDate;
        //Saving the updated object


        $compilation->save();



        //Filling up FamilyHistory Table
        //Request 0 to 17
        $ynAnswer = [
            $request->get('diabetes'),
            $request->get('sobrepeso'),
            $request->get('cardiopatias'),
            $request->get('malformaciones'),
            $request->get('cancer'),
            $request->get('hipertension'),
            $request->get('enfRespiratorias'),
            $request->get('nefropatias'),
            $request->get('descOtro')
        ];

        $descriptionsFH =[
            $request->get('diabLevel'),
            $request->get('spLevel'),
            $request->get('cardioLevel'),
            $request->get('malfLevel'),
            $request->get('cancerLevel'),
            $request->get('hipertensionLevel'),
            $request->get('enfRespLevel'),
            $request->get('nefropatiasLevel')
        ];

        for ($i=0; $i < sizeof($ynAnswer); $i++){
            if($i < (sizeof($ynAnswer)-1) and !empty($ynAnswer[$i])){
                $famHist                  = new FamilyHistory;

                $famHist->concept         = $ynAnswer[$i];
                $famHist->description     = $descriptionsFH[$i];
                $famHist->compilation_id = "214413693";

                $famHist->save();
            }
            elseif (!empty($ynAnswer[$i]) and $i == sizeof($ynAnswer)-1) {
                $famHist                  = new FamilyHistory;

                $famHist->concept         = "OTRO";
                $famHist->description     = $request->get("descOtro");
                $famHist->compilation_id = "214413693";

                $famHist->save();
            }
        }

        //Second slide
        $ynAnswerPH = [
            $request->get('infancia'),
            $request->get('hospitalizaciones'),
            $request->get('cirugias'),
            $request->get('transfusiones'),
            $request->get('medicacion'),
            $request->get('otraEnf'), //index 5 item 6
            $request->get('fracturas'),//index 6 item 7
            $request->get('traumaticos')//index 7 item 8
        ];


        $descriptionsPH = [
            $request->get('descEnfInfancia'),
            $request->get('descHospitalizaciones'),
            $request->get('descCirugias'),
            $request->get('descTransfuciones'),
            $request->get('descMedicacion'),
            $request->get('descOtraEnfermedad')
        ];


        for ($i=0; $i<sizeof($ynAnswerPH); $i++){
            if($i < (sizeof($ynAnswerPH)-2) and !empty($ynAnswerPH[$i])){
                $patoHist                  = new PathologicalHistory;

                $patoHist->concept         = $ynAnswerPH[$i];
                $patoHist->description     = $descriptionsPH[$i];
                $patoHist->compilation_id = "214413693";

                $patoHist->save();
            }
            elseif (!empty($ynAnswerPH[$i]) and $i >= sizeof($ynAnswerPH)-2) {
                $patoHist                  = new PathologicalHistory;

                $patoHist->concept         = $ynAnswerPH[$i];
                $patoHist->description     = 'N/A';
                $patoHist->compilation_id = "214413693";

                $patoHist->save();
            }
        }

        //Third Slide non path hist

        $nonPathHist = new NonPathologicalHistory;

        $nonPathHist->bloodType     = $request->get('bloodtype');
        $nonPathHist->properFeeding = $request->get('alimentacion');


        /*to get a checkbox array, set a name and add '[]' just netx to the name
        for example: name='array[]'
        to access to that array, write the name without brackets as shown below
        */
        if($request->get('hs')>0){
            $housingServices = implode(', ', $request->get('hs'));
        }
        else{
            $housingServices = "";
        }


        $nonPathHist->housingServices = $housingServices;
        $nonPathHist->compilation_id = $codigoUsuario;

        $nonPathHist->save();



        $ynAnswerFr = [
            $request->get('tabaquismo'),
            $request->get('alcoholismo'),
            $request->get('toxicomanias')
        ];

        $exconsumer = [
            $request->get('ex-fumador'),
            $request->get('ex-alcoholico'),
            $request->get('ex-drogadicto')
        ];

        $consumptionFrecuency = [
            $request->get('cigXDia'),
            $request->get('copasXSemana'),
            0
        ];

        $consumptionYears = [
            $request->get('cigXAnio'),
            $request->get('copasXAnio'),
            $request->get('añosConsumoDrogas')
        ];

        $foreignkey = NonPathologicalHistory::where('compilation_id',$codigoUsuario)->first();


        for ($i=0; $i < sizeof($ynAnswerFr) ; $i++) {
            if (!empty($ynAnswerFr[$i])) {
                $frecuency = new Frecuency;

                $frecuency->concept                     = $ynAnswerFr[$i];
                $frecuency->years                       = $consumptionYears[$i];
                $frecuency->frecuency                   = $consumptionFrecuency[$i];
                $frecuency->exConsumer                  = $exconsumer[$i];
                $frecuency->nonPathologicalHistory_id = $foreignkey->id;

                $frecuency->save();

                if($i==2){
                    $desc = new Desc_Toxico;

                    $desc->description_toxico = $request->get('descToxi');
                    $fkFrec                   = Frecuency::where('nonPathologicalHistory_id',$foreignkey->id)
                        ->where('concept','Toxicomanias')
                        ->first();
                    $desc->frecuency_id     = $fkFrec->id;

                    $desc->save();
                }
            }
        }



        $descNonPath =[
            $request->get('descAlergias'),
            $request->get('descTatuajes'),
            $request->get('descInmunizaciones')
        ];

        $conceptNonPath =[
            'Alergias',
            'Tatuajes/Piercings',
            'Inmunizaciones'
        ];

        for ($i=0; $i < sizeof($descNonPath) ; $i++) {
            if(!empty($descNonPath[$i])){
                $nonPathHistDesc = new NonPathHistDescription;

                $nonPathHistDesc->concept                     = $conceptNonPath[$i];
                $nonPathHistDesc->description                 = $descNonPath[$i];
                $nonPathHistDesc->nonPathologicalHistory_id = $foreignkey->id;

                $nonPathHistDesc->save();


            }
        }


        //Fourth Slide gineco obstetric history


        //$patient = Patient::where('compilation_id',$codigoUsuario)->first();

        //IF   if(strcmp($patient->gender, 'FEME')==0){

            $conceptGineco = [
                'Menarca',
                'Última Menstruación',
                'Última Citología',
                'Última Mastografía'
            ];

            $dateGineco = [
                $request->get('menarca'),
                $request->get('ultMenstruacion'),
                $request->get('ultCitologia'),
                $request->get('ultMastografia')
            ];

            for($i=0; $i<sizeof($dateGineco); $i++) {
                if($dateGineco[$i]!=null){
                    $gynecoHist = new GinecoObstetricHistory;

                    $gynecoHist->concept         = $conceptGineco[$i];
                    $gynecoHist->date            = $dateGineco[$i];
                    $gynecoHist->compilation_id = $codigoUsuario;

                    $gynecoHist->save();
                }
            }




            $gynecoResults = [
                $request->get('resultCitologia'),
                $request->get('resultMastografia')
            ];

            //array with ginecoobstetric history objects
            $GynDescFK = GinecoObstetricHistory::where('compilation_id',$codigoUsuario)
                ->where('concept','Última Citología')
                ->orwhere('concept','Última Mastografía')
                ->get();

            for ($i=0; $i < sizeof($gynecoResults); $i++) {
                if($gynecoResults[$i]!=null){
                    $gynecoResult                              = new GynecoResult;
                    $gynecoResult->result                      = $gynecoResults[$i];
                    $gynecoResult->GynecoObstetricHistory_id =$GynDescFK[$i]->id;

                    $gynecoResult->save();
                }
            }

            //ritmo, ivsa, parjx, planif. partos, abortos, cesareas, gesta
            $generalDataArray = [
                $request->get('ritmo'),
                $request->get('ivsa'),
                $request->get('parejasSexuales'),
                $request->get('planFamiliar'),
                $request->get('gestaciones'),
                $request->get('abortos'),
                $request->get('partos'),
                $request->get('cesareas')
            ];
            $generalDataConcept = [
                'Ritmo',
                'IVSA',
                'Parejas Sexuales',
                'Método de Planificacion Familiar',
                'Gestaciones',
                'Abortos',
                'Partos',
                'Cesáreas'
            ];
            for($i=0; $i<sizeof($generalDataArray); $i++){
                if(!empty($generalDataArray[$i])){
                    $generalData = new GeneralGynecoData;

                    $generalData->concept         = $generalDataConcept[$i];
                    $generalData->answer          = $generalDataArray[$i];
                    $generalData->compilation_id = $codigoUsuario;

                    $generalData->save();
                }
            }

            $datosGinecoAnswers = [
                $request->get('ciclos'),
                $request->get('polimeno'),
                $request->get('hipermeno'),
                $request->get('dismeno'),
                $request->get('vphYN')
            ];

            for($i=0; $i<sizeof($datosGinecoAnswers); $i++){
                if(!empty($datosGinecoAnswers[$i])){
                    $datosgineco = new DatosGineco;

                    $datosgineco->concept         = $datosGinecoAnswers[$i];
                    $datosgineco->compilation_id = "214413693";

                    $datosgineco->save();
                }
                else{

                }
            }


            if(!empty($datosGinecoAnswers[4])){
                echo "entra VphResult";
                $vphFK = DatosGineco::where('compilation_id', $codigoUsuario)
                            ->where('concept','VPH')->first();

                $vphresult = new VphResult;

                $vphresult->result           = $request->get('resVPH');
                $vphresult->datosGineco_id = $vphFK->id;

                $vphresult->save();
            }

            return redirect('medics/create');
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
