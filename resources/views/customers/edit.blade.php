@extends('layouts.app')
@section('tile', 'form chinh sua thong tin khach hang')
@section('content')
    <form action="{{route('customers.update',$customer->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputNameCustomer1">Name customer</label>
            <input type="text" class="form-control" value="{{$customer->name}}" name="name" id="exampleInputPassword1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputDobCustomer1">Dob</label>
            <input type="text" class="form-control" value="{{$customer->dob}}" name="dob" id="exampleInputPassword1" placeholder="dob">
        </div>
        <div class="form-group">
            <label for="exampleInputNameCity1">Email </label>
            <input type="text" class="form-control" value="{{$customer->email}}" name="email" id="exampleInputPassword1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputNameCity1">City</label>
            <select class="form-control"  name="city_id">
                @foreach($cities as $city)
                    <option
                        @if($customer->city_id == $city->id)
                        {{"selected"}}
                        @endif
                        value="{{$city->id}}" >{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
@endsection
