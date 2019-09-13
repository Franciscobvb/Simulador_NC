<?php

namespace App\Http\Controllers\simulador;

use Request;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('simuladornc.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Nivel 0
        $lvl0pzpiw	 = Request::input('lvl0pzpiw');
        $lvl0pzwa	 = Request::input('lvl0pzwa');
        $lvl0pzaqp	 = Request::input('lvl0pzaqp');
        $lvl0pzop	 = Request::input('lvl0pzop');
        $lvl0pais    = Request::input('lvl0pais');
        $lvl0rango   = Request::input('lvl0rango');

        // Nivel 1 Linea 1
        $lvl1l1pzpiw	= Request::input('lvl1l1pzpiw');
        $lvl1l1pzwa		= Request::input('lvl1l1pzwa');
        $lvl1l1pzaqp	= Request::input('lvl1l1pzaqp');
        $lvl1l1pzop		= Request::input('lvl1l1pzop');
        $lvl1l1pais		= Request::input('lvl1l1pais');
        $lvl1l1rango	= Request::input('lvl1l1rango');

        // Nivel 2 Linea 1
        $lvl2l1pzpiw	= Request::input('lvl2l1pzpiw');
        $lvl2l1pzwa		= Request::input('lvl2l1pzwa');
        $lvl2l1pzaqp	= Request::input('lvl2l1pzaqp');
        $lvl2l1pzop		= Request::input('lvl2l1pzop');
        $lvl2l1pais		= Request::input('lvl2l1pais');
        $lvl2l1rango	= Request::input('lvl2l1rango');

        // Nivel 1 Linea 2
        $lvl1l2pzpiw	= Request::input('lvl1l2pzpiw');
        $lvl1l2pzwa		= Request::input('lvl1l2pzwa');
        $lvl1l2pzaqp	= Request::input('lvl1l2pzaqp');
        $lvl1l2pzop		= Request::input('lvl1l2pzop');
        $lvl1l2pais		= Request::input('lvl1l2pais');
        $lvl1l2rango	= Request::input('lvl1l2rango');

        // Nivel 2 Linea 2
        $lvl2l2pzpiw	= Request::input('lvl2l2pzpiw');
        $lvl2l2pzwa		= Request::input('lvl2l2pzwa');
        $lvl2l2pzaqp	= Request::input('lvl2l2pzaqp');
        $lvl2l2pzop		= Request::input('lvl2l2pzop');
        $lvl2l2pais		= Request::input('lvl2l2pais');
        $lvl2l2rango	= Request::input('lvl2l2rango');

        // Nivel 1 Linea 3
        $lvl1l3pzpiw	= Request::input('lvl1l3pzpiw');
        $lvl1l3pzwa		= Request::input('lvl1l3pzwa');
        $lvl1l3pzaqp	= Request::input('lvl1l3pzaqp');
        $lvl1l3pzop		= Request::input('lvl1l3pzop');
        $lvl1l3pais		= Request::input('lvl1l3pais');
        $lvl1l3rango	= Request::input('lvl1l3rango');

        // Nivel 2 Linea 3
        $lvl2l3pzpiw	= Request::input('lvl2l3pzpiw');
        $lvl2l3pzwa		= Request::input('lvl2l3pzwa');
        $lvl2l3pzaqp	= Request::input('lvl2l3pzaqp');
        $lvl2l3pzop		= Request::input('lvl2l3pzop');
        $lvl2l3pais		= Request::input('lvl2l3pais');
        $lvl2l3rango	= Request::input('lvl2l3rango');

        $Pais = "0=$lvl0pais;1=$lvl1l1pais;2=$lvl2l1pais;3=$lvl1l2pais;4=$lvl2l2pais;5=$lvl1l3pais;6=$lvl2l3pais";
        $PiWater = "0=$lvl0pzpiw;1=$lvl1l1pzpiw;2=$lvl2l1pzpiw;3=$lvl1l2pzpiw;4=$lvl2l2pzpiw;5=$lvl1l3pzpiw;6=$lvl2l3pzpiw";
        $WaterFall = "0=$lvl0pzwa;1=$lvl1l1pzwa;2=$lvl2l1pzwa;3=$lvl1l2pzwa;4=$lvl2l2pzwa;5=$lvl1l3pzwa;6=$lvl2l3pzwa";
        $AquaPour = "0=$lvl0pzaqp;1=$lvl1l1pzaqp;2=$lvl2l1pzaqp;3=$lvl1l2pzaqp;4=$lvl2l2pzaqp;5=$lvl1l3pzaqp;6=$lvl2l3pzaqp";
        $Optimizer = "0=$lvl0pzop;1=$lvl1l1pzop;2=$lvl2l1pzop;3=$lvl1l2pzop;4=$lvl2l2pzop;5=$lvl1l3pzop;6=$lvl2l3pzop";
        $Rango = "0=$lvl0rango;1=$lvl1l1rango;2=$lvl2l1rango;3=$lvl1l2rango;4=$lvl2l2rango;5=$lvl1l3rango;6=$lvl2l3rango";

        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("EXEC Cuentas_TEST ?,?,?,?,?,?",array($PiWater, $AquaPour, $WaterFall, $Optimizer, $Pais ,$Rango));
        \DB::disconnect('sqlsrv');
        
        return \Response::json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
