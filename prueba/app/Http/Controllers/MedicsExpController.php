<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Exploration;

class MedicsExpController extends Controller
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
        return view('apartments.medics.createExplo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigoUsuario = '214413693';
        //Systems
        $systemsConcept = [
            'Respiratorio/Cardiovascular',
            'Digestivo',
            'Endócrino',
            'Músculo-Esquelético',
            'Genito-Urinario',
            'Hematopoyético-Linfático',
            'Piel y Anexos',
            'Neurológico y Psiquiátrico'
        ];

        $systemsDesc = [
            $request->get('RECA'),
            $request->get('DIGE'),
            $request->get('ENDO'),
            $request->get('MUES'),
            $request->get('GEUR'),
            $request->get('HELI'),
            $request->get('PIAN'),
            $request->get('NEPS')
        ];

        for($i=0; $i<sizeof($systemsConcept); $i++){
            if(!empty($systemsDesc[$i])){
                $system = new System;

                $system->concept         = $systemsConcept[$i];
                $system->description     = $systemsDesc[$i];
                $system->compilation_id = $codigoUsuario;

                $system->save();
            }
        }

        //Explorations
        $sysTwoOrg = [
            [
                'OrgSys'       => 'Tórax',
                'Concept1'     => 'Corazón',
                'Condition1'   => $request->get('corazon'),
                'description1' => $request->get('hallazgoCorazon'),
                'Concept2'     => 'Pulmones',
                'Condition2'   => $request->get('pulmonesselect'),
                'description2' => $request->get('hallazgoPulmones')
            ],
            [
                'OrgSys'       => 'Abdomen',
                'Concept1'     => 'Pared Abdominal',
                'Condition1'   => $request->get('abdomenselect'),
                'description1' => $request->get('hallazgosPA'),
                'Concept2'     => 'Vísceras',
                'Condition2'   => $request->get('visceras'),
                'description2' => $request->get('hallazgosVisceras')
            ],
            [
                'OrgSys'       => 'Extremidades',
                'Concept1'     => 'Miembros Superiores',
                'Condition1'   => $request->get('miembrosup'),
                'description1' => $request->get('hallazgoMS'),
                'Concept2'     => 'Miembros Inferiores',
                'Condition2'   => $request->get('miembroslo'),
                'description2' => $request->get('hallazgoMI')
            ],
            [
                'OrgSys'       => 'Neurológicos',
                'Concept1'     => 'Columna',
                'Condition1'   => $request->get('columnaSelect'),
                'description1' => $request->get('hallazgosColumna'),
                'Concept2'     => 'Otros',
                'Condition2'   => $request->get('otroneuro'),
                'description2' => $request->get('hallazgosOtroNeuro')
            ],
            [
                'OrgSys'       => 'Cabeza y Cuello',
                'Concept1'     => 'Tiroides',
                'Condition1'   => $request->get('tiroidesSelect'),
                'description1' => $request->get('hallazgoTiroides'),
                'Concept2'     => 'Otros',
                'Condition2'   => $request->get('otrosCabezaSelect'),
                'description2' => $request->get('hallazgoOtroCabeza')
            ],
            [
                'OrgSys'       => 'Ojos',
                'Concept1'     => 'Conjuntivas',
                'Condition1'   => $request->get('conjuntivasSelect'),
                'description1' => $request->get('hallazgosConjuntivas'),
                'Concept2'     => 'Córneas',
                'Condition2'   => $request->get('corneas'),
                'description2' => $request->get('hallazgosCorneas')
            ],
            [
                'OrgSys'       => 'Oídos',
                'Concept1'     => 'C. Auditivo',
                'Condition1'   => $request->get('cauditivo'),
                'description1' => $request->get('hallazgosCAud'),
                'Concept2'     => 'Tímpanos',
                'Condition2'   => $request->get('timpanos'),
                'description2' => $request->get('hallazgosTimpano')
            ]
        ];

        $SysOrg = [
            [
                'OrgSys'      => 'Genitales',
                'Concept'     => 'Genitales',
                'Condition'   => $request->get('geniSelect'),
                'description' => $request->get('hallazgosGenitales')
            ],
            [
                'OrgSys'      => 'Piel',
                'Concept'     => 'Piel',
                'Condition'   => $request->get('pielSelect'),
                'description' => $request->get('hallazgosPiel')
            ],
            [
                'OrgSys'      => 'Orofaringe',
                'Concept'     => 'Orofaringe',
                'Condition'   => $request->get('OrofaringeSelect'),
                'description' => $request->get('hallazgosOrofaringe')
            ]];


        //for loop to insert two org system
        for ($i=0; $i < sizeof($sysTwoOrg); $i++) {
            $exploration = new Exploration;

            $exploration->orgsis         = $sysTwoOrg[$i]['OrgSys'];
            $exploration->concept        = $sysTwoOrg[$i]['Concept1'];
            $exploration->condition      = $sysTwoOrg[$i]['Condition1'];
            $exploration->compilation_id = $codigoUsuario;

            if(!empty($sysTwoOrg[$i]['description1'])){
                $exploration->description = $sysTwoOrg[$i]['description1'];
            }else{
                $exploration->description = 'No se encontraron hallazgos';
            }

            $exploration->save();

            $exploration = new Exploration;

            $exploration->orgsis         = $sysTwoOrg[$i]['OrgSys'];
            $exploration->concept        = $sysTwoOrg[$i]['Concept2'];
            $exploration->condition      = $sysTwoOrg[$i]['Condition2'];
            $exploration->compilation_id = $codigoUsuario;

            if(!empty($sysTwoOrg[$i]['description2'])){
                $exploration->description = $sysTwoOrg[$i]['description2'];
            }else{
                $exploration->description = 'No se encontraron hallazgos';
            }

            $exploration->save();
        }
        //for loop to insert one org system
        for ($i=0; $i < sizeof($SysOrg) ; $i++) {
            $exploration = new Exploration;

            $exploration->orgsis         = $SysOrg[$i]['OrgSys'];
            $exploration->concept        = $SysOrg[$i]['Concept'];
            $exploration->condition      = $SysOrg[$i]['Condition'];
            $exploration->compilation_id = $codigoUsuario;

            if(!empty($SysOrg[$i]['description'])){
                $exploration->description = $SysOrg[$i]['description'];
            }else{
                $exploration->description = 'No se encontraron hallazgos';
            }

            $exploration->save();
        }

        return redirect('medicsExp/create');


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
