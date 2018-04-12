@extends('layouts.app')
@section('content')
    {{--<h1>Employees</h1>

    <h3>Today's date</h3>

    <table class="table table-striped">
        <caption>All Employees display</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Title</th>
            <th>Current Job</th>
            <th>Materials</th>
            <th>Quantity</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($time as $t)
            <tr>
                <th scope="row">{{$t->id}}</th>
                <td>{{$t->employee->first_name}} {{$t->employee->last_name}}</td>
                <td>{{$t->employee->position}}</td>
                <td>{{$t->job_process->title}}</td>

                Loop for displaying Materials
                <td>
                    @foreach($t->materials as $m)
                        {{$m->title}}<br/>
                    @endforeach
                </td>
                <td>
                    @foreach($t->materials as $m)
                        {{$m->pivot->quantity}} <br/>
                    @endforeach
                </td>
                End Loop for displaying materials

                <td>{{$t->start_time}}</td>
                <td>{{$t->end_time}}</td>
                @if(is_null($t->end_time))
                    <td> <i class="fa fa-toggle-on"></i></td>
                @else
                    <td> <i class="fa fa-toggle-off"></i>  </td>
                @endif
                <td><a href="{{route('employees.show', $t->employee_id)}}">Detail</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>--}}
@endsection

