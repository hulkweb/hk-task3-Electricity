@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Month</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills as $i => $item)
                                    <tr>
                                        <td>
                                            {{ $i + 1 }}
                                        </td>
                                        <td>
                                            {{ $item->user->name }}
                                        </td>
                                        <td>
                                            {{ $item->amount }}
                                        </td>
                                        <td>
                                            {{ $item->month }}
                                        </td>
                                        <td>
                                           <a href="/bill/delete/{{ $item->id }}" class="btn btn-sm btn-danger">Delete</a> 
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
                       
                       
                    </div>
                    <div class="text-center my-4">
                      {{ $bills->links() }}
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
