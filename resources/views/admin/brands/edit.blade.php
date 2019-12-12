@extends('layouts/admin');

@section('title')
    Edit Brand - IMS Laravel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Brands</h4>
        <ul class="breadcrumbs pull-left">
            <li><a href="/admin/brands">Dashboard</a></li>
            <li><a href="/admin/brands">All Brands</a></li>
            <li><span>Edit Brand</span></li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('brand.update', ['id' => $id])}}" method="POST">
                                @csrf
                                @method('PUT')
                        <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Title</label>
                        <input 
                            class="form-control @error('title') is-invalid @enderror" 
                            type="text" 
                            value="{{$brand[0]->title}}" 
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
                                value="{{$brand[0]->img_url}}" id="example-text-input" 
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
                            >{{$brand[0]->description}}</textarea>

                            @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-3">Update Brand</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection