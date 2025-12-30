<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::latest()->paginate(10);
        return view('master.equipment.index', compact('equipment'));
    }

    public function create()
    {
        return view('master.equipment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_code' => 'required|string|max:50|unique:equipment',
            'model' => 'required|string',
            'type' => 'required|string',
            'status' => 'required|string',
        ]);

        Equipment::create($request->all());

        return redirect()->route('equipment.index')->with('success', 'Equipment added successfully.');
    }

    public function edit(Equipment $equipment)
    {
        return view('master.equipment.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'unit_code' => 'required|string|max:50|unique:equipment,unit_code,' . $equipment->id,
            'model' => 'required|string',
            'type' => 'required|string',
            'status' => 'required|string',
        ]);

        $equipment->update($request->all());

        return redirect()->route('equipment.index')->with('success', 'Equipment updated successfully.');
    }

    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('equipment.index')->with('success', 'Equipment deleted successfully.');
    }
}
