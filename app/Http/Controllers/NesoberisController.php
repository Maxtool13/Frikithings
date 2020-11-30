<?php

namespace App\Http\Controllers;

use App\Models\Nesoberis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NesoberisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosneso['nesoberis']=Nesoberis::paginate(5);
        return view('regycon.consultas.connesos',$datosneso);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('regycon.registros.regnesos');
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
        $datosneso=request()->except('_token');

        if($request->hasFile('imagen')){
            $datosneso['imagen']=$request->file('imagen')->store('uploads', 'public');
        }


        Nesoberis::insert($datosneso);

        //return response()->json($datosneso);
        return view ('regycon.registros.regnesos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nesoberis  $nesoberis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datosneso=Nesoberis::findOrFail($id);
        return view('regycon.mostrar.mosnesos', compact('datosneso'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nesoberis  $nesoberis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datosneso=Nesoberis::findOrFail($id);
        return view('regycon.edicion.editnesos', compact('datosneso'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nesoberis  $nesoberis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosneso=request()->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $neso=Nesoberis::findOrFail($id);

            Storage::delete('public/'.$neso->imagen);

            $datosneso['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Nesoberis::where('id','=',$id)->update($datosneso);

        $datosneso=Nesoberis::findOrFail($id);
        return view('regycon.edicion.editnesos', compact('datosneso'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nesoberis  $nesoberis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Nesoberis::destroy($id);
        return redirect('Nesoberis');
    }
}
