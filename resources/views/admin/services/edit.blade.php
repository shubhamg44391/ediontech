@extends('layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="py-3 mb-4">Edit Service: {{ $service->name }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.services.update', $service->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Service Name *</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $service->name) }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $service->order) }}">
                            @error('order')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $service->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{ old('status', $service->status) ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <h5 class="mb-3">SEO Settings</h5>
                    
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ old('meta_title', $service->meta_title) }}">
                        <div class="form-text">Recommended: 50-60 characters</div>
                        @error('meta_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" rows="2">{{ old('meta_description', $service->meta_description) }}</textarea>
                        <div class="form-text">Recommended: 150-160 characters</div>
                        @error('meta_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2">{{ old('meta_keywords', $service->meta_keywords) }}</textarea>
                        <div class="form-text">Comma separated keywords</div>
                        @error('meta_keywords')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Service</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection