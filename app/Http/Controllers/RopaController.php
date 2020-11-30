<?php

namespace App\Http\Controllers;

use App\Models\Ropa;
use Illuminate\Http\Request;

class RopaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosropa['ropa']=Ropa::paginate(5);
            return view('regycon.consultas.conropa',$datosropa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('regycon.registros.regropa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosropa=request()->except('_token');
        Ropa::insert($datosropa);

        
        return view ('regycon.registros.regropa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datosropa=Ropa::findOrFail($id);

        return view('regycon.mostrar.mosropa', compact('datosropa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datosropa=Ropa::findOrFail($id);

        return view('regycon.edicion.editropa', compact('datosropa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosropa=request()->except(['_token','_method']);
        Ropa::where('id','=',$id)->update($datosropa);


        $datosropa=Ropa::findOrFail($id);

        return view('regycon.edicion.editropa', compact('datosropa'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ropa  $ropa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        Ropa::destroy($id);
        return redirect('Ropa');
    }
}
