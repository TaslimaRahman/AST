<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Time_track;
use App\Job_process;
use App\Material;
use App\User;
use Carbon\Carbon;

class Time_tracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setTimezone() {
        $current = Carbon::now('America/Toronto');
        return $current;
    }

    public function index()
    {
        $time = Time_track::with(['job_process','employee', 'materials'])->get();
        return response()->json($time);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //only for end!!!
        if($request->start_or_end === "2") {

            $current = $this->setTimezone();
            $employee = Employee::where('identification', $request->barcode)->first();
            $job_process = Job_process::where('id', $request->job_process_title)->first();

            $data = Time_track::where('employee_id', $employee->id)
                ->where('job_process_id', $job_process->id)
                ->where('end_time', NULL)->first();
            $data->update(['end_time'=> $current]);

            $data_id = $data->id;

            return redirect()->route('time_tracks.show', compact('data_id'));
        }
        //define variables for multiple ids of material

        //find data from each employee, job_process, and material table based on data from view
        $employee_id = Employee::where('identification', $request->barcode)->first()->id;
        $job_process_id = Job_process::where('id', $request->job_process_title)->first()->id;
        $current = $this->setTimezone();

        $material= $request->material;
        $quantity = $request->quantity;

        $time_track = new Time_track();
        $time_track->job_process_id = $job_process_id;
        $time_track->employee_id = $employee_id;
        $time_track->start_time = $current;
        $time_track->save();

        $new_time_track = Time_track::findOrFail($time_track->id);
        for($i=0; $i<count($material); $i++) {
            $new_time = Time_track::findOrFail($new_time_track->id);
            $new_time->materials()->attach($material[$i],['quantity'=>$quantity[$i], 'material_status'=>'0']);
        }

        return view('time_tracks.store', compact('new_time_track'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $time_detail_with_employee = Time_track::with(['employee' ,'materials','job_process'])->where('employee_id', 1)->get();

        return response()->json($time_detail_with_employee);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajax_call() {
        $material = Material::all();
        $html = array();
        foreach($material as $m) {
            $arr = array($m->id, $m->title); // (id, title)
            array_push($html, $arr); // [(id, title), (id, title)];
        }
        return $html;
    }

    public function call_record_by_ajax(Request $request) {
        $barcode = $request->barcode;
        $job_process_id = $request->job_process_id;

        $data = array();
        //FINDING EMP_ID and TIME_TRACK RECORD
        $e_id = Employee::where('identification', $barcode)->first()->id;
        $time = Time_track::where('employee_id', $e_id)->where('job_process_id', $job_process_id)->first();

        //FETCH DATA FROM TABLES
        $emp = $time->employee->first(['first_name', 'last_name']);
        $jp = $time->job_process->first(['title']);

        $quantity = array();
        foreach($time->materials as $m) {
            array_push($quantity, $m->pivot);

        }

        //MERGE DATA INTO ONE ARRAY
        //array_push($data, $time);
        array_push($data, $emp);
        array_push($data, $jp);
        array_push($data, $time->materials);
        array_push($data, $quantity);
        return $data;
    }
}
