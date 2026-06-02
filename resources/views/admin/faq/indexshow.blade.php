@extends('admin.layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-10">
                    <h4 class="py-3 mb-4">FAQ List</h4>
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
                <div class="col-md-12">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                            <tr>
                                <td>{{ $faq->id }}</td>
                                <td>{{ $faq->title }}</td>
                                <td>{{ Str::limit($faq->description, 50) }}</td>
                                
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
