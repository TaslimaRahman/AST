<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Time_track;
use App\Job_process;
use App\Material;
use App\User;
use Illuminate\Http\Response;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        //return  view('employees.index', compact('time'));
        return response()->json($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Employee::create(['identification' => '1234', 'first_name' => 'Charles', 'last_name' => 'Cho', 'street' => '804-100 Parkway forest drive', 'city' => 'Toronto', 'province' => 'ON', 'postal_code' => 'M2Y1M5', 'phone_number' => '647-233-2333', 'email' => 'ccho21@myseneca.ca', 'position' => 'frontend developer']);
        $employee = new Employee(['identification' => '1234',
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'street' => $request->input('street'),
            'city' => $request->input('street'),
            'province' => $request->input('province'),
            'postal_code' => 'M2Y1M5',
            'phone_number' => '647-233-2333',
            'email' => $request->input('email'),
            'position' => 'frontend developer']);

        $employee->save();
        return response()->json($request->input('first_name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $employee_with_working_status = $employee->time_tracks;

        return view('employees.show', compact('employee', 'employee_with_working_status'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

//route:group();