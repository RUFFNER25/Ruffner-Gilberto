<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    public function index()
    {
        $cuidadores = Cuidador::all();
        return view('cuidadores.index', compact('cuidadores'));
    }

    public function create()
    {
        return view('cuidadores.create');
    }

    public function store(Request $request)
    {
        Cuidador::create($request->all());
        return redirect()->route('cuidadores.index')->with('success', 'Cuidador creado exitosamente.');
    }

    public function show(Cuidador $cuidador)
    {
        return view('cuidadores.show', compact('cuidador'));
    }

    public function edit(Cuidador $cuidador)
    {
        return view('cuidadores.edit', compact('cuidador'));
    }

    public function update(Request $request, Cuidador $cuidador)
    {
        $cuidador->update($request->all());
        return redirect()->route('cuidadores.index')->with('success', 'Cuidador actualizado exitosamente.');
    }

    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
        return redirect()->route('cuidadores.index')->with('success', 'Cuidador eliminado exitosamente.');
    }
}
