<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::paginate(10);
        $data = ['bills' => $bills];
        return view('bills.index', $data);
    }




    public function edit($id)
    {
        $customer = Bill::find($id);
        $data = ['customer' => $customer];
        return view('bills.edit', $data);
    }



    public function create()
    {
        $customers = User::all();
        $data = ['customers' => $customers];
        return view('bills.create', $data);
    }



    public function store()
    {
        $amount = 0;
        $units = request("units");
        $month = request("month");
        $customer_id = request("customer_id");
        switch (intval(intval($units) / 50)) {
            case 0:
                $amount = $units * 5;
                break;
            case 1:
                $amount = 50 * 5 + ($units - 50) * 8;
                break;

            case 2:
                $amount = (50 * 5) + (50 * 8) + (($units - 100) * 12);
                break;

            case 3:
                $amount = 50 * 5 + 50 * 8 + ($units - 100) * 12;
                break;

            case 4:
                $amount = 50 * 5 + 50 * 8 + ($units - 100) * 12;
                break;

            case 5:
                $amount = 50 * 5 + 50 * 8 + ($units - 100) * 12;
                break;

            default:
                $amount = 50 * 5 + 50 * 8 + 150 * 12 + ($units - 250) * 15;
               

        }
        $insert = Bill::create([
            'user_id' => request("customer_id"),
            'units' => request("units"),
            'month' => request("month"),
            'amount' => $amount,

        ]);
        $msg = "Bill Created SuccessFully " . (intval($units) / 50);
        return redirect()->back()->with('success', $msg);
    }


    public function update()
    {
        $requests = request()->all();
        unset($requests["_token"]);
        Bill::whereId(request()->id)->update($requests);

        $msg = "Bill Updated SuccessFully";
        return redirect()->back()->with('success', $msg);
    }


    public function delete($id)
    {

        $customer = Bill::find($id);
        $customer->delete();
        $msg = "Bill Deleted SuccessFully";
        return redirect()->back()->with('success', $msg);
    }
}
