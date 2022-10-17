<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::all();
        $data = ['customers' => $customers];
        return view('customers.index', $data);
    }


    

    public function edit($id)
    {
        $user = User::find($id);
        $data = ['user' => $user];
        return view('customers.edit', $data);
    }



    public function create()
    {
        $customer = [];
        $data = [];
        return view('customers.create', $data);
    }



    public function store()
    {
       
        $insert = User::create(request()->all());
        $msg = "User Created SuccessFully";
        return redirect()->back()->with('success', $msg);
    }


    public function update()
    {
        $requests = request()->all();
        unset($requests["_token"]);
        User::whereId(request()->id)->update($requests);

        $msg = "User Updated SuccessFully";
        return redirect()->back()->with('success', $msg);
    }


    public function delete($id)
    {

        $customer = User::find($id);
        $customer->delete();
        $msg = "User Deleted SuccessFully";
        return redirect()->back()->with('success', $msg);
    }


    
}
