<?php

namespace App\Http\Controllers;
//Models used in this controller
use App\Models\Job;
use App\Models\Patient;
use App\Models\Address;
use App\Models\Phone;
use App\Models\Scholarship;
use App\Models\OtherGrade;
use App\Models\Compilation;
use App\Models\Assignment;
use App\Models\Building;
use App\Models\Folio;
 

use Illuminate\Http\Request;

class SlpceEMLController extends Controller
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
        //Tomar los nombramientos y mostrarlos en la vista
        $nombramientos = Assignment::all();
        $areas         = Building::all();


        return view('apartments.slpce.expMedicLab', compact('nombramientos', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Taking the datetime
        $date       = getdate();
        $formatDate = $date['year'].'-'.$date['mon'].'-'.$date['mday'].'-'.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds'];
        $Lastgrade='';
        $otherGrade=new OtherGrade;
        $otherGradeDescription='';
        //$Lastgrade;
        $LastgradeDescription='';
        $value='';

        /*Filling up the compilation table with fake data to create 
        the entity when register an employee. New employee data about
        visits to medics, etc, will have to be UPDATED and NOT INSERTED
        */
        $compilation = new Compilation;
        $patient = new Patient;
        $direccion = new Address;

        $compilation->id              = $request->get('codigo');
        $compilation->questionary     = 'N';
        $compilation->idResponsibleQ  = '000000000';
        $compilation->aplicationDateQ = $formatDate;
        $compilation->laborDataq      = 'N';
        $compilation->idResponsibleD  = '000000000';
        $compilation->aplicationDateD = $formatDate;
        $compilation->medicalData     = 'N';
        $compilation->idResponsibleM  = '000000000';
        $compilation->aplicationDateM = $formatDate;
        $compilation->nurseData       = 'N';
        $compilation->idResponsibleN  = '000000000';
        $compilation->aplicationDateN = $formatDate;
        $compilation->nutritionFacts  = 'N';
        $compilation->idResponsibleF  = '000000000';
        $compilation->aplicationDateF = $formatDate;

        $compilation->save();

        //Filling up Folio table. It's using an auto increment ID
        //You are as unlucky as I was, probably you are dealing with 
        //this program. I'm using autoincrement to test the program.
        //Change this feature. PLEASE
        $folio = new Folio;

        $folio->compilation_id = $request->get('codigo');
        
        $folio->save();

        

        //First view of the application form
        //Id file
        //Filling up the patient table
        
        //Taking values from the view
        $patient->FirstName       = $request->get('nombre');
        $patient->LastNameP       = $request->get('app');
        $patient->LastNameM       = $request->get('apm');
        $patient->birth_place     = $request->get('lugarNamicimiento');
        $patient->civil_status    = $request->get('eCivil');
        $patient->gender          = $request->get('sexo');
        $patient->birth_date      = $request->get('fechaNacimiento');
        $patient->dependents      = $request->get('numFamCargo');
        $patient->child_number    = $request->get('numHijos');
        $patient->dateRegistry    = $request->get('fechaRegistro');
        $patient->compilation_id = $request->get('codigo');

        $patient->save();
        

        //filling up address table
        
        //Taking values from the view
        $direccion->street          = $request->get('calle');
        $direccion->number          = $request->get('numero');
        $direccion->suburb          = $request->get('colonia');
        $direccion->postalCode      = $request->get('cp');
        $direccion->addressType     = $request->get('TipoVivienda');
        $direccion->compilation_id = $request->get('codigo');

        $direccion->save();
        


        //filling up phone table with a house phone number and a cellphone number
        $housePhone = new Phone;
        
        $housePhone->phoneNumber     = $request->get('telefonoCasa');
        $housePhone->type            = 'CASA';
        $housePhone->compilation_id = $request->get('codigo');

        $housePhone->save();
        
        $cellPhone = new Phone;
        
        $cellPhone->phoneNumber     = $request->get('telefonoCel');
        $cellPhone->type            = 'CELU';
        $cellPhone->compilation_id = $request->get('codigo');

        $cellPhone->save();
        


        //Second view of the application form
        //Scholarship
        //Filling up scholarship table
        $scholarship = new Scholarship;

        //Fillinf up otherGrades Table
        $otherG = new OtherGrade;
        //Obtain all the degrees, put them in an array and choose the last one

        //this array obtains the values from technical degree to PhD
        $scholarships            = array(
            $request->get('doctorado'),
            $request->get('maestria'),
            $request->get('licenciatura'),
            $request->get('carreraTecnica'),
            $request->get('gradoBachillerato'),
            $request->get('gradoSecundaria'),
            $request->get('gradoPrimaria'));

        $scholarshipsDescriptions = array(
            $request->get('cualDoctorado'),
            $request->get('cualMaestria'),
            $request->get('cualLicenciatura'),  
            $request->get('cualCarreraTecnica'), 
            
            
            );
        
        $scholarshipsSize        = count($scholarships);
        
        $degrees                 = array(
                                        "Doctorado",
                                        "Maestría",
                                        "Licenciatura",
                                        "Carrera Técnica",
                                        "Bachillerato",
                                        "Secundaria",
                                        "Primaria"
                                    );

        $haveDegrees = $request->get('estudios');

        if($haveDegrees == 'SI'){
            //The loop starts from the end (PhD to elementary school)
            
            for($i = 0; $i<$scholarshipsSize; $i++){
                $value = $scholarships[$i];
                echo '\nValor de la opcion de grado: ';
                echo $value;
                echo "     ";
                

                if(empty($Lastgrade)){
                    
                    //Educación Superior
                    if($i<4 and $value=='SI'){
                        $Lastgrade                    = $degrees[$i];
                        $LastgradeDescription         = $scholarshipsDescriptions[$i];
                        
                        $scholarship->lastGrade       = $Lastgrade; 
                        $scholarship->specification   = $LastgradeDescription;
                        $scholarship->compilation_id = $request->get('codigo');

                        $scholarship->save();

                        
                    }

                    //Educación Básica a Media Superior
                    elseif ($i>3) {

                        if(strcmp($value, "6")){
                            $Lastgrade                    = $degree[$i];
                            $LastgradeDescription         = "Terminado";
                            
                            $scholarship->lastGrade       = $Lastgrade; 
                            $scholarship->specification   = $LastgradeDescription;
                            $scholarship->compilation_id = $request->get('codigo');

                            $scholarship->save();
                            
                        }
                        else{
                            $Lastgrade                    = $degree[$i];
                            $LastgradeDescription         = "Trunco";
                            $scholarship->lastGrade       = $Lastgrade; 
                            $scholarship->specification   = $LastgradeDescription;
                            $scholarship->compilation_id = $request->get('codigo');

                            $scholarship->save();
                            
                        }
                    }

                }

                elseif ($value=='SI' and !empty($Lastgrade) and $i<4) {
                    $otherGrade                = new OtherGrade;
                    $otherGrades               = $degrees[$i];
                    $otherGradeDescription     = $scholarshipsDescriptions[$i];
                    
                    $otherGrade->other_grade   = $otherGrades;
                    $otherGrade->specification = $otherGradeDescription;
                    

                    $scholarshipCode = Scholarship::where('compilation_id', $request->get('codigo'))->get(array('id'));
                    
                    foreach ($scholarshipCode as $y ) {
                            $x = $y->id;
                    }

                    $otherGrade->scholarship_id = $x;

                    $otherGrade->save();

                }
            }

            

        }

        //Thrid view of the application form
        //work information

        // Filling ip the Jobs table
        $job = new Job;
        echo "el puesto es ", $request->get('puesto');
        echo "el contrato es ", $request->get('contrato');
        echo "el nombre es: ", $request->get('nombre_paciente');

        echo $request->get('asdkhgasdkjavsd');
        //Taking values from the view
        $job->designation             = $request->get('puesto');

        $job->contract                  = $request->get('contrato');
        $job->schedule                  = $request->get('horario');
        $job->area                      = $request->input('edificio_mayor_permanencia');
        $job->antiquity_years           = $request->get('aniosAntiguedad');
        $job->antiquity_months          = $request->get('mesesAntiguedad');
        $job->incapacity_days_last_year = $request->get('diasIncapacidad');
        $job->compilation_id           = $request->get('codigo');

        $job->save();

        

        return redirect('slpceEML/create');


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
