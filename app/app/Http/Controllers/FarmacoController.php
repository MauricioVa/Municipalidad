<?php

namespace App\Http\Controllers;

use App\Models\Farmaco;
use App\Models\Farmacia;
use Illuminate\Http\Request;

/**
 * Class FarmacoController
 * @package App\Http\Controllers
 */
class FarmacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmacos = Farmaco::paginate();

        return view('farmaco.index', compact('farmacos'))
            ->with('i', (request()->input('page', 1) - 1) * $farmacos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmaco = new Farmaco();
        $farmacias= Farmacia::pluck('NombreFarmacia','id');
        return view('farmaco.create', compact('farmaco','farmacias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Farmaco::$rules);

        $farmaco = Farmaco::create($request->all());

        return redirect()->route('farmacos.index')
            ->with('success', 'Farmaco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmaco = Farmaco::find($id);

        return view('farmaco.show', compact('farmaco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmaco = Farmaco::find($id);
        $farmacias= Farmacia::pluck('NombreFarmacia','id');
        return view('farmaco.edit', compact('farmaco','farmacias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Farmaco $farmaco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmaco $farmaco)
    {
        request()->validate(Farmaco::$rules);

        $farmaco->update($request->all());

        return redirect()->route('farmacos.index')
            ->with('success', 'Farmaco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $farmaco = Farmaco::find($id)->delete();

        return redirect()->route('farmacos.index')
            ->with('success', 'Farmaco deleted successfully');
    }
}
