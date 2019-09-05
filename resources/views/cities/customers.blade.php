@extends('layouts.app')
@section('list','danh sach cac khach hang')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách khách hàng</h1>
            </div>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                @if(count($customers)==0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->dob}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}">Sửa</a>
                                <a href="{{route('customers.show',$customer->id)}}">Xem</a>
                                <a href="{{route('customers.destroy', $customer->id)}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                @endif
            </table>
            <a class="btn btn-primary" href="{{route('customers.create')}}" class>Creat</a>
        </div>
    </div>
@endsection

