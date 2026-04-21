<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagement extends Controller
{
    //
    public function index(Request $request)
{
     if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
    $query = User::query();

    // Filter by company
    if ($request->filled('company_id')) {
        $query->where('c_id', $request->company_id);
    }

    // Filter by user (name or email)
    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('email', 'like', '%' . $request->search . '%');
        });
    }

    $users = $query->latest()->paginate(10);

    // Companies for dropdown
    $company = Company::all();

    return view('User.index', compact('users', 'company'));
}

    public function create()
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $company=Company::all();
        return view('User.create', compact('company'));
    }
     public function store(Request $request)
    {
         if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'is_admin' => $request->is_admin ?? 0,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fbr_access_token' => $request->fbr_access_token,
            'use_sandbox' => $request->use_sandbox ?? 1,
            'cinc_ntn' => $request->cinc_ntn,
            'address' => $request->address,
            'business_name' => $request->business_name,
            'province' => $request->province,
            'c_id' => $request->c_id,
        ]);

        return redirect()->back()->with('success', 'User created successfully!');
    }
    public function update(Request $request, $id)
{
     if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
    $user = User::findOrFail($id);

    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    if ($request->filled('password')) {
        $data['password'] = bcrypt($request->password);
    }

    $data['is_admin'] = $request->has('is_admin');
    $data['use_sandbox'] = $request->has('use_sandbox');

    $data['business_name'] = $request->business_name;
    $data['province'] = $request->province;
    $data['address'] = $request->address;
    $data['cinc_ntn'] = $request->cinc_ntn;
    $data['fbr_access_token'] = $request->fbr_access_token;
    $data['c_id'] = $request->company_id;

    $user->update($data);

    return back()->with('success', 'User updated successfully');
}
public function edit($id)
{
     if(auth()->user()->is_admin == 1){
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
    $company = Company::findOrFail($id);

    return view('companies.edit', compact('company'));
}
public function show(){

}
}
