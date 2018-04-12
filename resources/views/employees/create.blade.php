@extends('layouts.app')

@section('content')

    <div class="container">
        <app id="app"></app>

        <h2>Resgistering Employees</h2>
        {!! csrf_field() !!}
        <form class="form-horizontal" method="POST" action="/employees">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Middle Name</label>
                <div class="col-sm-10">
                    <input type="text" name="middle_name" class="form-control" id="middle_name" placeholder="Middle Name(Optional)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name"  class="form-control" id="last_name" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Position</label>
                <div class="col-sm-10">
                    <input type="text"  name="position" class="form-control" id="position" placeholder="Position">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Street</label>
                <div class="col-sm-10">
                    <input type="text" name="street" class="form-control" id="street" placeholder="Street">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                    <input type="text"name="city"  class="form-control" id="city" placeholder="City">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Province</label>
                <div class="col-sm-10">
                    <input type="text" name="province" class="form-control" id="province" placeholder="Province">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Postal_code</label>
                <div class="col-sm-10">
                    <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="Postal Code">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>

        </form>

    </div>
@endsection
