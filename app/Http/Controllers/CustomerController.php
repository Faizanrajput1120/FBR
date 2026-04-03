<?php

namespace App\Http\Controllers;

use App\Models\Member as Party;
use App\Models\SaleDetail; 
use App\Models\PurchaseDetail; 
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the parties.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
         $query = Party::where('type', 'customer');
    
    if ($request->has('sort')) {
        $direction = $request->direction === 'desc' ? 'desc' : 'asc';
        $query->orderBy($request->sort, $direction);
    }
    
    $parties = $query->paginate(10);
    return view('customer.index', compact('parties'));
    }

    /**
     * Show the form for creating a new party.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created party in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'buyer_name' => 'required|string|max:255',
            'buyer_type' => 'required|in:Registered,Unregistered',
            'cnic' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'NTN' => 'nullable|max:255',
            'strn' => 'nullable|max:255',
            'type' => 'nullable|max:255'
        ]);

        Party::create($validated);

        return redirect()->route('custommer.index')
            ->with('success', 'Party created successfully.');
    }

    /**
     * Display the specified party.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $party = Party::findOrFail($id);
        return view('customer.show', compact('party'));
    }

    /**
     * Show the form for editing the specified party.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        
        $party = Party::findOrFail($id);
        return view('customer.edit', compact('party'));
    }

    /**
     * Update the specified party in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $party = Party::findOrFail($id);

        $validated = $request->validate([
            'buyer_name' => 'required|string|max:255',
            'buyer_type' => 'required|in:Registered,Unregistered',
            'cnic' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'NTN' => 'nullable|max:255',
            'strn' => 'nullable|max:255',
            'type' => 'nullable|max:255'
        ]);

        $party->update($validated);

        return redirect()->route('custommer.index')
            ->with('success', 'Party updated successfully.');
    }

    /**
     * Remove the specified party from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
   public function destroy($id)
{
    // Check for related records in SalesInvoice
    $salesRecords = SaleDetail::where('fk_parties_id', $id)->exists();
    
    // Check for related records in PurchaseDetail
    $purchaseRecords = PurchaseDetail::where('fk_parties_id', $id)->exists();

    if ($salesRecords || $purchaseRecords) {
        return redirect()->route('parties.index')
            ->with('error', 'Cannot delete party because related records exist in ' );
    }

    $party = Party::findOrFail($id);
    $party->delete();

    return redirect()->route('custommer.index')
        ->with('success', 'Party deleted successfully.');
}
}