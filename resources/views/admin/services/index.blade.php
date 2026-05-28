@extends('layouts.app')
@section('main-content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-10">
                    <h4 class="py-3 mb-4">Services List</h4>
                </div>
                <div class="col-md-2">
                    <div class="table-btn-css">
                        <a href="{{ route('admin.services.create') }}">
                            <button style="position:relative;left:40px;" type="button" class="btn btn-primary waves-effect waves-light mt-3">
                                <span class="ti-xs ti ti-plus me-1"></span>Add Service
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Sub-Services</th>
                                <th>Status</th>
                                <th>Order</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ Str::limit($service->description, 50) }}</td>
                                <td>{{ $service->subServices->count() }}</td>
                                <td>
                                    <span class="badge {{ $service->status ? 'bg-success' : 'bg-danger' }}">
                                        {{ $service->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>{{ $service->order }}</td>
                                <td>
                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-sm">
                                        <i class='bx bx-edit bx-sm'></i>
                                    </a>
                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">
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