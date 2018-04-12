@extends('layouts.app')

@section('content')
    <time-tracks id="app"></time-tracks>


   {{-- <form method="POST" class="form-horizontal" action="/time_tracks">
        <meta name="csrf-token" content=" {{csrf_token() }} ">
        {!! csrf_field() !!}



        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="material_type">Start or End</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="start_or_end" id="start_or_end1" value="1" checked>
                <label for="start_or_end1" class="col-form-label ">Start Working</label>
            </div>
            <div class="form-check form-check-inline offset-sm-1">
                <input class="form-check-input" type="radio" name="start_or_end" id="start_or_end2" value="2">
                <label for="start_or_end1" class="col-form-label">End the Work</label>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group">
                <label class="control-label" for="barcode">Input Barcode</label>
                <div class="">
                    <input type="text" name="barcode" class="form-control" id="jq_barcode"
                           aria-describedby="inputSuccess3Status">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="control-label" for="job_process_title">Select Job Process</label>
                <div class="">
                    <select name="job_process_title" id="jq_job_process_title" class="form-control">
                        <option value="">Choose a job process</option>
                        @foreach($job_process as $j)
                            <option value="{{$j->id}}">{{$j->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row" id="jq_add_table">

        </div>


        <div class="row" id="jq_end_working_materials" style="display:none">
            <div class="">
                <a href="" role="button" id="jq_search_button" class="btn btn-default active">Search</a>
            </div>
        </div>
        <div class="row" id="jq_working_on_materials">
            <div class="">
                <div class="">
                    <a href="" role="button"
                       class="btn btn-default btn-lg active">Choose materials you are working on</a>
                </div>
            </div>
        </div>

        <hr>

        <div id="jq_start_working_process">
            <div class="form-group">
                <div class="row">
                    <label class="control-label" for="material_type">Select Material Type</label>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="new_or_existing" id="new_or_existing1" value="1" checked>
                            New
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="new_or_existing" id="new_or_existing2" value="2">
                            Existing
                        </label>
                    </div>
                </div>
            </div>

            <div class="row" id="jq_new_table">
                <div class="form-group">
                    <label class="control-label" for="jq_select_material">Select Material</label>
                    <div class="">
                        <select class="form-control" name="material[]" id="jq_select_material">
                            <option value="">Choose a material</option>
                            @foreach($material as $m)
                                <option value="{{$m->id}}">{{$m->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="">
                        <div class="form-group">
                            <label class="control-label" for="material_qty0">Qty</label>
                            <div class="">
                                <input type="number" name="quantity[]" class="form-control" id="jq_select_qty"
                                       aria-describedby="qty">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class=""><a href="" role="button" id="jq_add_button" class="btn btn-default">Add</a>
                    </div>
                </div>

                <div id="jq_add_material">

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg active">Enter</button>
                </div>
            </div>
        </div>


    </form>--}}
@endsection
