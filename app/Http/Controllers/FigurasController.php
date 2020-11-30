<?php

namespace App\Http\Controllers;

use App\Models\Figuras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FigurasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosfiguras['figuras']=Figuras::paginate(5);
            return view('regycon.consultas.configuras',$datosfiguras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('regycon.registros.regfiguras');

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
        $datosfiguras=request()->except('_token');
        if($request->hasFile('imagen')){
            $datosfiguras['imagen']=$request->file('imagen')->store('uploads', 'public');
        }
        Figuras::insert($datosfiguras);

        return view ('regycon.registros.regfiguras');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Figuras  $figuras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datosfiguras=Figuras::findOrFail($id);
        return view('regycon.mostrar.mosfiguras', compact('datosfiguras'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Figuras  $figuras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datosfiguras=Figuras::findOrFail($id);
        return view('regycon.edicion.editfiguras', compact('datosfiguras'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Figuras  $figuras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosfiguras=request()->except(['_token','_method']);

        if($request->hasFile('imagen')){

            $figu=Figuras::findOrFail($id);

            Storage::delete('public/'.$figu->imagen);

            $datosfiguras['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Figuras::where('id','=',$id)->update($datosfiguras);


        $datosfiguras=Figuras::findOrFail($id);
        return view('regycon.edicion.editfiguras', compact('datosfiguras'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Figuras  $figuras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Figuras::destroy($id);
        return redirect('Figuras');
    }
}
