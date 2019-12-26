@extends('layouts/admin')


@section('title')
    Add New Order - IMS Laravel
@endsection

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Orders</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href={{ url('/admin')}}>Home</a></li>
            <li><a href={{ url('/admin/orders')}}>All Orders</a></li>
            <li><span>Add New Order</span></li>
        </ul>
    </div>
@endsection

@section('javascripts')
    <script src="/js/components/OrdersForm.js"></script>
@endsection


@section('content')

<div id="orders-create-page" class="row">
    <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    @csrf
                    <div id="ordersForm"></div>
                </div>
            </div>
    </div>
</div>
    
@endsection











