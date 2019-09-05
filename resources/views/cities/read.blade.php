@extends('layouts.app')
@section('title', 'hien thi thong tin thanh pho')
@section('content')
    <div>
        <h1>Thông tin thành phố</h1>
        <table class="table table-black">
            <tr>
                <th>Name city:  {{$city->name}}</th>
            </tr>
            <tr>
                <td>Create Time:    {{$city->created_at}}</td>
            </tr>
            <tr>
                <td>Update Time:    {{$city->updated_at}}</td>
            </tr>
        </table>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Return</button>
    </div>

@endsection
