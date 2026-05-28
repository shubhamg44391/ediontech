@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Home Client</h5>
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
                                @foreach ($clients as $index => $client)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Client Title</th>
                                    <td>{{ $client->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Client Sub-Title</th>
                                    <td>{{ $client->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Client Description</th>
                                    <td>{{ $client->description }}</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $client->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('client.update', ['client' => $client->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                            
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="update_client_title" class="form-label">Updated Client Title</label>
                                                        <input type="text" class="form-control" id="update_client_title" name="title" required value="{{ $client->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_client_subtitle" class="form-label">Updated Client Subtitle</label>
                                                        <input type="text" class="form-control" id="update_client_subtitle" name="subtitle" value="{{ $client->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_title_1" class="form-label">Updated Client Description</label>
                                                        <input type="text" class="form-control" id="update_content_title_1" name="description" value="{{ $client->description }}">
                                                    </div>
                                                    
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Client</button>
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
