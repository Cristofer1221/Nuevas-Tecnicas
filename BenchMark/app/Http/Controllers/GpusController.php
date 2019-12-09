<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Gpus;
use Illuminate\Http\Request;

class GpusController extends Controller
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
            $gpus = Gpus::where('gpuID', 'LIKE', "%$keyword%")
                ->orWhere('arquitectura', 'LIKE', "%$keyword%")
                ->orWhere('frecuencia', 'LIKE', "%$keyword%")
                ->orWhere('memoria_de_video', 'LIKE', "%$keyword%")
                ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $gpus = Gpus::latest()->paginate($perPage);
        }

        return view('gpus.index', compact('gpus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('gpus.create');
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
        
        Gpus::create($requestData);

        return redirect('gpus')->with('flash_message', 'Gpus added!');
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
        $gpus = Gpus::findOrFail($id);

        return view('gpus.show', compact('gpus'));
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
        $gpus = Gpus::findOrFail($id);

        return view('gpus.edit', compact('gpus'));
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
        
        $gpus = Gpus::findOrFail($id);
        $gpus->update($requestData);

        return redirect('gpus')->with('flash_message', 'Gpus updated!');
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
        Gpus::destroy($id);

        return redirect('gpus')->with('flash_message', 'Gpus deleted!');
    }
}
