@extends('layouts/admin')


@section('title')
    All products - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Products</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/products">Home</a></li>
            <li><span>All products</span></li>
        </ul>
    </div>
@endsection

@section('content')
    <!-- sales report area start -->
                <div class="sales-report-area mb-5">
                    <div class="row">
                       <!-- Progress Table start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Products Table</h4>
                                    <div class="single-table">
                                        <div class="table-responsive">
                                            <table class="table table-hover progress-table text-center">
                                                <thead class="text-uppercase">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">SKU</th>
                                                        <th scope="col">Material</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Size</th>
                                                        <th scope="col">Brand</th>
                                                        <th scope="col">Created By</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Options</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($products as $product)
                                                    <tr>
                                                    <td scope="row">{{ $product->id }}</td>
                                                            <td>{{ $product->title }}</td>
                                                            <td>{{ $product->sku }}</td>
                                                            <td>
                                                                {{ $product->material }}
                                                            </td>
                                                            <td>{{ $product->qty }}</td>
                                                            <td>
                                                                {{ $product->size }}
                                                            </td>
                                                            <td>{{ $product->brand_id }}</td>
                                                            <td>{{ $product->user_id }}</td>
                                                            <td>Approved</td>
                                                            <td>Edit/delete</td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Progress Table end -->
                    </div>
                </div>
                <!-- sales report area end -->
@endsection

