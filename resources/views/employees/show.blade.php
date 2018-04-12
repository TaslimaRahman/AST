@extends('layouts.app')

@section('content')
  {{--  <h2>Details - {{$employee->first_name}} {{$employee->last_name}}</h2>

    <div>

        <hr/>
        <dl class="dl-horizontal">
            <dt>
                Name
            </dt>
            <dd>
                {{$employee->first_name}} {{$employee->middle_name}}  {{$employee->last_name}}
                <hr/>
            </dd>

            <dt>
                Position
            </dt>
            <dd>
                {{$employee->position}}
                <hr/>
            </dd>
            <dt>
                Working status
            </dt>
            <dd>
                @foreach($employee_with_working_status as $m)
                    Start Time: <b>{{$m->start_time}}</b>
                    End Time: <b>{{$m->end_time}}</b>
                    @if($m->start_time === $m->end_time)
                        Status:
                        <td><i class="fa fa-toggle-off"></i></td>
                    @else
                        status:
                        <td><i class="fa fa-toggle-on"></i></td>
                    @endif
                    <br/>
                @endforeach
                <hr/>
            </dd>


            <dt>
                Email
            </dt>

            <dd>
                {{$employee->email}}
                <hr/>
            </dd>

            <dt>
                Phone Number
            </dt>
            <dd>
                {{$employee->phone_number}}
                <hr/>
            </dd>

            <dt>
                Address
            </dt>

            <dd>
                {{$employee->street}} <br/>
                {{$employee->city}} <br/>
                {{$employee->province}} <br/>
                {{$employee->postal_code}} <br/>
                <hr/>
            </dd>
        </dl>
    </div>
    <p>
        --}}{{--    <a href="/artists/5/addalbum">Add album for this artist</a> <span> | </span>
            <a href="/artists/5/AddMediaItem">Add media item for this artist</a> <span> | </span>--}}{{--
        <a href="{{route('employees.index')}}">Back to List</a>
    </p>--}}
@endsection