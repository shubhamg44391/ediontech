@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">About Teams </h5>
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
                                @foreach ($teams as $index => $team)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Team  Title</th>
                                    <td>{{ $team->title }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Team Sub Title</th>
                                    <td>{{ $team->subtitle }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Team Description</th>
                                    <td>{{ $team->description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Team Link Title</th>
                                    <td>{{ $team->link_title }}</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $team->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('about_team.update', ['team' => $team->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Use the PUT method for updating -->
                                                <div class="modal-body">
                                                    <!-- Add fields here to update header -->
                                                    <div class="mb-3">
                                                        <label for="update_team_title" class="form-label">Updated Team Title</label>
                                                        <input type="text" class="form-control" id="update_team_title" name="title" value="{{ $team->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_team_subtitle" class="form-label">Updated Team Subtitle</label>
                                                        <input type="text" class="form-control" id="update_team_subtitle" name="subtitle" value="{{ $team->subtitle }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_team_description" class="form-label">Updated Team Description</label>
                                                        <textarea class="form-control" id="update_team_description" name="description">{{ $team->description }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="update_team_content_1" class="form-label">Updated Team Link Title</label>
                                                        <input type="text" class="form-control" id="update_team_link_title" name="link_title" value="{{ $team->link_title }}">
                                                    </div>

                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Update team</button>
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
