@extends('layout')
@section('content')
    <div class="row">

        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card ">
                <div class="card-header">
                    <h4 class="font-weight-bolder">Register</h4>
                    
                </div>
                <div class="card-body">
                    <form  method="POST" action="{{route("customer.update")}}">
                        @csrf
                        <div class="form-group form-group-outline mb-3">
                            <label class="">Customer Name</label>
                            <input type="text" name="name" class="form-control"  value="{{$user->name}}">
                            <input type="hidden" name="id" value="{{$user->id}}">
                        </div>
                        <div class="form-group form-group-outline mb-3">
                            <label class="">Phone</label>
                            <input type="text" name="mobile"  value="{{$user->mobile}}" class="form-control">
                        </div>

                        <div class="form-group form-group-outline mb-3">
                            <label class="">Email</label>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control">
                        </div>

                        <div class="form-group form-group-outline mb-3">
                            <label class="">City</label>
                            <input type="text" name="city" class="form-control" value="{{$user->city}}">
                        </div>

                        <div class="form-group form-group-outline mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
