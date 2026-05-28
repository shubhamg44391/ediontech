@extends('admin.layouts.app')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Website Leads List</h5>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                @if(session('success'))
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: '{{ session('success') }}',
                                        showConfirmButton: false,
                                        timer: 2000 // Set the timer to close the alert after 2 seconds
                                    });
                                @endif
                                });
                        </script>
                        <!-- Button trigger modal -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serial </th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($leads->count() > 0)
                                    @foreach ($leads as $index => $lead)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $lead->name }}</td>
                                            <td>{{ $lead->number }}</td>
                                            <td>{{ $lead->email }}</td>
                                            <td>{{ $lead->company }}</td>
                                            <td>{{ $lead->message }}</td>
                                            <td class=" justify-content-between">

                                                <button type="button" class="btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#updateInformationModal{{ $lead->id }}">
                                                    <i class='bx bx-edit bx-sm'></i>
                                                </button>
                                                <button type="button" class="btn-primary " data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $lead->id }}">
                                                    <i class='bx bx-trash bx-sm'></i>
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>No Leads found.</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $leads->links('custom-pagination') }}

                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Add Information --}}
    {{-- <div class="container">
        <div class="col-lg-4 col-md-6">
            <small class="text-light fw-semibold">Default</small>
            <div class="mt-3">


                <!-- Modal -->
                <div class="modal fade" id="addInformationModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('information.create') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="website_name" class="form-label">Website Name</label>
                                        <input type="text" class="form-control" id="website_name" name="website_name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="website_logo" class="form-label">Website Logo (Image)</label>
                                        <input type="file" class="form-control-file" id="website_logo" name="website_logo"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="website_number" class="form-label">Website Number</label>
                                        <input type="text" class="form-control" id="website_number" name="website_number"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="website_address" class="form-label">Website Address</label>
                                        <input type="text" class="form-control" id="website_address" name="website_address"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="website_email" class="form-label">Website Email</label>
                                        <input type="email" class="form-control" id="website_email" name="website_email"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="facebook_links" class="form-label">Facebook Links</label>
                                        <input type="text" class="form-control" id="facebook_links" name="facebook_links">
                                    </div>
                                    <div class="mb-3">
                                        <label for="twitter_links" class="form-label">Twitter Links</label>
                                        <input type="text" class="form-control" id="twitter_links" name="twitter_links">
                                    </div>
                                    <div class="mb-3">
                                        <label for="instagram_link" class="form-label">Instagram Link</label>
                                        <input type="text" class="form-control" id="instagram_link" name="instagram_link">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Add Information</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- edit Information --}}
    @if (!$leads->isEmpty())

        @foreach ($leads as $lead)
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                    <!-- Button trigger modal for updating information -->
                    <!-- Update Information Modal -->
                    <div class="modal fade" id="updateInformationModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Update Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('leads.update', ['lead' => $lead->id]) }}">
                                    @csrf
                                    @method('PUT') <!-- Use the PUT method for updating -->
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="contact-name">Name</label>
                                            <input type="text" class="form-control" id="contact-name" name="name"
                                                value="{{ $lead->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact-email">Phone Number</label>
                                            <input type="number" class="form-control" id="contact-number" name="number"
                                                value="{{ $lead->number }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact-email">Email</label>
                                            <input type="email" class="form-control" id="contact-email" name="email"
                                                value="{{ $lead->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact-company">Company</label>
                                            <input type="text" class="form-control" id="contact-company" name="company"
                                                value="{{ $lead->company }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact-message">Message</label>
                                            <textarea class="form-control" id="contact-message" name="message"
                                                rows="4">{{ $lead->message }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Contact</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @endif

    {{-- Details --}}
    <!-- Details Modal -->
    @if (!$leads->isEmpty())

        @foreach ($leads as $lead)
            <div class="modal fade" id="deleteModal{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this Lead?</p>
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