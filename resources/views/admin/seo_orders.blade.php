@extends('admin.layouts.app')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom mb-3">
                            <h5 class="m-0">SEO Payment Transactions</h5>
                            <form method="GET" action="{{ route('admin.seo-orders.index') }}" class="d-flex align-items-center gap-2">
                                <label for="statusFilter" class="mb-0 text-nowrap" style="font-size: 14px; color: rgba(255,255,255,0.7);">Filter Status:</label>
                                <select name="status" id="statusFilter" class="form-select form-select-sm" onchange="this.form.submit()" style="width: 150px; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 6px; padding: 6px 12px; outline: none; cursor: pointer;">
                                    <option value="" style="background: #181818; color: #fff;">All</option>
                                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }} style="background: #181818; color: #fff;">Paid</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }} style="background: #181818; color: #fff;">Pending</option>
                                    <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }} style="background: #181818; color: #fff;">Failed</option>
                                </select>
                            </form>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                @if(session('success'))
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ session('success') }}',
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                @endif
                            });
                        </script>
                        
                        <div style="overflow-x: auto; max-width: 100%;">
                            <table class="table" style="min-width: 1000px;">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Package Name</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Tax (18%)</th>
                                        <th>Total Paid</th>
                                        <th>Reference ID</th>
                                        <th>Status</th>
                                        <th>Date/Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($orders->count() > 0)
                                        @foreach ($orders as $index => $order)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->whatsapp_number }}</td>
                                                <td><span class="badge bg-label-primary">{{ $order->package_name }}</span></td>
                                                <td>{{ ucfirst($order->package_type) }}</td>
                                                <td>{{ $order->currency }} {{ number_format($order->amount, 2) }}</td>
                                                <td>{{ $order->currency }} {{ number_format($order->tax_amount, 2) }}</td>
                                                <td><strong>{{ $order->currency }} {{ number_format($order->total_amount, 2) }}</strong></td>
                                                <td><code>{{ $order->razorpay_payment_id ?? 'N/A' }}</code></td>
                                                <td>
                                                    @if($order->status === 'paid')
                                                        <span class="badge bg-success">Paid</span>
                                                    @elseif($order->status === 'pending')
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                    @else
                                                        <span class="badge bg-danger">Failed</span>
                                                    @endif
                                                </td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $order->id }}">
                                                        <i class='bx bx-trash bx-sm'></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="13" class="text-center">No transactions found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $orders->links('custom-pagination') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modals -->
    @if (!$orders->isEmpty())
        @foreach ($orders as $order)
            <div class="modal fade" id="deleteModal{{ $order->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this order transaction record (Package: {{ $order->package_name }} for {{ $order->name }})?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form method="POST" action="{{ route('admin.seo-orders.destroy', ['id' => $order->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
