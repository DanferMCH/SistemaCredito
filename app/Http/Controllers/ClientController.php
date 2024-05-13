<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClient;
use App\Models\Client;
use App\Models\Credit;
use App\Models\History;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function principal()
    {
        $clients = Client::join('credits', 'clients.id', '=', 'credits.client_id')
            ->select('clients.id as idCliente', 'clients.name', 'clients.phone_number', 'clients.location', 'credits.*')
            ->get();

        $cantidadClientes = Client::count();
        $sumaDeuda = Credit::sum('debt');

        return view('menu', compact('clients', 'cantidadClientes', 'sumaDeuda'));
    }
    public function create()
    {
        $clients = Client::join('credits', 'clients.id', '=', 'credits.client_id')
            ->select('clients.id as idCliente', 'clients.name', 'clients.phone_number', 'clients.location', 'credits.*')
            ->get();
        return view('agregar', compact('clients'));
    }

    public function store(StoreClient $request)
    {
        $cliente = Client::create([
            'name' => $request->CrearNombreCompleto,
            'phone_number' => $request->CrearTelefono,
            'location' => $request->CrearDireccion,
        ]);

        $cliente = Credit::create([
            'debt' => $request->CrearMonto,
            'star_date' => $request->CrearFechaInicio,
            'pay_date' => $request->CrearFechaPago,
            'description' => $request->CrearDescripcion,
            'client_id' => $cliente->id
        ]);

        return redirect()->route('cliente.create');
    }
    public function delete($id)
    {

        $credito = Credit::where('client_id', $id)->first();
        $cliente = Client::find($id);

        if ($credito) {
            $credito->delete();
            $cliente->delete();
            return redirect()->back()->with('success', 'Modelo eliminado correctamente');
        } else {
            return redirect()->back()->with('error', 'No se pudo encontrar el modelo para eliminar');
        }
    }
    public function edit($id)
    {
        return view('actualizar', compact('id'));
    }

    public function update(Request $request)
    {
        $id = $request->ActualizarId;

        $cliente = Client::find($id);
        $cliente->update([
            'name' => $request->ActualizarNombreCompleto,
            'phone_number' => $request->ActualizarTelefono,
            'location' => $request->ActualizarDireccion,

        ]);
        return redirect()->route('cliente.edit', compact('id'));
    }

    public function updateAmortize(Request $request)
    {

        $id = $request->AmortizarId;

        $credito = Credit::where('client_id', $id)->first();

        $montoActual = $request->AmortizarDeudaTotal;
        $amortizacion = $request->AmortizarPagoRealizado;

        $nuevoMonto = $montoActual - $amortizacion;

        $credito->debt = $nuevoMonto;
        $credito->save();

        $history = History::create([
            'name' => $request->AmortizarNombreCompleto,
            'pay' => $request->AmortizarPagoRealizado,
            'state' => "1", //amortizo credito
            'date' => now()->format('Y-m-d'),
        ]);

        return redirect()->route('cliente.edit', compact('id'));
    }

    public function increaseCredit(Request $request)
    {
        $id = $request->AumentarId;
        $credito = Credit::where('client_id', $id)->first();

        $montoActual = $request->AumentarDeudaTotal;
        $incremento = $request->AumentarMonto;

        $nuevoMonto = $montoActual + $incremento;

        $credito->debt = $nuevoMonto;
        $credito->description = $request->AumentarDescripcion;
        $credito->save();

        $history = History::create([
            'name' => $request->AumentarNombreCompleto,
            'pay' => $request->AumentarMonto,
            'state' => "2", //aumento credito 
            'date' => now()->format('Y-m-d'),
        ]);

        return redirect()->route('cliente.edit', compact('id'));
    }
    public function updateDate(Request $request)
    {
        $id = $request->ActualizaFechaId;
        $credito = Credit::where('client_id', $id)->first();
        $credito->pay_date = $request->ActualizarNuevaFechaPago;

        $credito->save();
        return redirect()->route('cliente.edit', compact('id'));
    }
    public function detailClient($id)
    {
        $clients = Client::join('credits', 'clients.id', '=', 'credits.client_id')
            ->select('clients.id as idCliente', 'clients.name', 'clients.phone_number', 'clients.location', 'credits.*')
            ->where('credits.client_id', $id)
            ->first();
        if ($clients) {
            return response()->json([
                'idCliente' => $clients->idCliente,
                'name' => $clients->name,
                'phone_number' => $clients->phone_number,
                'location' => $clients->location,
                'debt' => $clients->debt,
                'star_date' => $clients->star_date,
                'pay_date' => $clients->pay_date,
                'description' => $clients->description
            ]);
        }
    }

    public function historyCredit()
    {
        $histories = History::orderBy('date', 'desc')->get();
        return view('transacciones', compact('histories'));
    }
}
