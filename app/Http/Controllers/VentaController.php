<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = DB::table('ventas')
        ->join('clientes', 'ventas.cliente_id', '=', 'clientes.id')
        ->join('vehiculos', 'ventas.vehiculo_id', '=', 'vehiculos.id')
        ->select(
            'ventas.id',
            'ventas.fecha_venta',
            'ventas.precio_final',
            'clientes.nombre as cliente_nombre',
            'vehiculos.marca as vehiculo_marca'
        )
        ->get();

        return view('venta.index', ['ventas' => $ventas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = DB::table('clientes')->get();
        $vehiculos = DB::table('vehiculos')->get();

        return view('venta.new', [
            'clientes' => $clientes,
            'vehiculos' => $vehiculos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new Venta();

        $venta->vehiculo_id = $request->vehiculo_id;
        $venta->cliente_id = $request->cliente_id;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->precio_final = $request->precio_total;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venta = Venta::find($id);
        $clientes = DB::table('clientes')->get();
        $vehiculos = DB::table('vehiculos')->get();
        return view('venta.edit', [
            'venta' => $venta,
            'clientes' => $clientes,
            'vehiculos' => $vehiculos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venta = Venta::find($id);

        $venta->vehiculo_id = $request->vehiculo_id;
        $venta->cliente_id = $request->cliente_id;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->precio_final = $request->precio_total;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venta = Venta::find($id);
        $venta->delete();

        return redirect()->route('ventas.index');
    }
}
