@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card"  style="background-color: #f2f4f5">
                <div class = "card-header bg-light">
                    <div class ="container-fluid col-12">
                        <div class="row">
                            <div class="col text-center p-4">
                                <h1 class="text-dark fw-bold">GIC Shopping</h1>
                            </div>
                            <hr/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <div class="row" >

                            <div class="col-8">
                                <div class="row">
                                @foreach ($items as $item)
                                    <div class="col-md-6 col-sm-10 mb-4 d-flex justify-content-center">
                                        <div class="card text-center"  style="width:600px">
                                            <img class="card-img-top img-fluid  p-3" src="{{ asset('/storage/gallery/' . $item->image) }}" alt="{{ $item->name }} Image"  style="width: 400px; height: 300px;"/>
                                            <div class="card-body">
                                                <h4 class="card-text">{{ $item->name }}</h4><hr/>
                                                <div class="row p-2">
                                                    <div class="col-md-6"><p class="card-text">Price : {{ $item->price }}</p></div>
                                                    <div class="col-md-6 d-flex justify-content-end">
                                                    <a href="" class="btn btn-outline-primary">
                                                        <i class="fas fa-cart-shopping"></i>
                                                    </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            
                            {{-- <div class="col-lg-4 col-sm-10 mb-4 d-flex justify-content-center">
                              <div class="card text-center"  style="width:600px">
                                    <img class="card-img-top img-fluid  p-3" src="{{ asset('/storage/gallery/' . $item->image) }}" alt="Card image"/>
                                    <div class="card-body">
                                        <h4 class="card-text">Item 2 </h4><hr/>
                                        <div class="row p-2">
                                            <div class="col-md-6"><p class="card-text">Price : 10000 MMK</p></div>
                                            <div class="col-md-6 d-flex justify-content-end">
                                            <a href="" class="btn btn-outline-primary">
                                                <i class="fas fa-cart-shopping"></i>
                                            </a>
                                            </div>
                                        </div>
                                      </div>
                                </div>         
                            </div> --}}
                            
                            <div class="col-lg-4 col-sm-10 mb-4 d-flex justify-content-center">
                              <div class="card text-center"  style="width:600px">
                                <div class="card-body">
                                    <h4>GIC shopping</h4>
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <th>{{ $item->name }}</th>
                                                <th> {{ $item->price }}</th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td>
                                                <td>Total</td>
                                                <td>30000</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
