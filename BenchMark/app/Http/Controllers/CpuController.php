<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cpu;
use Illuminate\Http\Request;

class cpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cpu = cpu::where('ClockSpeed', 'LIKE', "%$keyword%")
                ->orWhere('TurboClockSpeed', 'LIKE', "%$keyword%")
                ->orWhere('Cores', 'LIKE', "%$keyword%")
                ->orWhere('Socket', 'LIKE', "%$keyword%")
                ->orWhere('Marca', 'LIKE', "%$keyword%")
                ->orWhere('Foto', 'LIKE', "%$keyword%")
                ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cpu = cpu::latest()->paginate($perPage);
        }

        return view('cpu.index', compact('cpu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cpu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }

        cpu::create($requestData);

        return redirect('cpu')->with('flash_message', 'cpu added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cpu = cpu::findOrFail($id);

        return view('cpu.show', compact('cpu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cpu = cpu::findOrFail($id);

        return view('cpu.edit', compact('cpu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('Foto')) {
            $requestData['Foto'] = $request->file('Foto')
                ->store('uploads', 'public');
        }

        $cpu = cpu::findOrFail($id);
        $cpu->update($requestData);

        return redirect('cpu')->with('flash_message', 'cpu updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        cpu::destroy($id);

        return redirect('cpu')->with('flash_message', 'cpu deleted!');
    }
}