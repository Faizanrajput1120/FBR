<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller
{
    // ... previous methods: index, create, store, destroy ...

    // Show all companies
    public function index()
    {
        if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Show form to create company
    public function create()
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return view('companies.create');
    }

    // Store new company
    public function store(Request $request)
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Company::create([
            'cname' => $request->name,
        ]);

        return redirect()->route('premiertax.companies.index')->with('success', 'Company created successfully.');
    }

    // Delete company
    public function destroy($id)
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('premiertax.companies.index')->with('success', 'Company deleted successfully.');
    }
    // Show form to edit a company
    public function edit($id)
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    // Update company in database
    public function update(Request $request, $id)
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $company = Company::findOrFail($id);
        $company->update([
            'cname' => $request->name,
        ]);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }
}
