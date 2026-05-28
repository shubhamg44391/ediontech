@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">About Process </h5>
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
                                @foreach ($processes as $index => $process)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process  Title</th>
                                    <td>{{ $process->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Sub Title</th>
                                    <td>{{ $process->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Description</th>
                                    <td>{{ $process->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step_1</th>
                                    <td>{{ $process->step_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Title 1</th>
                                    <td>{{ $process->step_title_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Description 1</th>
                                    <td>{{ $process->step_description_1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step_2</th>
                                    <td>{{ $process->step_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Title 2</th>
                                    <td>{{ $process->step_title_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Description 2</th>
                                    <td>{{ $process->step_description_2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step_3</th>
                                    <td>{{ $process->step_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Title 3</th>
                                    <td>{{ $process->step_title_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Description 3</th>
                                    <td>{{ $process->step_description_3 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step_4</th>
                                    <td>{{ $process->step_4 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Title 4</th>
                                    <td>{{ $process->step_title_4 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Process Step Description 4</th>
                                    <td>{{ $process->step_description_4 }}</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $process->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $process->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('about_process.update', ['process' => $process->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                                <div class="modal-body">
                                                    <!-- Add fields here to update header -->
                                                    <div class="mb-3">
                                                        <label for="update_process_title" class="form-label">Updated Process Title</label>
                                                        <input type="text" class="form-control" id="update_process_title" name="title" value="{{ $process->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_subtitle" class="form-label">Updated Process Subtitle</label>
                                                        <input type="text" class="form-control" id="update_process_subtitle" name="subtitle" value="{{ $process->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_description" class="form-label">Updated Process Description</label>
                                                        <textarea class="form-control" id="update_process_description" name="description">{{ $process->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_1" class="form-label">Updated Process Step 1</label>
                                                        <input type="text" class="form-control" id="update_process_step_1" name="step_1" value="{{ $process->step_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_title_1" class="form-label">Updated Process Step Title 1</label>
                                                        <input type="text" class="form-control" id="update_process_step_title_1" name="step_title_1" value="{{ $process->step_title_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_description_1" class="form-label">Updated Process Step Description 1</label>
                                                        <input type="text" class="form-control" id="update_process_step_description_1" name="step_description_1" value="{{ $process->step_description_1 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_2" class="form-label">Updated Process Step 2</label>
                                                        <input type="text" class="form-control" id="update_process_step_2" name="step_2" value="{{ $process->step_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_title_2" class="form-label">Updated Process Step Title 2</label>
                                                        <input type="text" class="form-control" id="update_process_step_title_2" name="step_title_2" value="{{ $process->step_title_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_description_2" class="form-label">Updated Process Step Description 2</label>
                                                        <input type="text" class="form-control" id="update_process_step_description_2" name="step_description_2" value="{{ $process->step_description_2 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_3" class="form-label">Updated Process Step 3</label>
                                                        <input type="text" class="form-control" id="update_process_step_3" name="step_3" value="{{ $process->step_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_title_3" class="form-label">Updated Process Step Title 3</label>
                                                        <input type="text" class="form-control" id="update_process_step_title_3" name="step_title_3" value="{{ $process->step_title_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_description_3" class="form-label">Updated Process Step Description 3</label>
                                                        <input type="text" class="form-control" id="update_process_step_description_3" name="step_description_3" value="{{ $process->step_description_3 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_4" class="form-label">Updated Process Step 4</label>
                                                        <input type="text" class="form-control" id="update_process_step_4" name="step_4" value="{{ $process->step_4 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_title_4" class="form-label">Updated Process Step Title 4</label>
                                                        <input type="text" class="form-control" id="update_process_step_title_4" name="step_title_4" value="{{ $process->step_title_4 }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_process_step_description_4" class="form-label">Updated Process Step Description 4</label>
                                                        <input type="text" class="form-control" id="update_process_step_description_4" name="step_description_4" value="{{ $process->step_description_4 }}">
                                                    </div>
                                                    

                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Update process</button>
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
