<?php

namespace App\Http\Controllers;

use App\Models\Dueño_model;
use App\Models\Vehiculo_model;
use Illuminate\Http\Request;

class Admin_Vehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if($id=='A765'){

            return view('zonainicio');
        }
        return abort(403, "¡ZONA PROHIBIDA!.");
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre'=>'required|string',
            'cedula'=>'required',
            'marca'=>'required|string|exists:vehiculo',
            'placa'=>'required|string',
        ]);




        $Dueño_model = new Dueño_model($request->all());
        $Dueño_model->save();
        $Vehiculo_model = new Vehiculo_model($request->all());
        $Vehiculo_model->save();

      return (view('zonainicio'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vehiculo=Vehiculo_model::all();









        return view('zonainicio',compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    { $cantidadmazda=0;
        $cantidadtoyota=0;
        $cantidad3=0;
        $vehiculo=Vehiculo_model::all();

        foreach ($vehiculo as $valor){
            if($valor->marca=='mazda'){
                $cantidadmazda+=1;
            }elseif ($valor->marca=='toyota'){
                $cantidadtoyota+=1;
            }else{
                $cantidad3+=1;
            }

        }
        return view('zonainicio',compact('cantidadmazda','cantidadtoyota','cantidad3'));
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
