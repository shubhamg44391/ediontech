@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">value Values </h5>
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
                                @foreach ($values as $index => $value)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value  Title</th>
                                    <td>{{ $value->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Sub Title</th>
                                    <td>{{ $value->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Description</th>
                                    <td>{{ $value->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content 1</th>
                                    <td>{{ $value->content_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Title 1</th>
                                    <td>{{ $value->content_title_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Description 1</th>
                                    <td>{{ $value->content_description_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content 2</th>
                                    <td>{{ $value->content_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Title 2</th>
                                    <td>{{ $value->content_title_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Description 2</th>
                                    <td>{{ $value->content_description_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content 3</th>
                                    <td>{{ $value->content_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Title 3</th>
                                    <td>{{ $value->content_title_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Description 3</th>
                                    <td>{{ $value->content_description_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content 4</th>
                                    <td>{{ $value->content_4 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Title 4</th>
                                    <td>{{ $value->content_title_4 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Description 4</th>
                                    <td>{{ $value->content_description_4 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content 5</th>
                                    <td>{{ $value->content_5 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Title 5</th>
                                    <td>{{ $value->content_title_5 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Value Content Description 5</th>
                                    <td>{{ $value->content_description_5 }}</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $value->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('about_values.update', ['values' => $value->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                                <div class="modal-body">
                                                    <!-- Add fields here to update header -->
                                                    <div class="mb-3">
                                                        <label for="update_value_title" class="form-label">Updated Value Title</label>
                                                        <input type="text" class="form-control" id="update_value_title" name="title" value="{{ $value->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_subtitle" class="form-label">Updated Value Subtitle</label>
                                                        <input type="text" class="form-control" id="update_value_subtitle" name="subtitle" value="{{ $value->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_description" class="form-label">Updated Value Description</label>
                                                        <textarea class="form-control" id="update_value_description" name="description">{{ $value->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_1" class="form-label">Updated Value Content 1</label>
                                                        <input type="text" class="form-control" id="update_value_content_1" name="content_1" value="{{ $value->content_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_title_1" class="form-label">Updated Value Content Title 1</label>
                                                        <input type="text" class="form-control" id="update_value_content_title_1" name="content_title_1" value="{{ $value->content_title_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_description_1" class="form-label">Updated Value Content Description 1</label>
                                                        <input type="text" class="form-control" id="update_value_content_description_1" name="content_description_1" value="{{ $value->content_description_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_2" class="form-label">Updated Value Content 2</label>
                                                        <input type="text" class="form-control" id="update_value_content_2" name="content_2" value="{{ $value->content_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_title_2" class="form-label">Updated Value Content Title 2</label>
                                                        <input type="text" class="form-control" id="update_value_content_title_2" name="content_title_2" value="{{ $value->content_title_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_description_2" class="form-label">Updated Value Content Description 2</label>
                                                        <input type="text" class="form-control" id="update_value_content_description_2" name="content_description_2" value="{{ $value->content_description_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_3" class="form-label">Updated Value Content 3</label>
                                                        <input type="text" class="form-control" id="update_value_content_3" name="content_3" value="{{ $value->content_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_title_3" class="form-label">Updated Value Content Title 3</label>
                                                        <input type="text" class="form-control" id="update_value_content_title_3" name="content_title_3" value="{{ $value->content_title_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_description_3" class="form-label">Updated Value Content Description 3</label>
                                                        <input type="text" class="form-control" id="update_value_content_description_3" name="content_description_3" value="{{ $value->content_description_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_4" class="form-label">Updated Value Content 4</label>
                                                        <input type="text" class="form-control" id="update_value_content_4" name="content_4" value="{{ $value->content_4 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_title_4" class="form-label">Updated Value Content Title 4</label>
                                                        <input type="text" class="form-control" id="update_value_content_title_4" name="content_title_4" value="{{ $value->content_title_4 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_description_4" class="form-label">Updated Value Content Description 4</label>
                                                        <input type="text" class="form-control" id="update_value_content_description_4" name="content_description_4" value="{{ $value->content_description_4 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_5" class="form-label">Updated Value Content 5</label>
                                                        <input type="text" class="form-control" id="update_value_content_5" name="content_5" value="{{ $value->content_5 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_title_5" class="form-label">Updated Value Content Title 5</label>
                                                        <input type="text" class="form-control" id="update_value_content_title_5" name="content_title_5" value="{{ $value->content_title_5 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_value_content_description_5" class="form-label">Updated Value Content Description 5</label>
                                                        <input type="text" class="form-control" id="update_value_content_description_5" name="content_description_5" value="{{ $value->content_description_5 }}">
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Update value</button>
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
