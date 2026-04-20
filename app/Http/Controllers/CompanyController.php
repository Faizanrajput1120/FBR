<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $Companys = Company::paginate(10);
        return view('Company.index', compact('Companys'));
    }
    //

    public function create(){
        return view('Company.create');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'required|string|max:255',
        ]);

        Company::create($data);

        return redirect()->back()->with('success', 'Company created successfully.');
    }

    public function edit($id){
        $company = Company::findOrFail($id);
        return view('Company.edit', compact('company'));
    }

    public function update($id){
        $data = request()->validate([
            'name' => 'required|string|max:255',
        ]);

        $company = Company::findOrFail($id);
        $company->update($data);

        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

}
