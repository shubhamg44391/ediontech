@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Home Lets Work</h5>
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
                                @foreach ($works as $index => $work)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Work Title</th>
                                    <td>{{ $work->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Work Sub-Title</th>
                                    <td>{{ $work->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Work Link Title</th>
                                    <td>{{ $work->link_title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $work->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $work->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('work.update', ['work' => $work->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                            
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="update_work_title" class="form-label">Updated Work Title</label>
                                                        <input type="text" class="form-control" id="update_work_title" name="title" required value="{{ $work->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_work_subtitle" class="form-label">Updated Work Subtitle</label>
                                                        <input type="text" class="form-control" id="update_work_subtitle" name="subtitle" value="{{ $work->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_content_title_1" class="form-label">Updated Work Link Title</label>
                                                        <input type="text" class="form-control" id="update_content_title_1" name="link_title" value="{{ $work->link_title }}">
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update work</button>
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
