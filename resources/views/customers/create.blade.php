@extends('layouts.app')
@section('create','form them thanh pho')
@section('content')
    <form action="{{route('customers.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputNameCity1">Name customer</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="phone" placeholder="Enter phone" required>
        </div>
        <div class="form-group">
            <label>Dob</label>
            <input type="date" class="form-control" name="dob" required>
        </div>
        <div class="form-group">
            <label>City</label>
            <select class="form-control" name="city_id">
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
