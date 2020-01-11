@extends('layouts/admin')


@section('title')
    All Orders - IMS Laravel
@endsection

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Orders</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href={{ url('/admin')}}>Dashboard</a></li>
            <li><span>All Orders</span></li>
        </ul>
    </div>
@endsection


@section('content')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title">Orders Table</h4>
            <div class="single-table">
              <div class="table-responsive">
                <table class="table table-hover progress-table text-center">
                  <thead class="text-uppercase">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Total Items</th>
                      <th scope="col">Total Price</th>
                      <th scope="col">Location</th>
                      <th scope="col">Payment Type</th>
                      <th scope="col">Added By</th>
                      <th scope="col">Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $orders as  $order)
                        <tr>
                        <td scope="row"><a href="{{ route('order.show', ['id' => $order->id] )}}">{{$order->id}}</a></td>
                            <td>{{$order->customer}}</td>
                                <td>{{$order->total_items}}</td>
                            <td>{{$order->total_price}}</td>
                                <td>{{$order->location}}</td>
                                <td>{{$order->payment_type}}</td>
                                <td>{{$order->created_by}}</td>
                                <td>
                                <ul class="d-flex justify-content-center">
                                    <li class="mr-3">
                                    <a href="{{ route('order.edit', ['id' => $order->id] )}}" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    </li>
                                    <li>
                                    <a href="{{ route('order.delete', ['id' => $order->id] )}}" class="text-danger" onclick="return confirm('are you sure?')"><i class="ti-trash"></i></a>
                                    </li>
                                </ul>
                                </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection