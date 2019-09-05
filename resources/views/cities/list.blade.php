@extends('layouts.app')
@section('list','danh sach cac Thanh Pho')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name City</th>
            <th scope="col">Customers Number</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @if(count($cities)==0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($cities as $key => $city)
                <tbody>
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td><a href="{{route('cities.customer',$city->id)}}">{{$city->name}}</a></td>
                    <td>{{ count($city->customers)}}</td>
                    <td>
                        <a href="{{route('cities.edit',$city->id)}}">Edit</a>
                        <a href="{{route('cities.show', $city->id)}}">Show</a>
                        <a href="{{route('cities.delete', $city->id)}}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>

                    </td>
                </tr>
                </tbody>
            @endforeach
        @endif
    </table>
    <a class="btn btn-primary" href="{{route('cities.create')}}">Creat</a>
@endsection
