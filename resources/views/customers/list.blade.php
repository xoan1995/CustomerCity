@extends('layouts.app')
@section('list','danh sach cac khach hang')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách khách hàng</h1>
            </div>
            <div class="col-6">

                <form method="get" class="naval-form naval-left" action="{{route('customers.search')}}">

                    @csrf

                    <div class="row">

                        <div class="col-8">

                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Search" name="keyword">

                            </div>

                        </div>

                        <div class="col-4">

                            <button type="submit" class="btn btn-default">Tìm kiếm</button>

                        </div>

                    </div>

                </form>

            </div>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Dob</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                </tr>
                </thead>
                @if(count($customers)==0)
                    <tr>
                        <td colspan="4">No data</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tbody>
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->dob}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->city->name}}</td>
                            <td></td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}">Edit</a>
                                <a href="{{route('customers.show',$customer->id)}}">Show</a>
                                <a href="{{route('customers.destroy', $customer->id)}}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                @endif
            </table>
            {{$customers->links()}}
        </div>
        <a class="btn btn-primary" href="{{route('customers.create')}}">Creat</a>
        <a href="{{route('homeIndex')}}" class="btn btn-primary" style=" background-color: white;
  color: black;
  border: 2px solid #4CAF50;">Back</a>

    </div>
@endsection

