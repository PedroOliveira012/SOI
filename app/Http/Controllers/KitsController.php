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
            'qty-input' => 'required|numeric',
            'un-select' => 'required|string',
            'desc-input' => 'required|string',
            'code-input' => 'required|string',
            'manufacturer-input' => 'required|string',
        ]);
        
        // Map request fields to model fields
        $fieldMap = [
            'qty-input' => 'qntd',
            'un-select' => 'un',
            'desc-input' => 'desc',
            'code-input' => 'code',
            'manufacturer-input' => 'manufacturer',
        ];
        // Update only the specified set in the 'set' array
        foreach ($validatedData as $requestKey => $value) {
            // Check if the request key exists in the field map
            if (isset($fieldMap[$requestKey])) {
                // Get the corresponding model field
                $modelField = $fieldMap[$requestKey];
                // Create the MongoDB key for the specific index
                $mongoKey = "set.$index.$modelField";
                // Update the specific field in the database
                Kits::where('_id', $kit->_id)->update([$mongoKey => $value]);
            }
        }

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
