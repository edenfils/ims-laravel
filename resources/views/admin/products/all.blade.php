@extends('layout/admin')

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
                                    <h4 class="header-title">Progress Table</h4>
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
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>09 / 07 / 2018</td>
                                                        <td>
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="status-p bg-primary">pending</span></td>
                                                        <td>
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                            </ul>
                                                        </td>
                                                        <td scope="row">1</td>
                                                        <td scope="row">1</td>
                                                        <td scope="row">1</td>
                                                        <td scope="row">1</td>
                                                    </tr>
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

