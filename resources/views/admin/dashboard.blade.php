@extends('admin.layouts.app');

@section('main-content');
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="mb-4 col-lg-8 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">

                            </div>
                        </div>
                        <div class="text-center col-sm-5 text-sm-left">
                            <div class="px-0 pb-0 card-body px-md-4">
                                <img src="{{ asset('admin-assets/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 col-lg-4 col-md-4">
                <div class="row">
                    <!-- Order Statistics -->
                    <div class="mb-4 col-md-12 col-lg-12 col-xl-12 order-0">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="my-4 d-flex justify-content-between align-items-center">
                                    <div class="mb-0 card-title">
                                        <h4 class="m-0 mb-4 me-2">Visitors</h4>
                                        <small class="text-muted text-decoration-underline">{{ $totalIpCount }} Total
                                            Visitors</small>
                                    </div>
                                    <div class="gap-1 d-flex flex-column align-items-center">
                                        <h2 class="mb-2">{{ $totalIpCount }}</h2>
                                        <span>Total Visitors</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Order Statistics -->
                </div>
            </div>
            <!-- Total Revenue -->

        </div>
      
        <!-- Order Statistics -->
        <div class="card">
            <h5 class="card-header">Visitors</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>IP Address</th>
                            <th>City</th>
                            <th>Region</th>
                            <th>Country</th>
                            <th>Date/Time</th>
                            <th>Visited</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @php
                            $startingNumber = ($ipAddresses->currentPage() - 1) * $ipAddresses->perPage() + 1;
                        @endphp
                        @foreach ($ipAddresses as $ipAddress)
                            <tr>
                                <td>{{ $startingNumber++ }}</td>
                                <td>
                                    {{-- <strong>{{ $ipAddress->ip_address }}</strong> --}}
                                </td>
                                <td>{{ $ipAddress->city }}</td>
                                <td>
                                    {{ $ipAddress->region }}
                                </td>
                                <td>
                                    {{ $ipAddress->country }}
                                </td>
                                <td>
                                    {{ $ipAddress->created_at }}
                                </td>
                                <td><span class="badge bg-label-primary me-1">{{ $ipAddress->visited }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $ipAddresses->links('custom-pagination') }} --}}
                {{ $ipAddresses->links() }}
            </div>
        </div>

    </div>
@endsection