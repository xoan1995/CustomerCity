@extends('layouts.app')
@section('title', 'hiển thị thông tin khách  hàng')
@section('content')
    <div>
        <h1>Thông tin khách hàng</h1>
        <table class="table table-black">
            <tr>
                <th>Name customer:  {{$customer->name}}</th>
            </tr>
            <tr>
                <td>Create Time:    {{$customer->created_at}}</td>
            </tr>
            <tr>
                <td>Update Time:    {{$customer->updated_at}}</td>
            </tr>
        </table>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Return</button>
    </div>

@endsection
