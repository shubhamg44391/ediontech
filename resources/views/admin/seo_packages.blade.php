@extends('admin.layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="card-header border-bottom mb-4 d-flex justify-content-between align-items-center">
                <h4 class="m-0 py-2">Update SEO Package Pricing</h4>
            </div>
            
            @if(session('success'))
                <div class="mx-4 alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if($errors->any())
                <div class="mx-4 alert alert-danger alert-dismissible" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card-body">
                <form method="POST" action="{{ route('admin.seo-packages.update') }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row g-4">
                        @foreach($packages as $package)
                            <div class="col-12 col-md-6 col-lg-6 mb-3">
                                <div class="card border shadow-none">
                                    <div class="card-header bg-light py-3">
                                        <h5 class="m-0 text-primary">{{ $package->name }} Package</h5>
                                    </div>
                                    <div class="card-body pt-3">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="monthly_price_{{ $package->id }}">Monthly Price (INR)</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">₹</span>
                                                    <input type="number" step="0.01" class="form-control" 
                                                           id="monthly_price_{{ $package->id }}" 
                                                           name="prices[{{ $package->id }}][monthly_price]" 
                                                           value="{{ old('prices.'.$package->id.'.monthly_price', $package->monthly_price) }}" 
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="yearly_price_{{ $package->id }}">Yearly Price (INR)</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">₹</span>
                                                    <input type="number" step="0.01" class="form-control" 
                                                           id="yearly_price_{{ $package->id }}" 
                                                           name="prices[{{ $package->id }}][yearly_price]" 
                                                           value="{{ old('prices.'.$package->id.'.yearly_price', $package->yearly_price) }}" 
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-4 border-top pt-3">
                        <button type="submit" class="btn btn-primary me-2">Save Pricing Changes</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
