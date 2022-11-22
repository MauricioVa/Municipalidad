<?php

namespace App\Http\Controllers;

use App\Models\Procedencia;
use Illuminate\Http\Request;

/**
 * Class ProcedenciaController
 * @package App\Http\Controllers
 */
class ProcedenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedencias = Procedencia::paginate();

        return view('procedencia.index', compact('procedencias'))
            ->with('i', (request()->input('page', 1) - 1) * $procedencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedencia = new Procedencia();
        return view('procedencia.create', compact('procedencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Procedencia::$rules);

        $procedencia = Procedencia::create($request->all());

        return redirect()->route('procedencias.index')
            ->with('success', 'Procedencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedencia = Procedencia::find($id);

        return view('procedencia.show', compact('procedencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedencia = Procedencia::find($id);

        return view('procedencia.edit', compact('procedencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Procedencia $procedencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedencia $procedencia)
    {
        request()->validate(Procedencia::$rules);

        $procedencia->update($request->all());

        return redirect()->route('procedencias.index')
            ->with('success', 'Procedencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $procedencia = Procedencia::find($id)->delete();

        return redirect()->route('procedencias.index')
            ->with('success', 'Procedencia deleted successfully');
    }
}
