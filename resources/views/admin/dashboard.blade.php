@extends('admin.layouts.app')

@section('main-content')
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
                            <th>Action</th>
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
                                    <strong>{{ $ipAddress->ip_address }}</strong>
                                </td>
                                <td>{{ $ipAddress->city }}</td>
                                <td>
                                    {{ $ipAddress->region??'' }}
                                </td>
                                <td>
                                    {{ $ipAddress->country??'' }}
                                </td>
                                <td>
                                    {{ $ipAddress->created_at }}
                                </td>
                                <td><span class="badge bg-label-primary me-1">{{ $ipAddress->visited }}</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary view-pages-btn" data-ip="{{ $ipAddress->ip_address }}">
                                        <i class="bx bx-show-alt me-1"></i> View Pages
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center px-4 py-2">
                <div class="text-muted small">
                    Showing {{ $ipAddresses->firstItem() ?? 0 }} to {{ $ipAddresses->lastItem() ?? 0 }} of {{ $ipAddresses->total() }} results
                </div>
                <div>
                    {{ $ipAddresses->links('custom-pagination') }}
                </div>
            </div>
        </div>

    </div>


    <!-- Modal for Page-wise Views per IP -->
    <div class="modal fade" id="pageViewsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pageViewsModalTitle">Page Visits for <span id="modal-ip-address" class="text-primary"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Page Path</th>
                                    <th>Views</th>
                                </tr>
                            </thead>
                            <tbody id="page-views-modal-body">
                                <tr>
                                    <td colspan="2" class="text-center">Loading...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkJQuery = setInterval(function() {
                if (window.jQuery) {
                    clearInterval(checkJQuery);
                    setupPageViewsModal();
                }
            }, 50);

            function setupPageViewsModal() {
                $('.view-pages-btn').on('click', function() {
                    var ip = $(this).data('ip');
                    $('#modal-ip-address').text(ip);
                    $('#page-views-modal-body').html('<tr><td colspan="2" class="text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></td></tr>');
                    $('#pageViewsModal').modal('show');

                    $.ajax({
                        url: "{{ route('admin.ip.page-views') }}",
                        type: 'GET',
                        data: { ip: ip },
                        success: function(response) {
                            var html = '';
                            if(response.length > 0) {
                                response.forEach(function(item) {
                                    var pageName = item.page_path === '/' ? 'Home' : item.page_path;
                                    html += '<tr>' +
                                        '<td><strong>' + pageName + '</strong></td>' +
                                        '<td><span class="badge bg-label-primary">' + item.views + '</span></td>' +
                                        '</tr>';
                                });
                            } else {
                                html = '<tr><td colspan="2" class="text-center">No page visits recorded.</td></tr>';
                            }
                            $('#page-views-modal-body').html(html);
                        },
                        error: function() {
                            $('#page-views-modal-body').html('<tr><td colspan="2" class="text-center text-danger">Failed to load data.</td></tr>');
                        }
                    });
                });
            }
        });
    </script>
@endsection
