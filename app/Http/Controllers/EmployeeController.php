<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'cin' => 'required|unique:employees',
            'employee_type' => 'required',
            'hire_date' => 'required',
            'salaire' => 'required|numeric',
        ]);
        $employee = new Employee();
        $employee->nom = $request->input('nom');
        $employee->prenom = $request->input('prenom');
        $employee->email = $request->input('email');
        $employee->service = $request->input('service');
        $employee->cin = $request->input('cin');
        $employee->employee_type = $request->input('employee_type');
        $employee->hire_date = $request->input('hire_date');
        $employee->salaire = $request->input('salaire');
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'employee_type' => 'required',
            'hire_date' => 'required',
            'cin' => 'required|unique:employees,cin,' . $id,
            'salaire' => 'required|numeric',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->nom = $request->input('nom');
        $employee->prenom = $request->input('prenom');
        $employee->email = $request->input('email');
        $employee->service = $request->input('service');
        $employee->cin = $request->input('cin');
        $employee->employee_type = $request->input('employee_type');
        $employee->hire_date = $request->input('hire_date');
        $employee->salaire = $request->input('salaire');
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
