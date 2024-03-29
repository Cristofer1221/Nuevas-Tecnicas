<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
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
            $mouse = Mouse::where('mouseID', 'LIKE', "%$keyword%")
                ->orWhere('DPI_Max', 'LIKE', "%$keyword%")
                ->orWhere('DPI_Ajustable', 'LIKE', "%$keyword%")
                ->orWhere('Diseño', 'LIKE', "%$keyword%")
                ->orWhere('categoria_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mouse = Mouse::latest()->paginate($perPage);
        }

        return view('mouse.index', compact('mouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('mouse.create');
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
        
        Mouse::create($requestData);

        return redirect('mouse')->with('flash_message', 'Mouse added!');
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
        $mouse = Mouse::findOrFail($id);

        return view('mouse.show', compact('mouse'));
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
        $mouse = Mouse::findOrFail($id);

        return view('mouse.edit', compact('mouse'));
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
        
        $mouse = Mouse::findOrFail($id);
        $mouse->update($requestData);

        return redirect('mouse')->with('flash_message', 'Mouse updated!');
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
        Mouse::destroy($id);

        return redirect('mouse')->with('flash_message', 'Mouse deleted!');
    }
}
