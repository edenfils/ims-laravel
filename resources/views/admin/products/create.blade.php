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


@section('content')

<div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Title</label>
                            <input class="form-control" type="text" value="" id="example-text-input" name="title">
                        </div>
  
                        <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Image URL</label>
                                <input class="form-control" type="text" value="" id="example-text-input" name="img_url">
                            </div>
  
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label for="example-text-input" class="col-form-label">SKU</label>
                                <input class="form-control" type="text" value="" id="example-text-input" name="sku">
                            </div>
  
                            <div class="col-sm-12 col-md-6">
                                <label for="example-text-input" class="col-form-label">Material</label>
                                <input class="form-control" type="text" value="" id="example-text-input" name="material">
                            </div>
                        </div>
  
                        <div class="form-group row">
                                <div class="col-sm-12 col-md-3">
                                        <label for="example-text-input" class="col-form-label">Quantity</label>
                                        <input class="form-control" type="text" value="" id="example-text-input" name="qty">
                                    </div>
                                <div class="col-sm-12 col-md-3">
                                        <label for="example-text-input" class="col-form-label">size</label>
                                        <select class="form-control" name="size">
                                                <option value="7" selected="selected">7</option>
                                                <option value="7.5">7.5</option>
                                                <option value="8">8</option>
                                                <option value="8.5">8.5</option>
                                                <option value="9">9</option>
                                                <option value="9.5">9.5</option>
                                                <option value="10">10</option>
                                                <option value="10.5">10.5</option>
                                                <option value="11">11</option>
  
              
                                            </select>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                            <label for="example-text-input" class="col-form-label">Price</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" name="price">
                                        </div>
                          
                            <div class="col-sm-12 col-md-4">
                                <label class="col-form-label">Brands</label>
                                <select class="form-control" name="brand_id">
                                            <option value="2">
                                          Adidas Originals
                                          </option>
                                          <option value="3">
                                          Jordan
                                          </option>
                                          <option value="1">
                                          Nike
                                          </option>
                                          <option value="4">
                                          Puma
                                          </option>
  
  
                                </select>
                            </div>
  
  
                        </div>
  
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
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