<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SnappyPDF;
use SnappyImage;
Use DB;

class PdfGenerateSnappy extends Controller
{

    // public function pdfview(){
    //   return \SnappyPDF::loadView('prueba')->download('github.pdf');
    // }
    // public function pdfview(Request $request){
    //   $users = DB::table('users')->get();
    //   view()->share('users',$users);
    //
    //   if($request->has('download')){
    //     $pdf  = SnappyPDF::loadView('prueba');
    //     return $pdf->download('userslist.pdf');
    //   }
    //   return view('prueba');
    // }

    public function pdfview(){
      $data       = $this->getData();
      $dimensions = $data[0];
      $factors    = $data[1];

      view()->share(['dimensions'=>$dimensions, 'factors'=>$factors]);

      $pdf  = SnappyPDF::loadView('pdfview');

      //$pdf->setOption('javascript-delay', 3000);
      return $pdf->stream('pdfview');
      //return $pdf->download('documento.pdf');
      //return $view;
    }

    public function getData(){
          //Se debe cambiar este código por el del actual paciente
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

      return $result;
    }

}
