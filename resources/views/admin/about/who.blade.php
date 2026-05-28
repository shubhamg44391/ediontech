@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">About Us </h5>
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
                                @foreach ($abouts as $index => $about)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Title</th>
                                    <td>{{ $about->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Sub Title</th>
                                    <td>{{ $about->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Description</th>
                                    <td>{{ $about->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Link Title</th>
                                    <td>{{ $about->link_title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Counter 1</th>
                                    <td>{{ $about->counter_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Counter Title 1</th>
                                    <td>{{ $about->counter_title_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Counter2</th>
                                    <td>{{ $about->counter_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">About Us Counter Title 2</th>
                                    <td>{{ $about->counter_title_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $about->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('about_who.update', ['who' => $about->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                                <div class="modal-body">
                                                    <!-- Add fields here to update header -->
                                                    <div class="mb-3">
                                                        <label for="update_about_title" class="form-label">Updated About Us Title</label>
                                                        <input type="text" class="form-control" id="update_about_title" name="title" required value="{{ $about->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_subtitle" class="form-label">Updated About Us Subtitle</label>
                                                        <input type="text" class="form-control" id="update_about_subtitle" name="subtitle" value="{{ $about->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_description" class="form-label">Updated About Us Description</label>
                                                        <textarea class="form-control" id="update_about_description" name="description" rows="3">{{ $about->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_link_title" class="form-label">Updated About Us Link Title</label>
                                                        <input type="text" class="form-control" id="update_about_link_title" name="link_title" value="{{ $about->link_title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_counter_1" class="form-label">Updated About Us Counter 1</label>
                                                        <input type="text" class="form-control" id="update_about_counter_1" name="counter_1" value="{{ $about->counter_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_counter_title_1" class="form-label">Updated About Us Counter Title 1</label>
                                                        <input type="text" class="form-control" id="update_about_counter_title_1" name="counter_title_1" value="{{ $about->counter_title_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_counter_2" class="form-label">Updated About Us Counter 2</label>
                                                        <input type="text" class="form-control" id="update_about_counter_2" name="counter_2" value="{{ $about->counter_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_about_counter_title_2" class="form-label">Updated About Us Counter Title 2</label>
                                                        <input type="text" class="form-control" id="update_about_counter_title_2" name="counter_title_2" value="{{ $about->counter_title_2 }}">
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Update about</button>
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
