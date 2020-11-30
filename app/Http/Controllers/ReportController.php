<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ReportController extends Controller
{
    //
    public function reportenesos(){
    
    //$pdf=\PDF::loadView('reporte');
    //return $pdf->download('reporte.pdf');
    //return $pdf->stream('reporte.pdf');

    $datos=\DB::table('nesoberis')
    ->select(['id','nombre','serie','tamaño', 'peso','empaque','precio'])
    ->get();
    echo ($datos);

    $view=\View::make('reportes/reporte', compact('datos'))->render();
    $pdf=\App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('reporte'.'pdf');

    }

    public function reportefigu(){
    
        
    
        $datosfi=\DB::table('figuras')
        ->select(['id','nombre','serie','marca', 'peso','altura','empaque','precio'])
        ->get();
        echo ($datosfi);
    
        $view=\View::make('reportes/reportefigu', compact('datosfi'))->render();
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reportes/reportefigu'.'pdf');
    
        }

        public function reporteropa(){
    
        
    
            $datosro=\DB::table('ropas')
            ->select(['id','tipo','talla','genero', 'nolote','origen','peso'])
            ->get();
            echo ($datosro);
        
            $view=\View::make('reportes/reporteropa', compact('datosro'))->render();
            $pdf=\App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('reportes/reporteropa'.'pdf');
        
            }

    

    


}
