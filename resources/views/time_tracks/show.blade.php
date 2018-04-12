@extends('layouts.app')

@section('content')
    <h2>Work has end at - {{$endEmployee->end_time}}</h2>

    <div>

        <hr/>
        <dl class="dl-horizontal">
            <dt>
                Name
            </dt>
            <dd>
                {{$endEmployee->employee->first_name}}
                {{$endEmployee->employee->last_name }}
                <hr/>
            </dd>
            <dt>
                Job Finished
            </dt>
            <dd>
                {{$endEmployee->job_process->title}}
                <hr/>
            </dd>

        </dl>
    </div>
    <p>
        <a href="{{route('employees.index')}}">Back to List</a>
    </p>

@endsection;