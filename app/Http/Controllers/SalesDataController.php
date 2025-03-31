<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SalesData;
use Illuminate\Http\Request;

class SalesDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesData = SalesData::all();
        return view('sales_data.index', compact('salesData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sales_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ORDERNUMBER' => 'required|numeric|unique:sales_data',
            'ORDERDATE' => 'required|date', // Pastikan input adalah tanggal yang valid
            // ... (validasi lain)
        ]);

        // Format tanggal ke DD-MM-YYYY
        $orderDate = Carbon::parse($request->ORDERDATE)->format('Y-m-d'); // Ubah format menjadi YYYY-MM-DD untuk disimpan ke database

        $data = $request->all();
        $data['ORDERDATE'] = $orderDate; // Ganti nilai ORDERDATE dengan format yang baru

        SalesData::create($data);
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $orderNumber = $request->query('id'); // Ambil ID dari $_GET

        $salesData = SalesData::where('ORDERNUMBER', $orderNumber)->first(); // Query database

        if (!$salesData) {
            abort(404);
        }

        return view('sales_data.show', compact('salesData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $orderNumber = $request->query('id'); // Ambil ID dari $_GET

        $salesData = SalesData::where('ORDERNUMBER', $orderNumber)->first(); // Query database

        if (!$salesData) {
            abort(404);
        }

        return view('sales_data.edit', compact('salesData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $orderNumber = $request->query('id');

        $salesData = SalesData::where('ORDERNUMBER', $orderNumber)->first();

        if (!$salesData) {
            abort(404);
        }

        $request->validate([
            'ORDERNUMBER' => 'required|numeric|unique:sales_data,ORDERNUMBER,'.$orderNumber.',ORDERNUMBER',
            'ORDERDATE' => 'required|date', // Pastikan input adalah tanggal yang valid
            // ... (validasi lain)
        ]);

        // Format tanggal ke DD-MM-YYYY
        $orderDate = Carbon::parse($request->ORDERDATE)->format('Y-m-d'); // Ubah format menjadi YYYY-MM-DD untuk disimpan ke database

        $data = $request->all();
        $data['ORDERDATE'] = $orderDate; // Ganti nilai ORDERDATE dengan format yang baru

        $salesData->update($data);
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
         $orderNumber = $request->query('id'); // Ambil ID dari $_GET

        $salesData = SalesData::where('ORDERNUMBER', $orderNumber)->first(); // Query database

        if (!$salesData) {
            abort(404);
        }

        $salesData->delete();
        return redirect()->route('sales_data.index')
                         ->with('success', 'Data penjualan berhasil dihapus.');
    }
}