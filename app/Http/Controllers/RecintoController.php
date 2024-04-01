<?php

namespace App\Http\Controllers;

use App\Models\Recinto;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    public function index()
    {
        $recintos = Recinto::all();
        return view('recintos.index', compact('recintos'));
    }

    public function create()
    {
        return view('recintos.create');
    }

    public function store(Request $request)
    {
        Recinto::create($request->all());
        return redirect()->route('recintos.index')->with('success', 'Recinto creado exitosamente.');
    }

    public function show(Recinto $recinto)
    {
        return view('recintos.show', compact('recinto'));
    }

    public function edit(Recinto $recinto)
    {
        return view('recintos.edit', compact('recinto'));
    }

    public function update(Request $request, Recinto $recinto)
    {
        $recinto->update($request->all());
        return redirect()->route('recintos.index')->with('success', 'Recinto actualizado exitosamente.');
    }

    public function destroy(Recinto $recinto)
    {
        $recinto->delete();
        return redirect()->route('recintos.index')->with('success', 'Recinto eliminado exitosamente.');
    }
}
