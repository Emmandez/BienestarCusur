<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use SnappyPDF;

class PdfGenerateController extends Controller
{
     //  public function pdfview(Request $request)
     // {
     //     $users = DB::table("users")->get();
     //     view()->share('users',$users);
     //

     //
     //
     //     return view('pdfview');
     // }
//      public function invoice(){
//       $data       = $this->getData();
//       $dimensions = $data[0];
//       $factors    = $data[1];
//       // $view       = \View::make('pdfview', compact('dimensions','factors'))->render();
//       // $pdf        = \App::make('dompdf.wrapper');
//       $pdf = new Dompdf();
//
//       $pdf = Dompdf::loadHTML('pdfview',['dimensions'=>$dimensions, 'factors'=>$factors])->setOption('javascript-delay', 3000);
// //      $pdf->setOption('javascript-delay', 3000);
//       return $pdf->stream('pdfview');
//       //return $pdf->download('documento.pdf');
//       // return $view;
//
//      }

        public function invoice(Request $request){
          $data       = $this->getData();
          $dimensions = $data[0];
          $factors    = $data[1];

          //view()->share(['dimensions'=>$dimensions, 'factors'=>$factors]);
          $view       = \View::make('prueba', compact('dimensions','factors'))->render();

          //$pdf  = SnappyPDF::loadHTML($view);
          //return SnappyPDF::loadFile('pdfview')->stream('archivo.pdf');
          //return \SnappyPDF::loadFile('localhost:8000/generate-pdf')->stream('github.pdf'); works!

          //$pdf->setOption('javascript-delay', 3000);
          //return $pdf->stream('pdfview');
          //return $pdf->download('documento.pdf');

          //return \SnappyPDF::loadView('pdfview')->download('github.pdf');

          $pdf = SnappyPDF::loadHTML($view);
          //$pdf = SnappyPDF::loadFile('');
          return $pdf->stream('github.pdf');

        }

        public function download(Request $request){
          if($request->has('download')){
            return \SnappyPDF::loadFile('localhost:8000/generate-pdf')->stream('github.pdf');
          }
        }



     public function getData(){
           //Se debe cambiar este código por el del actual paciente
           //¿Se debe de mandar el folio del cuestionario más reciente o el código del paciente?
           $codigo = "214413693";
           $users = DB::table("users")->get();

           $cuestionario = DB::table('cuestionarios')->where('compilations_id',$codigo)->pluck('id')->last();

           $dimensionA = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Contexto de Trabajo')->get();
           $dimensionB = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Contenido de trabajo')->get();
           $dimensionC = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Factores Individuales')->get();
           $dimensionD = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Desgaste Psíquico')->get();

           $f1a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 1')->get();
           $f2a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 2')->get();
           $f3a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 3')->get();
           $f4a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 4')->get();

           $f1b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 1')->get();
           $f2b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 2')->get();
           $f3b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 3')->get();
           $f4b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 4')->get();

           $f1c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 1')->get();
           $f2c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 2')->get();
           $f3c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 3')->get();

           $f1d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 1')->get();
           $f2d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 2')->get();
           $f3d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 3')->get();


           $dimensions = [
             $dimensionA,
             $dimensionB,
             $dimensionC,
             $dimensionD
           ];

           $fA = [
             $f1a,
             $f2a,
             $f3a,
             $f4a
           ];

           $fB = [
             $f1b,
             $f2b,
             $f3b,
             $f4b
           ];

           $fC = [
             $f1c,
             $f2c,
             $f3c
           ];

           $fD = [
             $f1d,
             $f2d,
             $f3d
           ];

           $factors = [
             $fA,
             $fB,
             $fC,
             $fD
           ];

           $result= [
             $dimensions,
             $factors
           ];
           // Descomentar si se necesita enviar el código del paciente
           // $result= [
           //   $dimensions,
           //   $factors,
           //   $codigo
           // ];

           // Descomentar si se necesita enviar el código del cuestionario
           // $result= [
           //   $dimensions,
           //   $factors,
           //   $cuestionario
           // ];

       return $result;
     }

    //  public function pdfview(Request $request)
    //  {
    //     //Se debe cambiar este código por el del actual paciente
    //     $codigo = "214413693";
    //     $users = DB::table("users")->get();
    //     $cuestionario = DB::table('cuestionarios')->where('compilations_id',$codigo)->pluck('id')->last();
    //
    //     $dimensionA = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Contexto de Trabajo')->get();
    //     $dimensionB = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Contenido de trabajo')->get();
    //     $dimensionC = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Factores Individuales')->get();
    //     $dimensionD = DB::table('dimensions')->where('cuestionarios_id',$cuestionario)->where('concept','Desgaste Psíquico')->get();
    //
    //     $f1a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 1')->get();
    //     $f2a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 2')->get();
    //     $f3a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 3')->get();
    //     $f4a = DB::table('factor_dims')->where('dimensions_id',$dimensionA[0]->id)->where('Type','FACTOR 4')->get();
    //
    //     $f1b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 1')->get();
    //     $f2b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 2')->get();
    //     $f3b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 3')->get();
    //     $f4b = DB::table('factor_dims')->where('dimensions_id',$dimensionB[0]->id)->where('Type','FACTOR 4')->get();
    //
    //     $f1c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 1')->get();
    //     $f2c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 2')->get();
    //     $f3c = DB::table('factor_dims')->where('dimensions_id',$dimensionC[0]->id)->where('Type','FACTOR 3')->get();
    //
    //     $f1d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 1')->get();
    //     $f2d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 2')->get();
    //     $f3d = DB::table('factor_dims')->where('dimensions_id',$dimensionD[0]->id)->where('Type','FACTOR 3')->get();
    //
    //
    //     $dimensions = [
    //       $dimensionA,
    //       $dimensionB,
    //       $dimensionC,
    //       $dimensionD
    //     ];
    //
    //     $fA = [
    //       $f1a,
    //       $f2a,
    //       $f3a,
    //       $f4a
    //     ];
    //
    //     $fB = [
    //       $f1b,
    //       $f2b,
    //       $f3b,
    //       $f4b
    //     ];
    //
    //     $fC = [
    //       $f1c,
    //       $f2c,
    //       $f3c
    //     ];
    //
    //     $fD = [
    //       $f1d,
    //       $f2d,
    //       $f3d
    //     ];
    //
    //     $factors = [
    //       $fA,
    //       $fB,
    //       $fC,
    //       $fD
    //     ];
    //
    //     view()->share(['dimensions'=>$dimensions,'factors'=>$factors]);
    //     // view()->share('fA',$fA);
    //     // view('pdfview',compact('yogui'));
    //
    //     if($request->has('download')){
    //       // Set extra option
    //       PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
    //       // pass view file
    //         $pdf = PDF::loadView('pdfview');
    //         // download pdf
    //         return $pdf->download('pdfview.pdf');
    //     }
    //     return view('pdfview');
    // }



}
