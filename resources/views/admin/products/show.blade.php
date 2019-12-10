@extends('layouts/admin')

@section('title')
    {{ $product[0]->title }} | IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Product</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/products">Dashboard</a></li>
            <li><a href="/admin/products">All products</a></li>
            <li><span>{{ $product[0]->title }}</span></li>
        </ul>
    </div>
@endsection


@section('content')
<div id="products-show-page" class="row">
    <div class="col-md-9 mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">

                        <div class="col-md-12">
                        <img style="width: 100%;" src="{{  $product[0]->img_url }}" alt="" class="show-products-img">
                        </div>
  
                        <div class="col-md-12">
                            <h2 class="mb-3">{{  $product[0]->title }}</h2>
                         <p class="mb-3"><span>Description:</span> 
                            {{  $product[0]->description }}
                        </p>
                         <div class="details row">
                             <div class="col-md-6">
                                 <h4>SKU</h4>
                                 <span>{{ $product[0]->sku }}</span>
                             </div>
                             <div class="col-md-6">
                                 <h4>Material</h4>
                                 <span>{{  $product[0]->material }}</span>
                             </div>
                             <div class="col-md-6 mb-3">
                                 <h4>Brand</h4>
                                 <span>{{  $product[0]->brand }}</span>
                             </div>
                             <div class="col-md-6 mb-3">
                                 <h4>Created By</h4>
                                 <span>{{ $product[0]->user }}</span>
                             </div>
                             <div class="col-md-6">
                                <h4>Price:</h4>
                                <h3>$ {{  $product[0]->price }}</h3>
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
                <a href="/admin/products/{{$id}}/edit" type="button" class="btn btn-block btn-primary btn-lg mb-3">
                            Edit 
                            <i class="ti-pencil-alt"></i>
                        </a>
                        <a href="/admin/products/{{$id}}/delete" type="button" class="btn btn-block btn-danger btn-lg mb-3" onclick="return confirm('are you sure?')">
                            Delete 
                                <i class="ti-trash"></i>
                        </a>
                </div>
            </div>
        </div>
</div>
@endsection