<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:50",
            "email" => "required|max:50",
            "address" => "nullable|max:100"
        ]);
        // eloquent process 
        Company::create($request->all());
        // eloquent process 
        // Company::create($request->post());


        // alternative way 
        // $companyData = $request->only(['name', 'email', 'address']);
        // Company::updateOrCreate(
        //     ['email' => $companyData['email']],
        //     $companyData
        // );

        // alternative way 
        // $company = new Company();
        // $company->fill($request->all());
        // $company->save();

        // alternative way 
        // $company = new Company();
        // $company->name = $request->name;
        // $company->email = $request->email;
        // $company->address = $request->address;
        // $company->save();

        // alternative way 
        // $company = new Company();
        // $company->name = $request->input('name');
        // $company->email = $request->input('email');
        // $company->address = $request->input('address');
        // $company->save();

        // query builder 
        // DB::table('companies')->insert([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'address' => $request->input('address'),
        // ]);

        // alternative way 
        // $companyData = $request->only(["name", "email", "address"]);
        // DB::table('companies')->insert($companyData);
        return redirect()->route('companies.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'address' => 'nullable|max:100',
        ]);

        $company->fill($request->post())->save();

        // alternative 
        // Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company has been deleted Successfully');
    }
}
