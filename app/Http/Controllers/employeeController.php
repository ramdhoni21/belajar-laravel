<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class employeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        return view('crud-eloquent.employee.index', compact('employees'));
    }

    public function create()
    {
        return view('crud-eloquent.employee.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:6',
            'alamat' => 'required'
        ]);

        Employee::create($request->all());

        return redirect('/employee')->with('success','Data Pegawai baru berhasil ditambahkan.');;
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('crud-eloquent.employee.edit', compact('employee'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:6',
            'alamat' => 'required'
        ]);

        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect('/employee')->with('success','Data Pegawai berhasil disimpan.');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->back()->with('success','Data Pegawai berhasil dihapus.');
    }
}
