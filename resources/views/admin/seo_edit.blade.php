@extends('admin.layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="card-header">
              @php
                $slug = request()->route('slug');
            
              @endphp
               {{-- <h4 class="py-3 mb-4">Update {{ ucfirst($slug ?? '') }} Data</h4> --}}
               <h4 class="py-3 mb-4">Update Meta</h4>
            </div>
            @if(session('success'))
                        <div class="mx-4 alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="mx-3 alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
            <div class="card-body">
                <form method="POST" action="{{ route('title.update',['slug'=>$slug]) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" required id="title" name="title" value="{{ old('meta_title', $data->meta_title ?? '') }}" >
                            @error('name')
                                <div class="text-danger">{{ $message??'' }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="description" required name="description" rows="3">{{ old('meta_description', $data->meta_description??'') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message??'' }}</div>
                        @enderror
                    </div>
                    
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('title.content',['slug'=>$slug]) }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
