<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(3);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();

        //quay ve trang danh sach khach hang
        return redirect()->route('customers.index');

    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $cities = City::all();
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();

        Session::flash('success', 'cap nhat khach hang thanh cong');
        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.read', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

//    public function customersCity($id)
//    {
//        $city = City::findOrFail($id);
//        $customers = $city->customers;
//        return view('customers.city', compact('customers'));
//    }

    public function searchCustomerRequest(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customers.index');
        }
        $customers = Customer::Where('NAME', 'LIKE', '%' . $keyword . '%')->simplePaginate(15);
        $city = City::all();
        return view('customers.list', compact('customers', 'city'));
    }

    public function homeIndex()
    {
        return view('welcome');
    }
}
