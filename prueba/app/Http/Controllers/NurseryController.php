<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNurseryCapture;
use App\Models\Patient;

use App\Models\Compilation;
use App\Models\VitalSigns;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class NurseryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$records = Patient::all();
        //return view('apartments.nursery.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.nursery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigoUsuario = '214413693';
        $date       = getdate();
        $formatDate = $date['year'].'-'.$date['mon'].'-'.$date['mday'].'-'.$date['hours'].'-'.$date['minutes'].'-'.$date['seconds'];

        // Filling out VitalSigns
        $vs_data                  = new VitalSigns();
        $vs_data->mmHG            = $request->get('mmHG');
        $vs_data->FC              = $request->get('FC');
        $vs_data->FR              = $request->get('FR');
        $vs_data->Temp            = $request->get('Temp');

        $vs_data->compilation_id = $codigoUsuario;
        //$vs_data->compilations_id = $request->get('patientCode');




        // Saving new VitalSigns
        $vs_data->save();

        //Updating compilation table.
        //Searching the tuple we want to update
        //$compilation = Compilation::find($request->get('patientCode'));
        $compilation = Compilation::find($codigoUsuario);

        //Changing data's field we want to update
        $compilation->nurseData       = 'Y';
        $compilation->idResponsibleN  = Auth::user()->UDG_Code;
        $compilation->aplicationDateN = $formatDate;
        //Saving the updated object
        $compilation->save();



        //Going back to the form
        return redirect('nursery/create');


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
