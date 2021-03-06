@extends('layouts/admin');

@section('title')
    Add New Brand - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Brands</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/brands">Dashboard</a></li>
            <li><a href="/admin/brands">All Brands</a></li>
            <li><span>Add New Brand</span></li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('brand.store')}}" method="POST">
                                @csrf
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
                                type="text" 
                                value="{{old('img_url')}}" id="example-text-input" 
                                name="img_url"
                                >

                                @error('img_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
  
                      
  
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Description</label>
                            <textarea 
                                class="form-control @error('description') is-invalid @enderror" 
                                name="description" 
                                id="" 
                                cols="30" 
                                rows="10"
                            >{{old('description')}}</textarea>

                            @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-3">Add Brand</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection