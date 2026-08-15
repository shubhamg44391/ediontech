@extends('admin.layouts.app')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="pb-3 m-0 card-header me-2">Leads List</h5>
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
                        
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width:60px;">Serial</th>
                                        <th>Name</th>
                                        <th>Source</th>
                                        <th>Number</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Message</th>
                                        <th>Budget</th>
                                        <th>Date/Time</th>
                                        <th style="width:110px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($leads->count() > 0)
                                        @foreach ($leads as $index => $lead)
                                            <tr>
                                                <td>{{ $leads->total() - (($leads->currentPage() - 1) * $leads->perPage() + $index) }}</td>
                                                <td><strong>{{ $lead->name }}</strong></td>
                                                <td><span class="fw-semibold">{{ $lead->source ?? 'Contact Us' }}</span></td>
                                                <td>{{ $lead->number }}</td>
                                                <td style="word-break:break-word;">{{ $lead->email }}</td>
                                                <td>{{ $lead->company ?: '—' }}</td>
                                                <td><span class="text-truncate d-inline-block" style="max-width:180px;" title="{{ $lead->message }}">{{ \Illuminate\Support\Str::limit($lead->message, 35) }}</span></td>
                                                <td>{{ $lead->budget ?: '—' }}</td>
                                                <td><small class="text-muted">{{ \Carbon\Carbon::parse($lead->created_at)->format('d M Y, h:i A') }}</small></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <!-- View Details Modal Button -->
                                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                            data-bs-target="#viewLeadModal{{ $lead->id }}" title="View Lead Details">
                                                            <i class='bx bx-show bx-xs'></i>
                                                        </button>

                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#updateInformationModal{{ $lead->id }}" title="Edit Lead">
                                                            <i class='bx bx-edit bx-xs'></i>
                                                        </button>

                                                        <!-- Delete Button -->
                                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $lead->id }}" title="Delete Lead">
                                                            <i class='bx bx-trash bx-xs'></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class="text-center py-4">No Leads found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="p-3">
                            {{ $leads->links('custom-pagination') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (!$leads->isEmpty())
        @foreach ($leads as $lead)
            @php
                $sourcePage = $lead->source ?? 'Contact Us';
                $serviceNeeded = $lead->service ?? 'N/A';
                $ndaRequested = $lead->nda ?? 'No';
            @endphp

            <!-- View Lead Details Modal -->
            <div class="modal fade" id="viewLeadModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class='bx bx-user-detail me-2'></i>Lead Details </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">SOURCE PAGE</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $sourcePage }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">WHAT DO YOU NEED? (SERVICE)</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $serviceNeeded }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">FULL NAME</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $lead->name ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">EMAIL ADDRESS</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">
                                        <a href="mailto:{{ $lead->email }}" class="text-dark text-decoration-none">{{ $lead->email ?? 'N/A' }}</a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">PHONE / WHATSAPP</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">
                                        <a href="tel:{{ $lead->number }}" class="text-dark text-decoration-none">{{ $lead->number ?? 'N/A' }}</a>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">COMPANY</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $lead->company ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">BUDGET RANGE</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $lead->budget ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold text-muted d-block small mb-1">REQUESTED NDA?</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $ndaRequested }}</p>
                                </div>
                                <div class="col-md-12">
                                    <label class="fw-bold text-muted d-block small mb-1">SUBMITTED DATE & TIME</label>
                                    <p class="fs-6 text-dark font-weight-bold bg-light p-2 rounded border mb-0">{{ $lead->created_at ?? 'N/A' }}</p>
                                </div>
                                <div class="col-12">
                                    <label class="fw-bold text-muted d-block small mb-1">FULL MESSAGE / PROJECT BRIEF</label>
                                    <div class="bg-light p-3 rounded border" style="white-space: pre-wrap; font-size: 0.95rem; word-break: break-word;">{{ $lead->message ?? 'No details provided.' }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Information Modal -->
            <div class="modal fade" id="updateInformationModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Lead</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="{{ route('leads.update', ['lead' => $lead->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="contact-name-{{ $lead->id }}" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="contact-name-{{ $lead->id }}" name="name"
                                        value="{{ $lead->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-number-{{ $lead->id }}" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="contact-number-{{ $lead->id }}" name="number"
                                        value="{{ $lead->number }}">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-email-{{ $lead->id }}" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="contact-email-{{ $lead->id }}" name="email"
                                        value="{{ $lead->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-company-{{ $lead->id }}" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="contact-company-{{ $lead->id }}" name="company"
                                        value="{{ $lead->company }}">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-budget-{{ $lead->id }}" class="form-label">Budget</label>
                                    <input type="text" class="form-control" id="contact-budget-{{ $lead->id }}" name="budget"
                                        value="{{ $lead->budget }}">
                                </div>
                                <div class="mb-3">
                                    <label for="contact-message-{{ $lead->id }}" class="form-label">Message / Details</label>
                                    <textarea class="form-control" id="contact-message-{{ $lead->id }}" name="message"
                                        rows="4">{{ $lead->message }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Lead</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete lead for <strong>{{ $lead->name }}</strong>?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <form method="POST" action="{{ route('leads.destroy', ['lead' => $lead->id]) }}">
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
