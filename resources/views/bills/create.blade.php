@extends('layout')
@section('content')
    <div class="row">

        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 class="font-weight-bolder">Register</h4>
                    <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('bill.store') }}">@csrf
                        
                        <div class="form-group mb-3">
                            <label class="">Customer</label>
                            <br>
                            <select name="customer_id" id="" class="form-control">
                               @foreach ($customers as $item)
                               <option value="{{$item->id}}">{{$item->name}}</option>
                               @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group form-group-outline mb-3">
                            <label class="form-label">Units</label>
                            <input type="number" name="units"  class="form-control">
                        </div>
                        <div class="form-group form-group-outline mb-3">
                            <label class="form-label">Month</label>
                            <select name="month" id="" class="form-control">
                               @for ($i = 1; $i < 13; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                   
                               @endfor
                               
                                 
                             </select>
                        </div>
                        

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                Create Bill</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
