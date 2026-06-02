@extends('admin.layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="py-3 mb-4">Add New Service</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.faq.store') }}">
                    @csrf
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">FAQ Title </label>
                            <input type="text" class="form-control" id="title" name="title" value="" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
            
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">FAQ Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Create FAQ</button>
                        <a href="{{ route('admin.faq.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
