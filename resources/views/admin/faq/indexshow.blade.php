@extends('admin.layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">


    {{-- add faq page title description  --}}
    <div class=" flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="card-header">
              {{-- @php
                $slug = request()->route('slug');
            
              @endphp --}}
               {{-- <h4 class="py-3 mb-4">Update {{ ucfirst($slug ?? '') }} Data</h4> --}}
                @if(session('seo_success'))
                        <div class="alert alert-success">
                            {{ session('seo_success') }}
                        </div>
                    @endif
                    
                    @if(session('seo_error'))
                        <div class="alert alert-danger">
                            {{ session('seo_error') }}
                        </div>
                    @endif
            </div>
              <h4 class="px-4 py-3 mb-4">Update Meta</h4>
            <div class="card-body">
                <form method="POST" action="{{ route('title.update',['slug'=>'faq']) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('meta_title', $data->meta_title ?? '') }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message??'' }}</div>
                            @enderror
                        </div>
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('meta_description', $data->meta_description??'') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message??'' }}</div>
                        @enderror
                    </div>
                    
            
    
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary" >Update</button>
                        <a href="{{ route('title.content',['slug'=>'faq']) }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    {{-- add faq page title description  --}}

    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-10">
                    <h4 class="px-4 py-3 mb-4">FAQ List</h4>
                </div>
                <div class="col-md-2">
                    <div class="table-btn-css">
                        <a href="{{ route('admin.faq.create') }}">
                            <button style="position:relative;left:40px;" type="button" class="mt-3 btn btn-primary waves-effect waves-light">
                                <span class="ti-xs ti ti-plus me-1"></span>Add FAQ
                            </button>
                        </a>
                    </div>
                </div>
                <div class="px-2 col-md-12">
                    @if(session('faq_success'))
                        <div class="mx-2 alert alert-success">
                            {{ session('faq_success') }}
                        </div>
                    @endif
                    
                    @if(session('faq_error'))
                        <div class="mx-2 alert alert-danger">
                            {{ session('faq_error') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date/Time</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->title }}</td>
                                <td>{{ Str::limit($faq->description, 50) }}</td>
                                <td>{{ $faq->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.faq.update', $faq->id) }}" class="btn btn-primary btn-sm">
                                        <i class='bx bx-edit bx-sm'></i>
                                    </a>
                                    <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                            <i class='bx bx-trash bx-sm'></i>
                                        </button>
                                    </form>
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

@endsection
