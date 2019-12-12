@extends('layouts/admin');

@section('title')
   {{ $brand[0]->title }}  - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Brands</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/brands">Dashboard</a></li>
            <li><a href="/admin/brands">All Brands</a></li>
            <li><span>{{ $brand[0]->title }}</span></li>
        </ul>
    </div>
@endsection

@section('content')
<div id="brands-show-page" class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">

                        <div class="col-md-4">
                                <img style="width: 100%;" src="{{ $brand[0]->img_url }}" alt="" class="show-products-img">
                        </div>
  
                        <div class="col-md-8">
                            <h2>{{ $brand[0]->title }}</h2>
                         <p><span>Description: <br></span> 
                            {{ $brand[0]->description }}
                        </p>
                         <div class="details row">
                          
                             <div class="col-md-12 mt-3">
                                 <h4>Registered By</h4>
                                 <span>{{ $brand[0]->user }}</span>
                             </div>
                         </div>
                        </div>
                </div>
              
             
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                        <a href="{{route('brand.edit', ['id' => $id])}}" type="button" class="btn btn-block btn-primary btn-lg mb-3">
                            Edit 
                            <i class="ti-pencil-alt"></i>
                        </a>
                        <a href="{{route('brand.delete', ['id' => $id])}}" type="button" class="btn btn-block btn-danger btn-lg mb-3" onclick="return confirm('are you sure?')">
                            Delete 
                                <i class="ti-trash"></i>
                        </a>
                </div>
            </div>
        </div>
</div>
@endsection