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
                        <th scope="col">Registered By</th>
                        <th scope="col">Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($brands as $brand)
                          
                        <tr>
                        <th>{{$brand->id}}</th>
                        <td>
                          <a href="/admin/brands/2">
                            <img src="{{$brand->img_url}}" style="width:100%; max-width: 150px;" alt="Brand Image">
                          </a>
                        </td>
      
                        <td>{{$brand->user}}</td>
                        <td>
                          <ul class="d-flex justify-content-center">
                            <li class="mr-3">
                              <a href="/admin/brands/2/edit" class="text-success" style="font-size: 22px;"><i class="fa fa-edit"></i></a>
                            </li>
                            <li>
                              <a href="/admin/brands/2/delete" class="text-danger" onclick="return confirm('are you sure?')" style="font-size: 22px;"><i class="ti-trash"></i></a>
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