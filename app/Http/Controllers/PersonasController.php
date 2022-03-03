<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');    
    }

    public function index()
    {
        $personals = Personas::all();
        return view('/administracion/personal', compact('personals'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate([
            'CI'  => 'required',
            'nombres'  => 'required',
            'apellidos'   => 'required',
            'grado' => 'required',
            'dependencia'  => 'required',
            'telefono'  => 'required',
        ]);
        Personas::create($request->all());
        return redirect('personal');
    }

    
    public function show(Personas $personas)
    {
        //
    }

   
    public function edit(Personas $personas)
    {
        $personal = Personas::find($id);
        return view('/personal.personal_edit', compact('personal'));
    }
      public function update(Request $request, $id)
    {
        $personal = Personas::find($id);
        $personal->CI = $request->get('CI');
        $personal->nombres = $request->get('nombres');
        $personal->apellidos = $request->get('apellidos');
        $personal->grado = $request->get('grado');
        $personal->dependencia = $request->get('dependencia');
        $personal->telefono = $request->get('telefono');

        $personal->save();

        return redirect('/personal/personal');
    }

    public function destroy($id)
    {
        $personal = Personas::find($id);
        $personal->delete();
        return back();
    }
}
