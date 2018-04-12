@extends('layouts.app')
{{--insertTime--}}
@section('content')

    <h2>Work has started at - {{$new_time_track->start_time}}</h2>

    <div>

        <hr/>
        <dl class="dl-horizontal">
            <dt>
                Name
            </dt>
            <dd>
                {{$new_time_track->employee->first_name}}
                {{$new_time_track->employee->last_name }}
                <hr/>
            </dd>
            <dt>
                Working on
            </dt>
            <dd>
                {{$new_time_track->job_process->title}}
                <hr/>
            </dd>
            <dt>
                Materials
            </dt>
            <dd>
                @foreach($new_time_track->materials as $m)
                    Material: {{$m->title}} Qty: {{$m->pivot->quantity}}<br>
                @endforeach
                <hr/>
            </dd>

        </dl>
    </div>
    <p>
        <a href="{{route('employees.index')}}">Back to List</a>
    </p>
@endsection