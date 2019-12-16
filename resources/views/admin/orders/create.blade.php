@extends('layouts/admin')


@section('title')
    Add New Product - IMS Laravel
@endsection

@section('breadcrumbs')
<div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Products</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href={{ url('/admin')}}>Home</a></li>
            <li><a href={{ url('/admin/products')}}>All Products</a></li>
            <li><span>Add New Product</span></li>
        </ul>
    </div>
@endsection

@section('javascripts')
    <script src="/js/components/OrdersForm.js"></script>
@endsection


@section('content')

<div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                    
                    <form action="{{route('product.store')}}" method="POST">
                            @csrf
                        <div id="ordersForm"></div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Title</label>
                            
                        <input 
                            class="form-control @error('title') is-invalid @enderror" 
                            type="text" 
                            value="{{old('title')}}" 
                            id="example-text-input" 
                            name="title" 
                        >
                            
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
  
                        <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Image URL</label>
                                <input  
                                    class="form-control @error('img_url') is-invalid @enderror"
                                    type="text" value="{{old('img_url')}}" type="text" 
                                    id="example-text-input" 
                                    name="img_url"
                                >

                                @error('img_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
  
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label for="example-text-input" class="col-form-label">SKU</label>
                                <input 
                                    class="form-control @error('sku') is-invalid @enderror" 
                                    type="text" 
                                    value="{{old('sku')}}" id="example-text-input" 
                                    name="sku"
                                >
                                @error('sku')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                             <div class="col-sm-12 col-md-6">
                                <label for="example-text-input" class="col-form-label">Material</label>
                                <input 
                                    class="form-control @error('material') is-invalid @enderror"
                                    type="text" 
                                    value="{{old('material')}}" 
                                    id="example-text-input" 
                                    name="material"
                                >

                                @error('material')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            </div>
  
                        <div class="form-group row">
                                <div class="col-sm-12 col-md-3">
                                        <label for="example-text-input" class="col-form-label">Quantity</label>
                                        <input 
                                            class="form-control @error('qty') is-invalid @enderror"
                                            type="text" 
                                            value="{{old('qty')}}" 
                                            id="example-text-input" 
                                            name="qty"
                                        >
                                        @error('qty')
                                         <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                <div class="col-sm-12 col-md-3">
                                        <label for="example-text-input" class="col-form-label">size</label>
                                        <select 
                                            class="form-control @error('size') is-invalid @enderror"
                                            name="size"
                                        >
                                                <option selected="selected">Choose Size</option>
                                                <option value="7.5">7.5</option>
                                                <option value="8">8</option>
                                                <option value="8.5">8.5</option>
                                                <option value="9">9</option>
                                                <option value="9.5">9.5</option>
                                                <option value="10">10</option>
                                                <option value="10.5">10.5</option>
                                                <option value="11">11</option>
  
              
                                            </select>
                                            @error('size')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                            <label for="example-text-input" class="col-form-label">Price</label>
                                            <input 
                                            class="form-control @error('price') is-invalid @enderror" 
                                            type="text" 
                                            value="{{old('price')}}" 
                                            id="example-text-input" name="price">

                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                          
                            <div class="col-sm-12 col-md-4">
                                <label class="col-form-label">Brands</label>
                                <select 
                                    class="form-control @error('brand_id') is-invalid @enderror"
                                    name="brand_id"
                                >           
                                            <option selected="selected">Choose Brand</option>
                                            @foreach ( $brands as $brand )
                                            <option value="{{ $brand->id}}">
                                                {{$brand->title}}
                                            </option>
                                            @endforeach
  
  
                                </select>
                                @error('brand_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
  
  
                        </div>
  
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Description</label>
                            <textarea 
                                class="form-control @error('description') is-invalid @enderror"
                                name="description" 
                                id="" 
                                cols="30" 
                                rows="10"
                                value="{{old('description')}}"
                            ></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-3">Add Product</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
</div>
    
@endsection