<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Models\BoxBoard;
use App\Models\ItemType;
use App\Models\ItemMaster;
use App\Models\HsMainCode;
use App\Models\HsSubcategory;
use App\Models\Units;
use App\Models\ItemLog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class InventoryController extends Controller
{
  public function index_itemmaster(Request $request)
{
    $user=Auth::user();
    $item_code = $request->input('item_code');
    $type_id = $request->input('type_id');

    $query = ItemMaster::query();

    if ($item_code) {
        $query->where('item_code', $item_code);
    }

    if ($type_id) {
        $query->where('type_id', $type_id);
    }

    $itemmasters = $query->with('itemTypes')->where('c_id',$user->c_id)->get();

    // Fetch item codes and item types for dropdowns
    $items = ItemMaster::pluck('item_code', 'item_code')->where('c_id',$user->c_id)->unique();
    $itemTypes = ItemType::pluck('type_title', 'id')->where('c_id',$user->c_id)->unique();

    return view('inventory.list_item_master', get_defined_vars());
}
    public function index_itemtype()
    {
        $user=Auth::user();
        $itemtypes = ItemType::where('c_id',$user->c_id)->get();
        return view('inventory.list_item_type',get_defined_vars());
    }
    public function createitemmaster()
    {
        $user=Auth::user();
        $parties = Party::where('c_id',$user->c_id)->get();
        $itemtypes = ItemType::where('c_id',$user->c_id)->get();
        $units=Units::all();
        $headings=HsMainCode::with('subcategories')->get();
        $saleType=['Taxable','Non-TaxAble','Imported','Exampted','Zeero Rated'];
        return view('inventory.create_item_master',get_defined_vars());
    }
    public function createitemtype()
    {
                $user=Auth::user();
        $itemMasters = ItemMaster::where('c_id',$user->c_id)->get();
        return view('inventory.create_item_type',get_defined_vars());
    }
    public function boxboard(Request $request)
    {
        $user=Auth::user();
        BoxBoard::create([
            'name' => $request->name,
            'lenght' => $request->lenght,
            'width' => $request->width,
            'gsm' => $request->gsm,
            'no_of_packets' => $request->no_of_packets,
            'party_name' => $request->party_name,
            'gate_pass_in' => $request->gate_pass_in,
            'c_id'=>$user->c_id
           ]);
           return redirect()->back()->with('success', 'Employee created successfully.');
    }
  public function itemmaster(Request $request)
{
    // Validate incoming request
            $user=Auth::user();
    $request->validate([
        'item_code' => 'required|string|max:255', // Validate item_code
        'hs_code' => 'required|string|max:255', // Validate hscode
        'purchase' => 'required|string|max:255', // Validate purchase
        'sale_rate' => 'required|numeric|min:0', // Validate sale_rate as a non-negative number
        'gramage' => 'required|string|max:255', // Validate gramage
        'sale_type'=>'required',
        'sale'=>'nullable',
        'unit_value'=>'nullable',
        'unit'=>'nullable'
    ]);

    // Create new ItemMaster entry
    $itemMaster = ItemMaster::create([
        'item_code' => $request->item_code,
        'hscode' => $request->hs_code,
        'purchase' => $request->purchase,
        'sale_rate' => $request->sale_rate,
        'gramage' => $request->gramage,
        'c_id'=>$user->c_id,
        'sale_type'=>$request->sale_type,
        'sale'=>$request->sale,
        'unit_value'=>$request->unit_value,
        'unit'=>$request->unit
    ]);

    // Create corresponding entry in ItemLog table
    

    // Redirect with success message
    return redirect()->route('inventory.itemmaster.list')->with('success', 'Item created successfully.');
}


    public function itemmasteredit($id)
    {
                $user=Auth::user();
        $itemMasters = ItemMaster::findOrFail($id);
        $itemtypes = ItemType::where('c_id',$user->c_id)->get(); // Get all item types for the dropdown
        $units=Units::all();
        
        $headings=HsMainCode::with('subcategories')->get();
        $saleType=['Taxable','Non-TaxAble','Imported','Exampted','Zeero Rated'];
        return view('inventory.edit_item_master', compact('itemMasters', 'itemtypes','units','saleType','headings')); // Pass both to the view
    }

 public function itemmasterupdate(Request $request, $id)
{
            $user=Auth::user();
    // Validate incoming request
    $request->validate([
        'item_code' => 'required|string|max:255', // Validate item_code
        'hs_code' => 'required|string|max:255', // Validate hscode
        'purchase' => 'required|string|max:255', // Validate purchase
        'sale_rate' => 'required|numeric|min:0', // Validate sale_rate as a non-negative number
        'gramage' => 'required|string|max:255', // Validate gramage
        'sale_type'=>'required',
        'sale'=>'nullable',
        'unit_value'=>'nullable',
        'unit'=>'nullable'
    ]);

    try {
        // Find the ItemMaster record
        $itemMaster = ItemMaster::findOrFail($id);

        // Store the old purchase value before updating
        $oldPurchase = $itemMaster->purchase;

        // Update the record
        $itemMaster->item_code = $request->input('item_code');
        $itemMaster->hscode = $request->input('hs_code');
        $itemMaster->purchase = $request->input('purchase');
        $itemMaster->sale_rate = $request->input('sale_rate');
        $itemMaster->sale_type = $request->input('sale_type');
        $itemMaster->sale = $request->input('sale');
        $itemMaster->unit_value = $request->input('unit_value');
        $itemMaster->unit = $request->input('unit');
        $itemMaster->save();

        // Create corresponding entry in ItemLog table
        

    } catch (\Exception $e) {
        // Dump the error message and stop execution
        dd($e->getMessage());
    }

    // Redirect with success message
    return redirect()->route('inventory.itemmaster.list')->with('success', 'Item Master updated successfully');
}


public function itemlogList(Request $request)
{
    $user=Auth::user();
    // Fetch all unique item_codes for the dropdown
    $items = ItemLog::distinct()->pluck('item_code');

    // Filter ItemLog records by item_code if it's selected in the dropdown
    $itemLogs = ItemLog::when($request->item_code, function ($query) use ($request) {
        return $query->where('item_code', $request->item_code);
    })->where('c_id',$user->c_id)->get();

    // Return the view with the itemLogs data and items for the dropdown
    return view('inventory.item_log', compact('itemLogs', 'items'));
}


    public function itemmasterdestroy($id)
    {
                $user=Auth::user();
        $itemMasters = ItemMaster::findOrFail($id);
        $itemMasters->delete();

        return redirect()->route('inventory.itemmaster.list')->with('success', 'Item Master deleted successfully');
    }
   public function itemtype(Request $request)
{
    $user=Auth::user();
    // Validate incoming request
    $request->validate([
        'type_title' => 'required|string|max:255|unique:item_types,type_title', // Ensure type_title is unique and within length constraints
    ]);

    // Create a new ItemType record
    ItemType::create([
        'type_title' => $request->type_title,
        'c_id'=>$user->c_id
    ]);

    // Redirect with success message
    return redirect()->route('inventory.itemtype.list')->with('success', 'Item Type created successfully.');
}

    public function itemtypeedit($id)
    {
        $itemtypes = ItemType::findOrFail($id);
        return view('inventory.edit_item_type', get_defined_vars());
    }
  public function itemtypeupdate(Request $request, $id)
{
    // Validate incoming request
    $request->validate([
        'type_title' => [
            'required',
            'string',
            'max:255',
        ],
    ]);

    try {
        // Find the item type by ID
        $itemtypes = ItemType::findOrFail($id);

        // Update the item type
        $itemtypes->type_title = $request->input('type_title');
        $itemtypes->save();
    } catch (\Exception $e) {
        dd($e->getMessage()); // Dump the error message and stop execution
    }

    // Redirect with success message
    return redirect()->route('inventory.itemtype.list')->with('success', 'Item Type updated successfully');
}


    public function itemtypedestroy($id)
    {
        $itemtypes = ItemType::findOrFail($id);
        $itemtypes->delete();

        return redirect()->route('inventory.itemtype.list')->with('success', 'Item Type deleted successfully');
    }
}
