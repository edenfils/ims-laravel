@extends('layouts/admin');

@section('title')
   Order Number: {{ $order[0]->id}}  - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Orders</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="/admin/orders">All orders</a></li>
            <li><span>Order Number: {{ $order[0]->id}}</span></li>
        </ul>
    </div>
@endsection

@section('content')
<div id="orders-show-page" class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">

                <div class=" section row">
                    <div class="col-md-12">
                        <h2>Customer</h2>
                    </div>
                    <div class="col-md-6">
                        <label for="">
                            <span fro="">First Name:</span>
                            {{ $order[0]->f_name }}
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="">
                            <span fro="">Last Name:</span>
                            {{ $order[0]->l_name }}
                        </label>

                    </div>
                    <hr>
                </div>


                <div class="section row">
                    <div class="col-md-12">
                            <h2>Shipping</h2>

                    </div>

                    <div class="col-md-6">
                        <label for="">
                            <span fro="">Address:</span>
                            {{ $order[0]->address }}

                        </label>

                    </div>
                    <div class="col-md-6">
                        <label for="">
                            <span fro="">Address #2:</span> {{ $order[0]->address_2 }}
                        </label>

                    </div>


                    <div class="col-md-3">
                        <label for="">
                            <span fro="">City:</span> {{ $order[0]->city }}
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <span fro="">State:</span> {{ $order[0]->state }}
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <span fro="">Zip Code:</span> 
                            {{ $order[0]->zipcode }}
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <span fro="">Country:</span>
                            {{ $order[0]->country }}
                        </label>
                    </div>
                </div>

                <div class=" section row">
                    <div class="col-md-12">
                        <h2>Order Info</h2>

                    </div>

                    <div class="col-md-4">
                        <label for="">
                            <span fro="">Payment Type:</span> {{ $order[0]->payment_type }}
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label for="">
                            <span fro="">Created By:</span> {{ $order[0]->user }}
                        </label>
                    </div>

                    <div class="col-md-4">
                        <label for="">
                            <span fro="">Date:</span> {{ $order[0]->date }}
                        </label>
                    </div>
                </div>
                <div class=" section row">
                    <div class="col-md-12">
                        <h2>Products</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-primary">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Sku</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($items as $item)
                                        
                                    
                                      <tr>
                                          <th scope="row">{{$item->id}}</th>
                                          <td><img src="" width="200px" alt=""></td>
                                          <td>{{$item->title}}</td>
                                          <td>{{$item->sku}}</td>
                                          <td>{{$item->qty}}</td>
                                          <td>{{$item->price}}</td>
                                          <td>
                                              <a href="/admin/products/undefined/edit" type="button" class="btn btn-block btn-primary btn-lg mb-3">
                                                  Edit
                                                  <i class="ti-pencil-alt"></i>
                                              </a>
                                              <a href="/admin/products/undefined/delete" type="button" class="btn btn-block btn-danger btn-lg mb-3" onclick="return confirm('are you sure?')">
                                                  Delete
                                                  <i class="ti-trash"></i>
                                              </a>
                                          </td>
                                      </tr>

                                      @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="section row">
                        <div class="col-md-12" style="text-align: right;">
                                <h2>Total Price:</h2>
                        <h3>${{ $order[0]->total_price}}</h3>
                        </div>
                      
                </div>
            </div>
        </div>
      
    </div>
    <div class="col-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <a href="/admin/orders/24/edit" type="button" class="btn btn-block btn-primary btn-lg mb-3">
                        Edit
                        <i class="ti-pencil-alt"></i>
                    </a>
                    <a href="/admin/orders/24/delete" type="button" class="btn btn-block btn-danger btn-lg mb-3" onclick="return confirm('are you sure?')">
                        Delete
                        <i class="ti-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection