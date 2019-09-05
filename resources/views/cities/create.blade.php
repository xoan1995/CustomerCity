@extends('layouts.app')
@section('create','form them thanh pho')
@section('content')
    <form action="{{route('cities.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputNameCity1">Name city</label>
            <input type="text" class="form-control" name="inputName" id="exampleInputPassword1" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
@endsection
