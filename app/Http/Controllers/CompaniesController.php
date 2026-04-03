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
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    // Show form to create company
    public function create()
    {
        return view('companies.create');
    }

    // Store new company
    public function store(Request $request)
    {
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
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('premiertax.companies.index')->with('success', 'Company deleted successfully.');
    }
    // Show form to edit a company
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    // Update company in database
    public function update(Request $request, $id)
    {
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
