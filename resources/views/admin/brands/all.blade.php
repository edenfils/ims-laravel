@extends('layouts/admin');

@section('title')
    All Brands - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Brands</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/brands">Home</a></li>
            <li><span>All Abrands</span></li>
        </ul>
    </div>
@endsection


@section('content')
<div class="row">
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
                        <th scope="col">Company</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <th scope="row">2</th>
                      <td>
                        <a href="/admin/brands/2">
                          <img src="https://cdn.imgbin.com/9/2/7/imgbin-adidas-logo-adidas-adidas-logo-9G45F5g1MtbZKnnLP8bfnDy3J.jpg" style="width:100%; max-width: 150px;" alt="">
                        </a>
                      </td>
    
                      <td>Eden Fils</td>
                      <td>
                        <ul class="d-flex justify-content-center">
                          <li class="mr-3">
                            <a href="/admin/brands/2/edit" class="text-secondary"><i class="fa fa-edit"></i></a>
                          </li>
                          <li>
                            <a href="/admin/brands/2/delete" class="text-danger" onclick="return confirm('are you sure?')"><i class="ti-trash"></i></a>
                          </li>
                        </ul>
                      </td>
                    </tr>
    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection