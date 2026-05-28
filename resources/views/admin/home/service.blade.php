@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Home Service</h5>
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
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @foreach ($services as $index => $service)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Title</th>
                                    <td>{{ $service->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Sub-Title</th>
                                    <td>{{ $service->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Title-1</th>
                                    <td>{{ $service->content_title_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Description-1</th>
                                    <td>{{ $service->content_description_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Title-2</th>
                                    <td>{{ $service->content_title_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Description-2</th>
                                    <td>{{ $service->content_description_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Title-3</th>
                                    <td>{{ $service->content_title_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Service Content-Description-3</th>
                                    <td>{{ $service->content_description_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $service->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('service.update', ['service' => $service->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                            
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="update_service_title" class="form-label">Updated Service Title</label>
                                                        <input type="text" class="form-control" id="update_service_title" name="title" required value="{{ $service->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_service_subtitle" class="form-label">Updated Service Subtitle</label>
                                                        <input type="text" class="form-control" id="update_service_subtitle" name="subtitle" value="{{ $service->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_title_1" class="form-label">Updated Content Title 1</label>
                                                        <input type="text" class="form-control" id="update_content_title_1" name="content_title_1" value="{{ $service->content_title_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_description_1" class="form-label">Updated Content Description 1</label>
                                                        <textarea class="form-control" id="update_content_description_1" name="content_description_1" rows="3">{{ $service->content_description_1 }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_title_2" class="form-label">Updated Content Title 2</label>
                                                        <input type="text" class="form-control" id="update_content_title_2" name="content_title_2" value="{{ $service->content_title_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_description_2" class="form-label">Updated Content Description 2</label>
                                                        <textarea class="form-control" id="update_content_description_2" name="content_description_2" rows="3">{{ $service->content_description_2 }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_title_3" class="form-label">Updated Content Title 3</label>
                                                        <input type="text" class="form-control" id="update_content_title_3" name="content_title_3" value="{{ $service->content_title_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_description_3" class="form-label">Updated Content Description 3</label>
                                                        <textarea class="form-control" id="update_content_description_3" name="content_description_3" rows="3">{{ $service->content_description_3 }}</textarea>
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Service</button>
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
