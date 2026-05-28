@extends('layouts.app')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-md-12">
                    <h5 class="card-header m-0 me-2 pb-3">Social Media Links</h5>
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
                                @foreach ($links as $index => $link)
                                <tr>
                                    <th scope="row">Serial</th>
                                    <td>{{ $index + 1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Facebook</th>
                                    <td>{{ $link->facebook }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Instagram</th>
                                    <td>{{ $link->instagram }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Twitter</th>
                                    <td>{{ $link->twitter }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Threads</th>
                                    <td>{{ $link->threads }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">LinkedIn</th>
                                    <td>{{ $link->linkedin }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Actions</th>
                                    <td>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editLinkModal{{ $link->id }}">Edit</button>
                                    </td>
                                </tr>
                    
                                <!-- Edit Link Modal -->
                                <div class="modal fade" id="editLinkModal{{ $link->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" action="{{ route('social-media.update', $link->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editLinkModalLabel">Edit Social Media Link</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group mb-3">
                                                        <label for="facebook" class="form-label">Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" value="{{ $link->facebook }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="instagram" class="form-label">Instagram</label>
                                                        <input type="text" name="instagram" class="form-control" value="{{ $link->instagram }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="twitter" class="form-label">Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" value="{{ $link->twitter }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="threads" class="form-label">Threads</label>
                                                        <input type="text" name="threads" class="form-control" value="{{ $link->threads }}">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="linkedin" class="form-label">LinkedIn</label>
                                                        <input type="text" name="linkedin" class="form-control" value="{{ $link->linkedin }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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


    <!-- Add Link Modal -->
    {{-- <div class="modal fade" id="addLinkModal" tabindex="-1" role="dialog" aria-labelledby="addLinkModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('social-media.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLinkModalLabel">Add Social Media Link</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="social_media">Facebook</label>
                            <input type="text" name="facebook" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="social_media">Instagram</label>
                            <input type="text" name="instagram" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="social_media">Twitter</label>
                            <input type="text" name="twitter" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="social_media">Threads</label>
                            <input type="text" name="threads" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="social_media">Linkedin</label>
                            <input type="text" name="linkedin" class="form-control">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}


@endsection
