<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$dataEmpleado = request()->all();
    
        $dataEmpleado = request()->except('_token','Guardad_Datos');

        if ($request->hasFile('Foto')) {
            $dataEmpleado['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Empleado::insert($dataEmpleado);


        return response()->json($dataEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
        return view('empleado.update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Empleado::destroy($id);

        return redirect('empleado');
    }
}
