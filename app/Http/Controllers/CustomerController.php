<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return $customer;
    }
    public function  show()
    {
        $customer = Customer::find($id);
        return $customer;
    }
    public function store($cc, $nama, $email, $city, $country, $address, $contact){
        $customer =  Customer::find($id);
        $customer->code_customer = $cc;
        $customer->nama = $nama;
        $customer->email = $email;
        $customer->city = $city;
        $customer->country = $country;
        $customer->address = $address;
        $customer->contact = $contact;
        $customer->save();
        return $customer;
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return $customer;
    }
}
