<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Area;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = ($request->get('texto'));
        $empleado = DB::table('empleado as e')
                    ->join('areas as a', 'a.id','=','e.id')
                    ->select('e.id as idempleado','e.nombre','e.email', 'e.sexo', 'a.nombre as area', 'e.boletin',) 
                    ->where('e.nombre', 'LIKE','%'.$texto.'%')
                    ->orwhere('e.email', 'LIKE','%'.$texto.'%')
                    ->paginate(7);
        return view('empleado.index',compact('empleado','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('empleado.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->fill($request->all());
        $empleado->boletin = $request->has('boletin') ? 1 : 0;
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $empleado = Empleado::findOrFail($id);
        $areas = Area::all();
         return view('empleado.edit', compact('empleado', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->fill($request->all());
        $empleado->boletin = $request->has('boletin') ? 1 : 0;
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
