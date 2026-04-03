<?php

namespace App\Http\Controllers;

use App\Models\Units as YourModelName;
use Illuminate\Http\Request;

class ItemUnit extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = YourModelName::orderBy('created_at', 'desc')->paginate(10);
        return view('Units.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $request->validate([
        'unit_value' => 'required|string|max:100',
        // Add other validation rules as needed
    ]);

    // Get the current maximum ID
    $maxId = YourModelName::max('id') ?? 0; // Default to 0 if no records exist
    
    // Increment to get the new ID
    $newId = $maxId + 1;

    // Create the record with the new ID
    $item = YourModelName::create([
        'id' => $newId, // Manually set the incremented ID
        'unit_value' => $request->unit_value,
        // Add other fields as needed
    ]);

    return redirect()->route('unit.index')
                    ->with('success', 'Item created successfully. ID: ' . $newId);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    try {
        // Find the item or fail with 404
        $item = YourModelName::findOrFail($id);
        
        // Delete the item
        $item->delete();
        
        return redirect()->route('unit.index')
                        ->with('success', 'Item deleted successfully');
                        
    } catch (\Exception $e) {
        return redirect()->route('unit.index')
                        ->with('error', 'Error deleting item: ' . $e->getMessage());
    }
}
}