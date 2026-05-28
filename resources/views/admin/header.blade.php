@extends('admin.layouts.app');
@section('main-content');
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        <h5 class="card-header m-0 me-2 pb-3">Website Header Lists</h5>
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
                        <!-- Button trigger modal -->
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    @foreach ($headers as $index => $header)
                                        <tr>
                                            <th scope="row">Serial</th>
                                            <td>{{ $index + 1 }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Name</th>
                                            <td>{{ $header->website_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Email</th>
                                            <td>{{ $header->website_email }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Number</th>
                                            <td>{{ $header->website_number }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Address</th>
                                            <td>{{ $header->website_address }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Logo Light</th>

                                            <td><img src="{{ asset('storage/' . str_replace('public/', '', $header->website_logo_light)) }}"
                                                    alt="Website Logo_light" width="200"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website Logo Dark</th>
                                            <td><img src="{{ asset('storage/' . str_replace('public/', '', $header->website_logo_dark)) }}"
                                                    alt="Website Logo_dark" width="200"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Actions</th>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editLinkModal{{ $header->id }}">Edit</button>
                                            </td>
                                        </tr>

                                        <!-- Edit Link Modal -->
                                        <div class="modal fade" id="editLinkModal{{ $header->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="POST"
                                                        action="{{ route('header.update', ['header' => $header->id]) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT') <!-- Use the PUT method for updating -->
                                                        <div class="modal-body">
                                                            <!-- Add fields here to update header -->
                                                            <div class="mb-3">
                                                                <label for="update_website_name" class="form-label">Updated
                                                                    Website Name</label>
                                                                <input type="text" class="form-control" id="update_website_name"
                                                                    name="website_name" required
                                                                    value="{{ $header->website_name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="update_website_logo_light"
                                                                    class="form-label">Website Logo Light (Image)</label>
                                                                @if ($header->website_logo_light)
                                                                    <div class="mb-2">
                                                                        <img src="{{ asset('storage/' . str_replace('public/', '', $header->website_logo_light)) }}"
                                                                            alt="Current Logo Light"
                                                                            style="max-width: 200px; max-height: 200px;">
                                                                    </div>
                                                                    <input type="hidden" name="current_website_logo_light"
                                                                        value="{{ $header->website_logo_light }}">
                                                                @endif
                                                                <input type="file" class="form-control-file"
                                                                    id="update_website_logo_light" name="website_logo_light">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="update_website_logo_dark" class="form-label">Website
                                                                    Logo Dark(Image)</label>
                                                                @if ($header->website_logo_dark)
                                                                    <div class="mb-2">
                                                                        <img src="{{ asset('storage/' . str_replace('public/', '', $header->website_logo_dark)) }}"
                                                                            alt="Current Logo Dark"
                                                                            style="max-width: 200px; max-height: 200px;">
                                                                    </div>
                                                                    <input type="hidden" name="current_website_logo_dark"
                                                                        value="{{ $header->website_logo_dark }}">
                                                                @endif
                                                                <input type="file" class="form-control-file"
                                                                    id="update_website_logo_dark" name="website_logo_dark">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="update_website_number" class="form-label">Updated
                                                                    Website Number</label>
                                                                <input type="text" class="form-control"
                                                                    id="update_website_number" name="website_number" required
                                                                    value="{{ $header->website_number }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="update_website_address" class="form-label">Updated
                                                                    Website
                                                                    Address</label>
                                                                <input type="text" class="form-control"
                                                                    id="update_website_address" name="website_address" required
                                                                    value="{{ $header->website_address }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="update_website_email" class="form-label">Updated
                                                                    Website Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="update_website_email" name="website_email" required
                                                                    value="{{ $header->website_email }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Update header</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection