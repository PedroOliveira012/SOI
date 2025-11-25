<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kits;


class KitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kits = Kits::all();
        return view('kits.kits-editing-home', ['kits' => $kits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function edit($kitId) // Mude o nome da variável para clareza
    {
        $kit = Kits::find($kitId);
        return view('kits.kits-editing-form', ['kit' => $kit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kits $kit, $index)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'qty' => 'required|numeric',
            'un' => 'required|string',
            'desc' => 'required|string',
            'code' => 'required|string',
            'manufacturer' => 'required|string',
        ]);

        //Check for line breaks and convert to array if found
        str_contains($validatedData['qty'], "\r\n") ? $qty = explode("\r\n", $validatedData['qty']): $qty = $validatedData['qty'];
        str_contains($validatedData['desc'], "\r\n") ? $desc = explode("\r\n", $validatedData['desc']): $desc = $validatedData['desc'];
        str_contains($validatedData['code'], "\r\n") ? $code = explode("\r\n", $validatedData['code']): $code = $validatedData['code'];

        // Map request fields to model fields
        $fieldMap = [
            'qty' => $qty,
            'un' => $validatedData['un'],
            'desc' => $desc,
            'code' => $code,
            'manufacturer' => $validatedData['manufacturer'],
        ];

        // Define the updates array, using dot notation for nested fields
        $updates = [
            "set.{$index}.qty" => $qty,
            "set.{$index}.un" => $validatedData['un'],
            "set.{$index}.desc" => $desc,
            "set.{$index}.code" => $code,
            "set.{$index}.manufacturer" => $validatedData['manufacturer'],
        ];

        // Execute the update
        Kits::where('_id', $kit->_id)->update($updates);

        return redirect()->back()->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
