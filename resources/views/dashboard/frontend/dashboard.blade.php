
@extends('dashboard.frontend.layouts.app');

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
                                        <small class="text-muted text-decoration-underline">{{ $totalIpCount }} Total Visitors</small>
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
        {{-- <div class="order-2 mb-4 col-12 col-lg-12 order-md-3 order-lg-2">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="pb-3 m-0 card-header me-2">Visitors Chart</h5>
                        <div class="chart-container"> --}}
                            {{-- <canvas id="chart"></canvas> --}}
                        {{-- </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                        <script>
                            const cityVisitorCounts = @json($cityVisitorCounts);

                            // Extract the total_visitors values into a separate array
                            const totalVisitorsArray = cityVisitorCounts.map(cityVisitor => cityVisitor.total_visitors);
                            const City = cityVisitorCounts.map(cityVisitor => cityVisitor.city);
                            var data = {
                                labels: City, // Use the city names here
                                datasets: [{
                                    label: "Dataset #1",
                                    backgroundColor: "rgba(255,99,132,0.2)",
                                    borderColor: "rgba(255,99,132,1)",
                                    borderWidth: 2,
                                    hoverBackgroundColor: "rgba(255,99,132,0.4)",
                                    hoverBorderColor: "rgba(255,99,132,1)",
                                    data: (totalVisitorsArray), // Use your dynamic chart data here
                                }]
                            };

                            var options = {
                                maintainAspectRatio: false,
                                scales: {
                                    y: {
                                        stacked: true,
                                        grid: {
                                            display: true,
                                            color: "rgba(255,99,132,0.2)"
                                        }
                                    },
                                    x: {
                                        grid: {
                                            display: false
                                        }
                                    }
                                }
                            };

                            new Chart('chart', {
                                type: 'bar',
                                options: options,
                                data: data
                            });
                            
                        </script> --}}
                        {{-- {{ ($cityVisitorCounts->total_visitors)}} --}}
                    {{-- </div>
                </div>
            </div>
        </div> --}}
        
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
                            @foreach ($ipAddresses as  $ipAddress)
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
