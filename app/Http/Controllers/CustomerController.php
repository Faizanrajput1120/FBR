<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\SaleDetail; 
use App\Models\PurchaseDetail; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the parties.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
         $userCId = Auth::user()->c_id;
         $query = Buyer::where('cid', $userCId);
    
    if ($request->has('search')) {
        $search = $request->search;
        $query->where('business_name', 'like', '%' . $search . '%')
              ->orWhere('ntn_cnic', 'like', '%' . $search . '%');
    }

    if ($request->has('sort')) {
        $direction = $request->direction === 'desc' ? 'desc' : 'asc';
        $query->orderBy($request->sort, $direction);
    }
    
    $buyers = $query->paginate(10);
    return view('customer.index', compact('buyers'));
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
            'business_name' => 'required|string|max:255',
            'registration_type' => 'required|in:Registered,Unregistered',
            'ntn_cnic' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:100',
        ]);

        $validated['ntn_cnic'] = $validated['ntn_cnic'] ?? '';
        $validated['address'] = $validated['address'] ?? '';
        $validated['province'] = $validated['province'] ?? '';

        $validated['user_id'] = Auth::id() ?? 1;
        $validated['cid'] = Auth::user()->c_id;

        Buyer::create($validated);

        return redirect()->route('custommer.index')
            ->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified party.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $buyer = Buyer::where('cid', Auth::user()->c_id)->findOrFail($id);
        return view('customer.show', compact('buyer'));
    }

    /**
     * Show the form for editing the specified party.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        
        $buyer = Buyer::where('cid', Auth::user()->c_id)->findOrFail($id);
        return view('customer.edit', compact('buyer'));
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
        $buyer = Buyer::where('cid', Auth::user()->c_id)->findOrFail($id);

        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'registration_type' => 'required|in:Registered,Unregistered',
            'ntn_cnic' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:100',
        ]);

        $validated['ntn_cnic'] = $validated['ntn_cnic'] ?? '';
        $validated['address'] = $validated['address'] ?? '';
        $validated['province'] = $validated['province'] ?? '';

        $buyer->update($validated);

        return redirect()->route('custommer.index')
            ->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified party from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
   public function destroy($id)
{
    $buyer = Buyer::where('cid', Auth::user()->c_id)->findOrFail($id);
    $buyer->delete();

    return redirect()->route('custommer.index')
        ->with('success', 'Customer deleted successfully.');
}
}