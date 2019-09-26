<?php

namespace App\Http\Controllers;

use App\Cpu;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['cpus']=Cpu::paginate(5);
        return view('cpus.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cpus.create');
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
        $datos = request()->except('_token');
        if($request->hasFile('Foto')){
            $datos['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Cpu::insert($datos);
        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cpu  $cpu
     * @return \Illuminate\Http\Response
     */
    public function show(Cpu $cpu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cpu  $cpu
     * @return \Illuminate\Http\Response
     */
    public function edit(Cpu $cpu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cpu  $cpu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cpu $cpu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cpu  $cpu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cpu $cpu)
    {
        //
    }
}
